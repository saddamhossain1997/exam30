@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Add') }}</div>

                <div class="card-body text-center">
                    <form action="{{route('store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row mt-2 ">
                                <label class="col-sm-2 control-label">Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-2 control-label">Quantity </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter quantity" name="quantity" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-2 control-label">Price </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Price" name="price" value="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success text-start mt-2">Submit</button>
                            <a href="{{route('list')}}" class="btn btn-success text-end mt-2">Go To List product</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection