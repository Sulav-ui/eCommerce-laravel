@extends('master')
@section("content")
<div class="custom-product my-4">
    <!-- Trending products -->
    <div class="trending-wrapper">
        <h1>Result for Products</h1>
        <!-- Trending Product cards -->
        @foreach ($products as $item)
        <div class="card" style="float: left; margin:20px 85px 20px 0;">

            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{$item['gallery']}}" class="img-fluid" style="height: 200px;" />
                <a href="detail/{{$item['id']}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <a href="detail/{{$item['id']}}">
                    <h5 class="card-title">{{$item['name']}}</h5>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection