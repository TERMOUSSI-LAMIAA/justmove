@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Sessions</h1>
        <div class="row">
            @foreach ($newSessions as $session)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Session ID: {{ $session->id }}</h5>
                            <p class="card-text">Date: {{ $session->date }}</p>
                            <p class="card-text">Start Time: {{ $session->start_time }}</p>
                            <p class="card-text">End Time: {{ $session->end_time }}</p>
                            <p class="card-text">Capacity: {{ $session->capacity }}</p>
                            <div class="btn-group" role="group" aria-label="Session Actions">
                                <a href="{{ route('session.edit', ['session' => $session->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('session.destroy', ['session' => $session->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h1>Old Sessions</h1>
        <div class="row">
            @foreach ($oldSessions as $session)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Session ID: {{ $session->id }}</h5>
                            <p class="card-text">Date: {{ $session->date }}</p>
                            <p class="card-text">Start Time: {{ $session->start_time }}</p>
                            <p class="card-text">End Time: {{ $session->end_time }}</p>
                            <p class="card-text">Capacity: {{ $session->capacity }}</p>
                            <div class="btn-group" role="group" aria-label="Session Actions">
                                <form action="{{ route('session.destroy', ['session' => $session->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
