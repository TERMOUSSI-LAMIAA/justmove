@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Sport') }}</div>

                    <div class="card-body">
                        {{-- main content --}}
                        <form class="user" method="POST" action="{{ route('sport.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="title"
                                    name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-user" id="description"
                                    name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label><br>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category:</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Add Sport
                            </button>
                        </form>
                        {{-- end of main content --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
