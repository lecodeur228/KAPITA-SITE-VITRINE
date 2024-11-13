@extends('index')
@section('content')


		<!-- Start Hero Section -->
        <div class="hero">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="intro-excerpt">
                            <h1>Réalisations</h1>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        
                    </div>
                </div>
            </div>
        </div>
    

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
              <div class="row">
                @foreach ( $realisations as $realisation )
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="/storage/{{$realisation->image}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{$realisation->name}}</h3>
                        <strong class="product-price">{{$realisation->price}}</strong>

                        <span class="icon-cross">
                            <img src="{{asset("assets/images/cross.svg")}}" class="img-fluid">
                        </span>
                    </a>
                </div>
                @endforeach
                

                 <!-- Start Column 1 -->
           
                <!-- Start Column 4 -->
                <!-- End Column 4 -->

              </div>
        </div>
    </div>

@endsection