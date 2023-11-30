@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product List') }}</div>
                @if(Session::has('success'))
                <p class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
                <div class="card-body text-center">
                    <div class="card-body">

                        <table class=" table table-striped">
                            <thead>
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $product_lists as $product_list )
                                <tr>
                                    <td>{{$product_list->name}} </td>
                                    <td>{{$product_list->quantity}}</td>
                                    <td>{{$product_list->price}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('products.edit', $product_list->id) }}">Edit</a>

                                        <form method="post" action="{{ route('delete', $product_list->id) }}" style="display: inline;">
                                            @csrf
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this Product?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{route('add')}}" class="btn btn-success text-start mt-2">Back To Add product</a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection