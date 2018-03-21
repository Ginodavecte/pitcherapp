@extends('layouts.app')

@section('content')
<div class="container">

  @section('styles')
      <link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
  @endsection

  <br>
    <p> <h3 style="text-align:center;">New products</h3> </p>
  <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item active">
                  <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=1">
              </div>
              <div class="carousel-item">
                  <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=2">
              </div>
              <div class="carousel-item">
                  <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=3">
              </div>
              <div class="carousel-item">
                  <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=4">
              </div>
              <div class="carousel-item">
                  <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=5">
              </div>
              <div class="carousel-item">
                  <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=6">
              </div>
          </div>
          <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>

                <!-- Page Heading -->
                <h1 class="my-4">Page Heading
                  <small>Secondary Text</small>
                </h1>

                <div class="row">
                  <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
                    <div class="card h-100">
                      <h4 class="card-title">
                        <a href="#">Category One</a>
                      </h4>
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
                    <div class="card h-100">
                      <h4 class="card-title">
                        <a href="#">Category Two</a>
                      </h4>
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
                    <div class="card h-100">
                      <h4 class="card-title">
                        <a href="#">Category Three</a>
                      </h4>
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
                    <div class="card h-100">
                      <h4 class="card-title">
                        <a href="#">Category Four</a>
                      </h4>
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
                    <div class="card h-100">
                      <h4 class="card-title">
                        <a href="#">Category Five</a>
                      </h4>
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
                    <div class="card h-100">
                      <h4 class="card-title">
                        <a href="#">Category Six</a>
                      </h4>
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

                    </div>
                  </div>
                </div>
                <!-- /.row -->

                @section('scripts')
                <script type="text/javascript" src="{{ asset('js/homepage/new-product-slider.js') }}"></script>
                <!-- <script type="text/javascript" src="{{ asset('js/productpage/related-product-slider.js') }}"></script> -->
                @endsection



</div>
@endsection
