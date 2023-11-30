@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Add') }}</div>

                <div class="card-body text-center">
                    <form action="{{route('products.update',$product->id )}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row mt-2 ">
                                <label class="col-sm-2 control-label">Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ $product->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-2 control-label">Quantity </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter quantity" name="quantity" value="{{ $product->quantity }}" required>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-2 control-label">Price </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Price" name="price" value="{{ $product->price }}" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success text-start mt-2">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection