@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
  <!-- Page Heading -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-dark">Subscriptions</h1>
  </div>

  <!-- Subscription Cards -->
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($subs as $subscription)
      <div class="col">
        <div class="card border-0 shadow-lg h-100">
          <div class="card-header bg-secondary text-white text-center">
            <h5 class="mb-0">{{ $subscription->name }}</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-dumbbell text-primary me-2"></i>
                <strong>Session Count:</strong> {{ $subscription->session_count }}
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-tag text-primary me-2"></i>
                <strong>Price:</strong> {{ $subscription->price }} DH
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-calendar-alt text-primary me-2"></i>
                <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($subscription->start_date)->format('M d, Y') }}
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-calendar-times text-primary me-2"></i>
                <strong>End Date:</strong> {{ \Carbon\Carbon::parse($subscription->end_date)->format('M d, Y') }}
              </li>
            </ul>
          </div>
          <div class="card-footer bg-light text-center">
            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('subscription.edit', ['subscription' => $subscription->id]) }}" class="btn btn-sm btn-outline-warning">Edit</a>
              <form action="{{ route('subscription.destroy', ['subscription' => $subscription->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subscription?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
