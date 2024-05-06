@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::get('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
        
    </div>
@endif
    <div class="mb-3">
    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Add Category</a>
        <table class="table table-striped border">
            <thead class = "table-primary">
                <tr>
                    <th>S.no.</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <tbody>
                    @foreach ($data as $info)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$info['name']}}</td>
                            <td><a href='/category/{{$info["id"]}}/edit'>Edit</a></td>
                            <td>

                            <form action='/category/{{$info["id"]}}' method="POST">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-link">Delete</button>


                            </form>
                        </tr>   
                    
                        
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection