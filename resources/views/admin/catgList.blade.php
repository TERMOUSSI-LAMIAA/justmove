@extends('layouts.app')

@section('content')

    <!-- Main content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Categories</h1>

        <!-- Category Table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $category->img) }}" alt="image" width="80"></td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <!-- Update Category Button -->
                                        <a href="{{ route('category.edit',  ['category' => $category->id]) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <!-- Delete Category Button -->
                                        <form action="{{ route('category.destroy',  ['category' => $category->id]) }}" method="POST"
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
