@extends('layouts.app')

@section('styles')
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="{{ asset('css/categories.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="#">Home</a>
      <span class="breadcrumb-item active">Bootstrap</span>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-2">
      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="collapseListGroup1">
                Categories
              </a>
            </h4>
          </div>
          <div id="categories" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <ul class="list-group">
              <li class="list-group-item"><input type="checkbox" name="brand"> Category 1</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Category 2</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Category 3</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="collapseListGroup1">
                Brands
              </a>
            </h4>
          </div>
          <div id="brands" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <ul class="list-group">
              <li class="list-group-item"><input type="checkbox" name="brand"> Brand 1</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Brand 2</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Brand 3</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#color" aria-expanded="false" aria-controls="collapseListGroup1">
                Color
              </a>
            </h4>
          </div>
          <div id="color" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <select class="form-control">
              <option>Color 1</option>
              <option>Color 2</option>
              <option>Color 3</option>
              <option>Color 4</option>
              <option>Color 5</option>
            </select>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#size" aria-expanded="false" aria-controls="collapseListGroup1">
                Size
              </a>
            </h4>
          </div>
          <div id="size" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <select class="form-control">
              <option>Size 1</option>
              <option>Size 2</option>
              <option>Size 3</option>
              <option>Size 4</option>
              <option>Size 5</option>
            </select>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#price" aria-expanded="false" aria-controls="collapseListGroup1">
                Price
              </a>
            </h4>
          </div>
          <div id="price" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <p><input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></p>
            <div id="slider-range"></div>
          </div>
        </div>
      </div>
    </div>

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
        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
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
        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
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
        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
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
        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
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
