@extends('master')
@section("content")
<div class="container my-4">
    <div class="row">
        <div class="col-sm-6">
            <div class="bg-image hover-overlay ripple">
                <img src="{{$product['gallery']}}" class="img-fluid" style="height: 350px;" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
            </div>
            <!-- <img class="" src="{{$product['gallery']}}" alt=""> -->
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary" href="/" role="button" style="margin:10px 0 10px 0;">Go Back</a>
            <h2><small class="text-muted">Name : {{$product['name']}}</small></h2>
            <h3><small class="text-muted">Price : {{$product['price']}} NRP</small></h3>
            <h4><small class="text-muted">Category : {{$product['category']}} NRP</small></h4>
            <h4><small class="text-muted">Description : {{$product['description']}} NRP</small></h4>
            <div class="button" style="margin-top: 78px;">
                <button type="button" class="btn btn-success">Add to Cart</button>
                <button type="button" class="btn btn-primary">Buy Now</button>
            </div>

        </div>
    </div>
</div>

@endsection