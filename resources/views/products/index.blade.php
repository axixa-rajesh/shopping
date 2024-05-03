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
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>mrp </th>
                    <th>price</th>
                    <th>discount</th>
                    <th>cgst</th>
                    <th>sgst</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach ($data as $info)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$info['name']}}</td>
                            <td>{{$info['description']}}</td>
                            <td>{{$info['mrp']}}</td>
                            <td>{{$info['price']}}</td>
                            <td>{{$info['discount']}}</td>
                            <td>{{$info['cgst']}}</td>
                            <td>{{$info['sgst']}}</td>
                            <td><a href="/products/{{$info["id"]}}/edit">Edit</a>
                            
                            </td>
                        </tr>   
                    
                        
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection