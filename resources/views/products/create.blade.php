@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Page') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Product name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" required  autofocus placholder = "Enter product name">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control " name="description"  placholder = "Enter product description">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mrp" class="col-md-4 col-form-label text-md-end">{{ __('mrp') }}</label>

                            <div class="col-md-6">
                                <input id="mrp" type="number" class="form-control " name="mrp" min= 0  placholder = "Enter mrp">

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control " name="price" min= 0  placholder = "Enter price">

                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="discount" class="col-md-4 col-form-label text-md-end">{{ __('discount') }}</label>

                            <div class="col-md-6">
                                <input id="discount" type="number" class="form-control " name="discount" min = 0 max = 100 placholder = "Enter discount">

                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="cgst" class="col-md-4 col-form-label text-md-end">{{ __('cgst') }}</label>

                            <div class="col-md-6">
                                <input id="cgst" type="number" class="form-control " name="cgst" min = 0 max = 100 placholder = "Enter cgst">

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="sgst" class="col-md-4 col-form-label text-md-end">{{ __('sgst') }}</label>

                            <div class="col-md-6">
                                <input id="sgst" type="number" class="form-control " name="sgst" min = 0 max = 100 placholder = "Enter sgst">

                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
