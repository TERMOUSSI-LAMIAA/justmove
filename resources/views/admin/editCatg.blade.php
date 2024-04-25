@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    {{ __('Edit Category') }}
                </div>
                <div class="card-body">
                    {{-- Main Content --}}
                    <form method="POST" action="{{ route('category.update', ['category' => $category->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title Input -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}" placeholder="Enter title" required>
                        </div>

                        <!-- Description Textarea -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" required>{{ $category->description }}</textarea>
                        </div>

                        <!-- Current Image Display -->
                        @if ($category->img)
                            <div class="mb-3">
                                <label class="form-label">Current Image</label>
                                <div>
                                    <img src="{{ asset('storage/' . $category->img) }}" alt="Current Image" class="img-thumbnail" width="100">
                                </div>
                            </div>
                        @endif

                        <!-- New Image Input -->
                        <div class="mb-3">
                            <label for="image" class="form-label">New Image (optional)</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                    {{-- End of Main Content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
