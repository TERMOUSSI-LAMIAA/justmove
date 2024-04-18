@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('subscribe') }}">
        @csrf
        <div class="form-group">
            <label for="sport">Choose Sport:</label>
            <select class="form-control" id="sport" name="sport_id">
                @foreach ($sports as $sport)
                    <option value="{{ $sport->id }}">{{ $sport->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            @foreach ($subscriptions as $subscription)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subscription->name }}</h5>
                            <p class="card-text">Session Count: {{ $subscription->session_count }}</p>
                            <p class="card-text">Duration: {{ $subscription->type }}</p>
                            <p class="card-text">Price:{{ $subscription->price }} DH</p>
                            <input type="radio" id="subscription_{{ $subscription->id }}" name="subscription_id"
                                value="{{ $subscription->id }}">
                            <label for="subscription_{{ $subscription->id }}">Select</label>
                            <input type="hidden" name="user_id" value="{{ $user_id }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
@endsection
