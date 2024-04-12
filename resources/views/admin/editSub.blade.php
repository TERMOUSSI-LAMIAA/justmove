@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Subscription') }}</div>

                <div class="card-body">
                    {{-- main content --}}
                    <form class="user" method="POST" action="{{ route('subscription.update', ['subscription' => $subscription->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Subscription Name" value="{{ $subscription->name }}">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" id="session_count"
                                name="session_count" placeholder="Session Count" value="{{ $subscription->session_count }}">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" id="price" name="price"
                                placeholder="Price" value="{{ $subscription->price }}">
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date:</label><br>
                            <input type="date" class="form-control" id="start_date" name="start_date"  value="{{ $subscription->start_date }}">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date:</label><br>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $subscription->end_date }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Update Subscription
                        </button>
                    </form>
                    {{-- end of main content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
