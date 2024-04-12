@extends('layouts.app')

@section('content')
<!-- main content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Subscriptions</h1>

    <!-- Subscription Cards -->
    <div class="row">
        @foreach ($subs as $subscription)
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $subscription->name }}</h5>
                    <p class="card-text">Session Count: {{ $subscription->session_count }}</p>
                    <p class="card-text">Price:{{ $subscription->price }} DH</p>
                    <p class="card-text">Start Date: {{ $subscription->start_date }}</p>
                    <p class="card-text">End Date: {{ $subscription->end_date }}</p>
                    <!-- Update Subscription Button -->
                    <a href="{{ route('subscription.edit', ['subscription' => $subscription->id]) }}"
                        class="btn btn-primary btn-sm">Edit</a>
                    <!-- Delete Subscription Button -->
                    <form action="{{ route('subscription.destroy', ['subscription' => $subscription->id]) }}" method="POST"
                        style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- End of Subscription Cards -->

</div>
<!-- End of main content -->
@endsection
