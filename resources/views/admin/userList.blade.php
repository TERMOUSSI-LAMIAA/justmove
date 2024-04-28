@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading with Add User Button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-dark">Users Management</h1>

        </div>

        <!-- Users Table -->
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                <h6 class="m-0 font-weight-bold">Users List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="usersTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Birth Date</th>
                                <th>Sport</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $user->photo) }}" alt="Photo of {{ $user->name }}"
                                            class="img-thumbnail" width="50"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->categorie }}</td>
                                    <td>{{ $user->date_naissance }}</td>
                                    <td>{{ $user->sport->title }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <!-- Edit User -->
                                            <a href="{{ route('editUserForm', ['id' => $user->id]) }}"
                                                class="btn btn-sm btn-info">Edit</a>
                                                {{-- delete --}}
                                            <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete {{ $user->name }}?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
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
