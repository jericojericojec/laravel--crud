@extends('layout')

@section('content')
<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Edit Product</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at orci ut velit sagittis malesuada in vitae nulla. Suspendisse potenti. Duis eget sem eu dolor efficitur pharetra.</p>
    </div>

    <div class="container mb-md-5 pb-5">
        
        <form method="POST" action="" enctype="multipart/form-data">
            {!!csrf_field()!!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Type product name here..." name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="Type total quantity" name="quantity" value="{{$product->quantity}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" placeholder="Type price here" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{$product->description}}</textarea>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">            
                    <a href="{{route('homepage')}}" class="btn btn-secondary mb-2 mb-lg-0">Cancel</a>
                    <button type="submit" class="btn btn-primary mb-2 mb-lg-0">Save</button>
                </div>    
            <div>
        </form>
    </div>
</div>
@endsection
