@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="h3 text-primary">Members</h1>
    </div>

    <!-- Members Table -->
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Members List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Birthdate</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="photo" class="rounded-circle" width="50" height="50">
                            </td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->categorie}}</td>
                            <td>{{ $member->date_naissance}}</td>
                            <td>
                                @if (Auth::user()->type_user === 'admin')
                                    <a href="{{ route('editUserForm', ['id' => $member->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('deleteUser', ['id' => $member->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this member?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                @elseif(Auth::user()->type_user === 'user')
                                    <a href="{{ route('subscribeMemberForm', ['user_id' => $member->id]) }}" class="btn btn-sm btn-outline-success">Subscribe</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
