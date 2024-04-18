@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Subscription') }}</div>

                <div class="card-body">
                    {{-- main content --}}
                    <form class="user" method="POST" action="{{ route('subscription.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Subscription Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" id="session_count"
                                name="session_count" placeholder="Session Count">
                        </div>
                         <div class="form-group">
                            <label for="type">Subscription Type:</label><br>
                            <select class="form-control" id="type" name="type">
                                <option value="Monthly">Monthly</option>
                                <option value="Trimester">Trimester</option>
                                <option value="Semester">Semester</option>
                                <option value="Annual">Annual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" id="price" name="price"
                                placeholder="Price">
                        </div>
                    
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Add Subscription
                        </button>
                    </form>
                    {{-- end of main content --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
