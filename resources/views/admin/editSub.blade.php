@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">{{ __('Edit Subscription') }}</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('subscription.update', ['subscription' => $subscription->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Subscription Name:</label>
                            <input 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name', $subscription->name) }}" 
                                placeholder="Enter subscription name" 
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="session_count" class="form-label">Session Count:</label>
                            <input 
                                type="number" 
                                class="form-control @error('session_count') is-invalid @enderror" 
                                id="session_count" 
                                name="session_count" 
                                value="{{ old('session_count', $subscription->session_count) }}" 
                                placeholder="Enter session count" 
                                required
                            >
                            @error('session_count')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="type" class="form-label">Subscription Type:</label>
                            <select 
                                class="form-control @error('type') is-invalid @enderror" 
                                id="type" 
                                name="type" 
                                required
                            >
                                <option value="Monthly" {{ $subscription->type === 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                <option value="Trimester" {{ $subscription->type === 'Trimester' ? 'selected' : '' }}>Trimester</option>
                                <option value="Semester" {{ $subscription->type === 'Semester' ? 'selected' : '' }}>Semester</option>
                                <option value="Annual" {{ $subscription->type === 'Annual' ? 'selected' : '' }}>Annual</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Price (DH):</label>
                            <input 
                                type="number" 
                                class="form-control @error('price') is-invalid @enderror" 
                                id="price" 
                                name="price" 
                                value="{{ old('price', $subscription->price) }}" 
                                placeholder="Enter price in DH" 
                                required
                            >
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Update Subscription') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
