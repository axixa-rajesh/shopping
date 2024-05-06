@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="mb-3">
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

        <table class="table table-striped border">
            <thead class="table-primary">
                <tr>
                    <th>S.no.</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>MRP</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>CGST</th>
                    <th>SGST</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $info)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $info['name'] }}</td>
                    <td>{{ $info['description'] }}</td>
                    <td>{{ $info['mrp'] }}</td>
                    <td>{{ $info['price'] }}</td>
                    <td>{{ $info['discount'] }}</td>
                    <td>{{ $info['cgst'] }}</td>
                    <td>{{ $info['sgst'] }}</td>
                    <td><a href="/products/{{ $info['id'] }}/edit">Edit</a></td>
                    <td>
                        <form action="/products/{{ $info['id'] }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
