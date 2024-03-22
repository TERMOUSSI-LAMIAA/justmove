<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        return view("admin.dashboard");
    }
    public function userDashboard()
    {
        return view("user.dashboard");
    }
    public function addUserForm()
    {
        return view("admin.addUser");
    }
    public function register(Request $request, $isMemberRegistration = false)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'categorie' => 'nullable|string|in:Male,Female',
            'date_naissance' => 'nullable|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type_user = $isMemberRegistration ? 'member' : 'user';
        $user->categorie = $request->categorie;
        $user->date_naissance = $request->date_naissance;

        if ($request->hasFile('photo')) {
            $user->photo = $request->file('photo')->store('imgs', 'public');
        }

        $user->save();
    }

    public function addUser(Request $request)
    {
        $this->register($request);
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
}
