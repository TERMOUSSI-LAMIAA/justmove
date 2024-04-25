@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    {{ __('Edit User') }}
                </div>
                <div class="card-body">
                    {{-- Main Content --}}
                    <form method="POST" action="{{ route('updateUser', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Name Input -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>

                        <!-- Category Radio Buttons -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="categorie" id="male" value="Male" {{ $user->categorie == 'Male' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="categorie" id="female" value="Female" {{ $user->categorie == 'Female' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>

                        <!-- Birthdate Input -->
                        <div class="mb-3">
                            <label for="date_naissance" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" name="date_naissance" id="date_naissance" value="{{ $user->date_naissance }}" required>
                        </div>

                        <!-- Current Photo Display -->
                        @if ($user->photo)
                            <div class="mb-3">
                                <label class="form-label">Current Photo</label>
                                <div>
                                    <img src="{{ asset('storage/' . $user->photo) }}" alt="Current Photo" class="img-thumbnail" width="100">
                                </div>
                            </div>
                        @endif

                        <!-- New Photo Input -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">New Photo (optional)</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </form>
                    {{-- End of Main Content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
