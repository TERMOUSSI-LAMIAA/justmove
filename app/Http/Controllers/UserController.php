<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Sport;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }
    public function registerForm()
    {
        return view('register');
    }
    public function adminDashboard()
    {
        $totalCategories = Category::count();
        $totalSports= Sport::count();
        $totalUsers= User::where('type_user','user')->count();
        $totalMembers= User::where('type_user','member')->count();
        return view("admin.dashboard", compact('totalCategories', 'totalSports', 'totalUsers', 'totalMembers'));
    }
    public function userDashboard()
    {
        return view("user.dashboard");
    }
    public function addUserForm()
    {
        $sports=Sport::all();
        return view("admin.addUser",compact('sports'));
    }
    public function userList()
    {
        $users = User::where('type_user','user')->get();
        return view("admin.userList", compact("users"));
    }
    public function membersList()
    {//? and check that the user have a subscription to be a member
        $members = User::where('type_user', 'member')->get();
        return view("admin.membersList", compact("members"));
    }
    public function register(Request $request, $isMemberRegistration = false, $sportId = null)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'categorie' => 'nullable|string|in:Male,Female',
            'date_naissance' => 'nullable|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sport_id' => 'nullable|exists:sport,id'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type_user = $isMemberRegistration ? 'member' : 'user';
        $user->categorie = $request->categorie;
        $user->date_naissance = $request->date_naissance;
        $user->sport_id = $sportId;

        if ($request->hasFile('photo')) {
            $user->photo = $request->file('photo')->store('imgs', 'public');
        }

        $user->save();
    }

    public function addUser(Request $request)
    {
        $sportId = $request->input('sport_id');
        $this->register($request ,false, $sportId);
        return redirect()->back()->with('success', 'Usre added successfully!');
    }
    public function addMember(Request $request)
    {
        $this->register($request, true);
        return redirect()->route('home')->with('success', 'Member registered successfully!');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->type_user === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->type_user === 'member') {
                return redirect()->route('home');
            } elseif ($user->type_user === 'user') {
                return redirect()->route('user.dashboard');
            }
        } else {
            return redirect()->route('loginform')->with('error', 'Invalid credentials')->withInput($request->only('email'));
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }

    public function editUserForm($id){
        $sports=Sport::all();
        $user = User::findOrFail($id);
        $currentSportId = $user->sport_id ?? null; 
        return view("admin.editUser",compact("user","sports", "currentSportId"));
    }

    public function updateUser(Request $request, $id){
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'categorie' => 'required|string|max:255',
            'date_naissance' => 'nullable|date',
            'sport_id' => 'nullable|exists:sports,id'
        ]);
        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::delete($user->photo);
            }
            $user->photo = $request->file('photo')->store('imgs', 'public');
        }
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->categorie = $validatedData['categorie'];
        $user->date_naissance = $validatedData['date_naissance'];
        $user->sport_id = $validatedData['sport_id'] ?? $user->sport_id;
        $user->save();

        $redirectRoute = ($user->type_user === 'member') ? 'membersList' : 'usersList';

        return redirect()->route($redirectRoute)->with('success', 'Record updated successfully');
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);

        $user->delete();

        $redirectRoute = ($user->type_user === 'member') ? 'membersList' : 'usersList';
        return redirect()->route($redirectRoute)->with('success', 'Record deleted successfully');
    }

    public function getCoaches(){
        $users = User::where('type_user', 'user')->get();
        return view("welcome", compact("users"));
    }
    
}
