@extends('layouts.app')

@section('styles')
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="{{ asset('css/categories.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"><!-- product filter -->
      @include('layouts/product-filter')
    </div><!--End product filter -->

    <div class="col-md-8">
      <div class="row">
        <div class="col-md">
          <div class="row">
            <h1 class="my-4">Nike schoenen</h1>
          </div>
        </div>
        <div class="col-md">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button id="list" type="button" class="btn btn-secondary"><i class="fas fa-align-justify"></i></button>
            <button id="block" type="button" class="btn btn-secondary"><i class="fas fa-th"></i></button>
          </div>
        </div>
      </div>

      <div class="row" id="product_block">
        <div class="col-lg-3 col-md-4 col-sm-6 filter nike white shoes">
          <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
          <div class="card-body">
            <div class="row"> <p>Nike air 1 - White</p> </div>
            <div class="row">
              <p>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </p>
            </div>
            <div class="row"> <p>Price</p> </div>
            <div class="row">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Cart</button>
                <button type="button" class="btn btn-info">Wishlist</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 filter adidas blue shorts">
          <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
          <div class="card-body">
            <div class="row"> <p>Adidas - Blue - short</p> </div>
            <div class="row">
              <p>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </p>
            </div>
            <div class="row"> <p>Price</p> </div>
            <div class="row">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Cart</button>
                <button type="button" class="btn btn-info">Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
          <div class="card-body">
            <div class="row"> <p>Nike air 1</p> </div>
            <div class="row">
              <p>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </p>
            </div>
            <div class="row"> <p>Price</p> </div>
            <div class="row">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Cart</button>
                <button type="button" class="btn btn-info">Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
          <div class="card-body">
            <div class="row"> <p>Nike air 1</p> </div>
            <div class="row">
              <p>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </p>
            </div>
            <div class="row"> <p>Price</p> </div>
            <div class="row">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Cart</button>
                <button type="button" class="btn btn-info">Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
          <div class="card-body">
            <div class="row"> <p>Nike air 1</p> </div>
            <div class="row">
              <p>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </p>
            </div>
            <div class="row"> <p>Price</p> </div>
            <div class="row">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Cart</button>
                <button type="button" class="btn btn-info">Wishlist</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="product_list">
        <div class="col-lg-12 col-md-12 col-sm-12 mb-3  filter nike white shoes">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
                </div>
                <div class="col-md-5">
                  <div class="row"> <p>nike white shoes</p> </div>
                  <div class="row">
                    <p>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                  </div>
                  <div class="row">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut dui gravida, rhoncus orci ut, bibendum erat. Pellentesque sollicitudin varius.</div>
                </div>
                <div class="col-md-3">
                  <div class="row"><button type="button" class="btn btn-success">Add to cart</button></div>
                  <div class="row"><button type="button" class="btn btn-info">Add to wishlist</button></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-3  filter adidas black shorts">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
                </div>
                <div class="col-md-5">
                  <div class="row"> <p>adidas black shorts</p> </div>
                  <div class="row">
                    <p>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                  </div>
                  <div class="row">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut dui gravida, rhoncus orci ut, bibendum erat. Pellentesque sollicitudin varius.</div>
                </div>
                <div class="col-md-3">
                  <div class="row"><button type="button" class="btn btn-success">Add to cart</button></div>
                  <div class="row"><button type="button" class="btn btn-info">Add to wishlist</button></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-3 filter filla white shoes">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
                </div>
                <div class="col-md-5">
                  <div class="row"> <p>Nike air max 1</p> </div>
                  <div class="row">
                    <p>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                  </div>
                  <div class="row">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut dui gravida, rhoncus orci ut, bibendum erat. Pellentesque sollicitudin varius.</div>
                </div>
                <div class="col-md-3">
                  <div class="row"><button type="button" class="btn btn-success">Add to cart</button></div>
                  <div class="row"><button type="button" class="btn btn-info">Add to wishlist</button></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-3 filter nike red shirts">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
                </div>
                <div class="col-md-5">
                  <div class="row"> <p>Nike red shirts</p> </div>
                  <div class="row">
                    <p>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                  </div>
                  <div class="row">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut dui gravida, rhoncus orci ut, bibendum erat. Pellentesque sollicitudin varius.</div>
                </div>
                <div class="col-md-3">
                  <div class="row"><button type="button" class="btn btn-success">Add to cart</button></div>
                  <div class="row"><button type="button" class="btn btn-info">Add to wishlist</button></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      Sidebar right
    </div>
  </div>
</div>
<div class="container">
  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

</div>
<!-- /.container -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/categories.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection
