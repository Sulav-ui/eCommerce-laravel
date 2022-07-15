@extends('master')
@section("content")
<div class="custom-product my-4">

    <div id="carouselMaterialStyle" class="carousel slide carousel-fade my-3" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner  shadow-4-strong">
            <!-- Single item -->
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="d-block w-100" alt="{{$item['gallery']}}" style="height:400px ; object-fit: cover;" />
                    <div class="carousel-caption d-none d-md-block" style="background-color: #87ceeb54 !important;">
                        <h5>{{$item['name']}}</h5>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

    <!-- Trending products -->
    <div class="trending-wrapper">
        <h1>Trending Products</h1>
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

    @endsection