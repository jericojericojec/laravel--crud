@extends('layout')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Products</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at orci ut velit sagittis malesuada in vitae nulla. Suspendisse potenti. Duis eget sem eu dolor efficitur pharetra.</p>
</div>

<div class="container mb-md-5 pb-5">
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
            @forelse($products as $index => $product)
                <th scope="row">{{$product->name}}</th>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('update', ['id' => $product->id])}}" class="text-secondary mr-2"><i class="fas fa-pen"></i></a>
                    <a href="{{route('delete', ['id' => $product->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            @empty
            <td class="text-center" colspan="5"><p>No data found</p></td>
            @endforelse
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-12 text-right">
            <a href="{{route('create')}}" class="btn btn-primary mb-2 mb-lg-0">Add Product</a>
        </div>
    </div>
</div>
@endsection
