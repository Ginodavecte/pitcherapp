@extends('layouts.app')

@section('styles')
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="{{ asset('css/categories.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 sb">
      Sidebar left
    </div>
    <div class="col-md-8 sb">
      <div class="row">
        <div class="col-md">
          <div class="row">
            <h1 class="my-4">Page Heading</h1>
          </div>
        </div>
        <div class="col-md">
          <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Home</a>
            <span class="breadcrumb-item active">Bootstrap</span>
          </nav>
        </div>
        <div class="col-md">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary"><i class="fas fa-align-justify"></i></button>
            <button type="button" class="btn btn-secondary"><i class="fas fa-th"></i></button>
          </div>

          </button>
        </div>

      </div>
      <div class="row block">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Two</a>
              </h4>
              <p class="card-text">Product</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row list">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-header">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="panel-title">title</h3>
                </div>
                <div class="col-md-6">
                  <h3 class="panel-title">Price</h3>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3">
                  <img class="card-img-top" src="http://placehold.it/700x400" alt="">
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <button type="button" class="btn btn-default ml-auto">button</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-2 sb">
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
