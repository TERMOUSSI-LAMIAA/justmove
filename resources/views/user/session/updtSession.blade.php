@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Session') }}</div>

                    <div class="card-body">
                        {{-- main content --}}
                        <form class="user" method="POST" action="{{ route('session.update', ['session' => $session->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="date">Date:</label><br>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $session->date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="start_time">Start Time:</label><br>
                                <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $session->start_time }}" required>
                            </div>
                            <div class="form-group">
                                <label for="end_time">End Time:</label><br>
                                <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $session->end_time }}" required>
                            </div>
                            <div class="form-group">
                                <label for="capacity">Capacity:</label><br>
                                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $session->capacity }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Update Session
                            </button>
                        </form>
                        {{-- end of main content --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
