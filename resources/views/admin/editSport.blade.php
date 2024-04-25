@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    {{ __('Edit Sport') }}
                </div>
                <div class="card-body">
                    {{-- Main Content --}}
                    <form method="POST" action="{{ route('sport.update', ['sport' => $sport->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title Input -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $sport->title }}" required>
                        </div>

                        <!-- Description Input -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3" required>{{ $sport->description }}</textarea>
                        </div>

                        <!-- Current Image Display -->
                        @if ($sport->img)
                            <div class="mb-3">
                                <label class="form-label">Current Image</label>
                                <div>
                                    <img src="{{ asset('storage/' . $sport->img) }}" alt="Current Sport Image" class="img-thumbnail" width="100">
                                </div>
                            </div>
                        @endif

                        <!-- New Image Input -->
                        <div class="mb-3">
                            <label for="img" class="form-label">New Image (optional)</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update Sport</button>
                    </form>
                    {{-- End of Main Content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
