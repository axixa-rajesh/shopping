@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::get('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
        
    </div>
@endif
    <div class="mb-3">
        <table class="table table-striped border">
            <thead class = "table-primary">
                <tr>
                    <th>S.no.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach ($data as $info)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$info['name']}}</td>
                            <td><a href="/category/{{$info["id"]}}/edit">Edit</a>
                            
                            </td>
                        </tr>   
                    
                        
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection