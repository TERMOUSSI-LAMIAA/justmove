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
                            <label for="type">Subscription Type:</label><br>
                            <select class="form-control" id="type" name="type">
                                <option value="Monthly" {{ $subscription->type === 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                <option value="Trimester" {{ $subscription->type === 'Trimester' ? 'selected' : '' }}>Trimester</option>
                                <option value="Semester" {{ $subscription->type === 'Semester' ? 'selected' : '' }}>Semester</option>
                                <option value="Annual" {{ $subscription->type === 'Annual' ? 'selected' : '' }}>Annual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" id="price" name="price"
                                placeholder="Price" value="{{ $subscription->price }}">
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
