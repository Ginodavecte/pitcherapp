@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/account/bootstrap_account.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/account/socialmedia-icons.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')

<div class="d-flex flex-row">

  <div class="wrapper">

    <nav id="sidebar" class="h-100 d-inline-block">
      <!-- Sidebar user image -->
      <div class="row sidebar-header" style="background:rgba(255,255,255,.1)">
        <div class="col">
          <img src="{{ URL::to('/') }}/img/profilepage/original.png.jpeg" class="img-fluid rounded-circle" style="border:solid">
        </div>
        <div class="col mx-auto my-auto">
          <p class="text-white"><h5>Jack van Puffelen</h5><p>
        </div>
      </div>

      <!-- Sidebar Header -->
      <div class="sidebar-header">
        <h3>Shortcuts</h3>
      </div>


          <!-- Sidebar Links -->
          <ul class="list-unstyled components">
              <li class="px-2"><a href="#"><i class="far fa-list-alt"></i> Orders</a></li>
              <li class="active px-2"><a href="#"><i class="fa fa-gift"></i> Wishlist</a></li>
              <li class="px-2"><a href="/profile"><i class="fa fa-user"></i> Profile</a></li>
              <li class="px-2"><a href="#"><i class="fa fa-shopping-cart"></i> Shopcart</a></li>
          </ul>
      </nav>

  </div>

  <div class="container" style="background-color: #dee2e6;">

      <!-- <div class="container-fluid"> -->
        <!--Header start-->
        <div class="row">
          <div class="col row rounded border border-secondary mx-1 my-1 p-2 bg-white">
              <div class="col">
                <h5>Image</h5>
              </div>
              <div class="col">
                <h5>@lang('messages.product_name')</h5>
              </div>
              <div class="col text-center">
                <h5>In stock</h5>
              </div>
              <div class="col text-right">
                <h5>Price</h5>
              </div>
              <div class="col text-right">
                <h5>Quantity</h5>
              </div>
              <div class="col text-right">
                <h5>Subtotal</h5>
              </div>
          </div>
          <div class="col-md-auto my-1 invisible">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.addcart')
            </button>
          </div>
        </div>
        <!--Header end -->
        <!-- Order start-->
        <div class="row">
          <div class="col row rounded border border-secondary mx-1 my-1 p-2 bg-white">
              <div class="col">
                <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
              </div>
              <div class="col">
                @lang('messages.product_name')
              </div>
              <div class="col">
                <div class="rounded border border-success text-success text-center">True</div>
              </div>
              <div class="col text-right">
                <h6><span>$</span>25.00</h6>
              </div>
              <div class="col text-right">
                <span>1</span>
              </div>
              <div class="col text-right">
                <h6><span>$</span>25.00</h6>
              </div>
          </div>
          <div class="col-md-auto my-1">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.addcart')
            </button>
          </div>
        </div>
        <!-- Order end-->
        <!-- Order start-->
        <div class="row">
          <div class="col row rounded border border-secondary mx-1 my-1 p-2 bg-white">
              <div class="col">
                <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
              </div>
              <div class="col">
                @lang('messages.product_name')
              </div>
              <div class="col">
                <div class="rounded border border-danger text-danger text-center">False</div>
              </div>
              <div class="col text-right">
                <h6><span>$</span>50.00</h6>
              </div>
              <div class="col text-right">
                <span>2</span>
              </div>
              <div class="col text-right">
                <h6><span>$</span>100.00</h6>
              </div>
          </div>
          <div class="col-md-auto my-1">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.addcart')
            </button>
          </div>
        </div>
        <!-- Order end-->
        <!-- Order start-->
        <div class="row">
          <div class="col row rounded border border-secondary mx-1 my-1 p-2 bg-white">
              <div class="col">
                <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
              </div>
              <div class="col">
                @lang('messages.product_name')
              </div>
              <div class="col">
                <div class="rounded border border-success text-success text-center">True</div>
              </div>
              <div class="col text-right">
                <h6><span>$</span>75.00</h6>
              </div>
              <div class="col text-right">
                <span>4</span>
              </div>
              <div class="col text-right">
                <h6><span>$</span>300.00</h6>
              </div>
          </div>
          <div class="col-md-auto my-1">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.addcart')
            </button>
          </div>
        </div>
        <!-- Order end-->
        <!--Totals start-->
        <div class="row">
          <div class="col row rounded border border-secondary mx-1 my-1 p-2 bg-white">
              <div class="col">
                <h5>Total</h5>
              </div>
              <div class="col">
              </div>
              <div class="col">
              </div>
              <div class="col">
              </div>
              <div class="col text-right">
                <h6><b><span>$</span>425.00</b></h6>
              </div>
          </div>
          <div class="col-md-auto my-1 invisible">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.addcart')
            </button>
          </div>
        </div>
        <!--Totals end -->
        <!--Social media links-->
        <div class="row mobile-social-share">
        		<div id="socialShare" class="row btn-group share-group mx-1 p-2">
              <div class="mr-3">
                      <h5>Share on social media</h5>
                  </div>
                    <a data-toggle="dropdown" class="btn btn-info">
                         <i class="fa fa-share-alt fa-inverse"></i>
                    </a>
    				<button href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle share">
    				</button>
    				<ul class="dropdown-menu">
        				<li>
    					    <a href="#" data-toggle="tooltip" title="Twitter" class="btn btn-twitter" data-placement="left">
								<i class="fa fa-twitter"></i>
							</a>
    					</li>
    					<li>
    						<a href="#" data-toggle="tooltip" title="Facebook" class="btn btn-facebook" data-placement="left">
								<i class="fa fa-facebook"></i>
							</a>
    					</li>
    					<li>
    						<a href="#" data-toggle="tooltip" title="Google+" class="btn btn-google" data-placement="left">
								<i class="fa fa-google-plus"></i>
							</a>
    					</li>
    				    <li>
    						<a href="#" data-toggle="tooltip" title="LinkedIn" class="btn btn-linkedin" data-placement="left">
								<i class="fa fa-linkedin"></i>
							</a>
    					</li>
    					<li>
    						<a href="#" data-toggle="tooltip" title="Pinterest" class="btn btn-pinterest" data-placement="left">
								<i class="fa fa-pinterest"></i>
							</a>
    					</li>
              <li>
    						<a href="#" data-toggle="tooltip" title="Email" class="btn btn-mail" data-placement="left">
								<i class="fa fa-envelope"></i>
							</a>
    					</li>
            </ul>
    			</div>
        </div>
        <!--end social media-->
        <!--Related products-->
        <br>
          <p> <h3 style="text-align:center;">Related products</h3> </p>
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
        <!--End related products-->

        </div>
  </div>
@section('scripts')
<script type="text/javascript" src="{{ asset('js/homepage/new-product-slider.js') }}"></script>
@endsection
@endsection
