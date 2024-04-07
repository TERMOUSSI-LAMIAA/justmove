@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit User') }}</div>

                    <div class="card-body">
                        {{-- main content --}}
                        <form class="user" method="POST" action="{{ route('updateUser', $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Name:</label><br>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        name="name" placeholder="Name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label><br>
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    name="email" placeholder="Email Address" value="{{ $user->email }}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="categorie">Category:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="categorie" id="maleRadio"
                                            value="Male" {{ $user->categorie == 'Male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="maleRadio">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="categorie" id="femaleRadio"
                                            value="Female" {{ $user->categorie == 'Female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="femaleRadio">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="birth">Birth date:</label><br>
                                    <input type="date" class="form-control form-control-user" name="date_naissance"
                                        id="date_naissance" value="{{ $user->date_naissance }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="photo">Photo:</label><br>
                                    @if ($user->photo)
                                        <div>
                                            <p>Current photo</p>
                                            <img src="{{ asset('storage/' . $user->photo) }}" alt="Current Photo"
                                                width="100">     
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="photo">New photo:</label><br>
                                    <input type="file" class="form-control-file" name="photo" id="photo">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Update User
                            </button>
                        </form>
                        {{-- end of main content --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
