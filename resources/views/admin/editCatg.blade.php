@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Category') }}</div>

                    <div class="card-body">
                        {{-- main content --}}
                        <form class="user" method="POST"
                            action="{{ route('category.update', ['category' => $category->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title:</label><br>
                                <input type="text" class="form-control form-control-user" id="title" name="title"
                                    placeholder="Title" value="{{ $category->title }}">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description:</label><br>
                                <textarea class="form-control form-control-user" id="description" name="description" placeholder="Description">{{ $category->description }}</textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    @if ($category->img)
                                        <div>
                                            <p>Current image</p>
                                            <img src="{{ asset('storage/' . $category->img) }}" alt="Current Photo"
                                                width="100">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="photo">New image:</label><br>
                                    <input type="file" class="form-control-file" name="image" id="image">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Update Category
                            </button>
                        </form>
                        {{-- end of main content --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
