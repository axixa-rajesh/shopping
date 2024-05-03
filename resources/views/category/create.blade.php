@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Category') }}</div>

                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required autofocus placeholder="Enter category">
                        </div>
                        <div class="form-group">     
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-block mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
