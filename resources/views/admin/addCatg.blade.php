@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    {{ __('Add Category') }}
                </div>
                <div class="card-body">
                    {{-- Main Content --}}
                    <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Title Input -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter category title" required>
                        </div>

                        <!-- Description Textarea -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter category description" required></textarea>
                        </div>

                        <!-- Image Input -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                    {{-- End of Main Content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
