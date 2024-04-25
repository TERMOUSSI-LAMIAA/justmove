@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    {{ __('Add User') }}
                </div>
                <div class="card-body">
                    {{-- Main Content --}}
                    <form method="POST" action="{{ route('addUser') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name Input -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                        </div>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>

                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>

                        <!-- Category Radio Buttons -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="categorie" id="male" value="Male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="categorie" id="female" value="Female" required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>

                        <!-- Birthdate Input -->
                        <div class="mb-3">
                            <label for="date_naissance" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                        </div>

                        <!-- Photo Input -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo (optional)</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>

                        <!-- Sport Selection -->
                        <div class="mb-3">
                            <label for="sport_id" class="form-label">Sport</label>
                            <select class="form-control" id="sport_id" name="sport_id" required>
                                @foreach($sports as $sport)
                                    <option value="{{ $sport->id }}">{{ $sport->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Add User</button>
                    </form>
                    {{-- End of Main Content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
