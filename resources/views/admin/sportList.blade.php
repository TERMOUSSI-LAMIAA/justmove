@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-primary">Sports</h1>
    </div>

    <!-- Sport Table -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h6 class="mb-0">Sport List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
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
                                <td>
                                    <img src="{{ asset('storage/' . $sport->img) }}" alt="{{ $sport->title }} image" class="img-thumbnail" width="80">
                                </td>
                                <td>{{ $sport->title }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($sport->description, 40) }}</td>
                                <td>{{ $sport->category->title }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <!-- Edit Button -->
                                        <a href="{{ route('sport.edit', ['sport' => $sport->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                        
                                        <!-- Delete Button -->
                                        <form action="{{ route('sport.destroy', ['sport' => $sport->id]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this sport?')">Delete</button>
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
