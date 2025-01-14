@extends('layouts.appuserui')

@section('content')
 
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card border-top border-bottom border-3" style="border-color:#28a745; !important;">
          <div class="card-body p-5">

          <p class="lead fw-bold text-center mb-5" style="color:#28a745; font-size: 2rem;">Payment</p>

            <div class="row">
            <p class="lead fw-light text-center mb-5" style="color:#6c757d">To complete your purchase, please click Add to Cart</p>
              <div class="col mb-3">
                <p class="small text-muted mb-1">Order No.</p>
                <p>{{$prod->id_products}}</p>
              </div>
            </div>

            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p>{{$prod->Description}}</p>
                </div>
                <div class="col-md-4 col-lg-3">
                <p class="lead fw-light text-center mb-5" style="color:#6c757d">{{$prod->price}}</p>
                </div>
              </div>
            
            </div>

            <div class="row my-4">
              <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                <p>Total Price</p>
                <p class="lead fw-bold mb-0" style="color: #28a745;">{{$prod->price}}</p>
              </div>
            </div>

            <!-- <p class="lead fw-bold mb-4 pb-2" style="color: #28a745;">Tracking Order</p> -->

            <div class="row">
              <div class="col-lg-12">

                <div class="horizontal-timeline">

                  <ul class="list-inline items d-flex justify-content-between">
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #28a745;"> <a href="{{route('add_to_cart')}}" style="text-decoration: none; color: white;">Add To Cart </a> </p
                        class="py-1 px-2 rounded text-white" style="background-color: #28a745;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #28a745;"><a href="{{route('Seeds')}}" style="text-decoration: none; color: white;">Back to Store</a></p>
                    </li>
                   
                  </ul>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection