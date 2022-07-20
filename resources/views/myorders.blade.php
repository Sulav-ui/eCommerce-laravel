@extends('master')
@section("content")
<div class="custom-product my-4">
    <!-- Order products -->
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            <!-- Order Product cards -->
            @foreach ($orders as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{$item->gallery}}" class="img-fluid" style="height: 200px;" />
                        <a href="detail/{{$item->id}}">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h4>Name : {{$item->name}}</h4>
                        <h6>Delivery Status :{{$item->status}}</h6>
                        <h6>Address : {{$item->address}}</h6>
                        <h6>Payment Status : {{$item->payment_status}}</h6>
                        <h6>Payment Method : {{$item->payment_method}}</h6>
                    </div>
                </div>

            </div>
            <!-- <div class="card" style="float: left; margin:20px 85px 20px 0;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{$item->gallery}}" class="img-fluid" style="height: 200px;" />
                    <a href="detail/{{$item->id}}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="detail/{{$item->id}}">
                        <h5 class="card-title">{{$item->name}}</h5>
                    </a>
                </div>
            </div> -->
            @endforeach

        </div>
    </div>

</div>
@endsection