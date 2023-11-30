@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Information') }}</div>

                <div class="card-body text-center">
                    <a class="btn btn-success" href="{{route('add')}}">Add Product</a>
                    <a class="btn btn-primary" href="{{route('list')}}">Show Product</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection