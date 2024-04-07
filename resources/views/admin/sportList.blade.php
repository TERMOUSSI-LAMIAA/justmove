@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sports</h1>

        <!-- Sport Table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sport List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sports as $sport)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $sport->img) }}" alt="image" width="80"></td>
                                    <td>{{ $sport->title }}</td>
                                    <td>{{ $sport->description }}</td>
                                    <td>{{ $sport->category->title }}</td>
                                    <td>
                                        <!-- Update Sport Button -->
                                        <a href="{{ route('sport.edit', ['sport' => $sport->id]) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <!-- Delete Sport Button -->
                                        <form action="{{ route('sport.destroy', ['sport' => $sport->id]) }}" method="POST"
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
