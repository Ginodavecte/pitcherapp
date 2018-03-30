@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/account/bootstrap_account.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/account/deliverystatus.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')

<div class="d-flex flex-row">

  <div class="wrapper">

    <nav id="sidebar" class="h-100 d-inline-block">
      <!-- Sidebar Header -->
      <div class="sidebar-header">
        <h3>Shortcuts</h3>
      </div>


          <!-- Sidebar Links -->
          <ul class="list-unstyled components">
              <li class="active px-2"><a href="#"><i class="far fa-list-alt"></i> Orders</a></li>
              <li class="px-2"><a href="#"><i class="fa fa-gift"></i> Wishlist</a></li>
              <li class="px-2"><a href="/profile"><i class="fa fa-user"></i> Profile</a></li>
              <li class="px-2"><a href="#"><i class="fa fa-shopping-cart"></i> Shopcart</a></li>
          </ul>
      </nav>

  </div>

  <div class="container" style="background-color: #dee2e6;">

    <div class="order-status">

    <div class="order-status-timeline">
        <!-- class names: c0 c1 c2 c3 c4 and c5 -->
        <div class="order-status-timeline-completion c4"></div>
    </div>

    <div class="image-order-status image-order-status-new active rounded-circle">
        <span class="status">Payment await</span>
        <div><img class="icon" src="{{ URL::to('/') }}/img/orderspage/if_Money_131956.png"></div>
    </div>
    <div class="image-order-status image-order-status-active active rounded-circle">
        <span class="status">Shipment await</span>
        <div><img class="icon" src="{{ URL::to('/') }}/img/orderspage/if_steamer_45253.png"></div>
    </div>
    <div class="image-order-status image-order-status-intransit active rounded-circle">
        <span class="status">Shipped</span>
        <div><img class="icon" src="{{ URL::to('/') }}/img/orderspage/shipped.png"></div>
    </div>
    <div class="image-order-status image-order-status-delivered active rounded-circle">
        <span class="status">Received</span>
        <div><img class="icon" src="{{ URL::to('/') }}/img/orderspage/delivered.png"></div>
    </div>
    <div class="image-order-status image-order-status-reviewed active rounded-circle">
        <span class="status">Reviewed</span>
        <div><img class="icon" src="{{ URL::to('/') }}/img/orderspage/if_analysis_60159.png"></div>
    </div>
    <div class="image-order-status image-order-status-completed active rounded-circle">
        <span class="status">Returned</span>
        <div><img class="icon" src="{{ URL::to('/') }}/img/orderspage/if_f-left_256_282467.png"></div>
    </div>

</div>

      <div class="mt-5">
        <p><h3><u>Active Orders</u></h3></p>
      </div>
      <div class="container-fluid">
        <!-- Order start-->
        <div class="row">
          <div class="col row rounded border border-secondary mx-1 my-1 p-2 bg-white">
              <div class="col">
                <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
              </div>
              <div class="col">
                <div class="col">@lang('messages.product_name')</div>
                <div class="col"><small>@lang('messages.quantity')<span>1</span></small></div>
              </div>
              <div class="col text-right">
                <h6><span>$</span>25.00</h6>
              </div>
          </div>
          <div class="col-md-auto my-1">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.reorder')
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
                <div class="col">@lang('messages.product_name')</div>
                <div class="col"><small>@lang('messages.quantity')<span>2</span></small></div>
              </div>
              <div class="col text-right">
                <h6><span>$</span>50.00</h6>
              </div>
          </div>
          <div class="col-md-auto my-1">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.reorder')
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
                <div class="col">@lang('messages.product_name')</div>
                <div class="col"><small>@lang('messages.quantity')<span>4</span></small></div>
              </div>
              <div class="col text-right">
                <h6><span>$</span>75.00</h6>
              </div>
          </div>
          <div class="col-md-auto my-1">
            <button type="submit" class="btn btn-outline-primary">@lang('messages.reorder')
            </button>
          </div>
        </div>
        <!-- Order end-->
        </div>

    </div>
  </div>

</div>

@endsection
