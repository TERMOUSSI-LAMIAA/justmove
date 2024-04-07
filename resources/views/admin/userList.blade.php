@extends('layouts.app')

@section('content')
    <!-- main content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>


        <!-- User Table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Birth date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $user->photo) }}" alt="photo" width="80">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->categorie }}</td>
                                    <td>{{ $user->date_naissance }}</td>
                                    <td>
                                        <!-- Update User Button -->
                                        <a href="{{ route('editUserForm', ['id' => $user->id]) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <!-- Delete User Button -->
                                        <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- End of main content -->
@endsection
