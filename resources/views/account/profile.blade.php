@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/account/bootstrap_account.css') }}" type="text/css" rel="stylesheet">
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
              <li class="px-2"><a href="/orders"><i class="far fa-list-alt"></i> Orders</a></li>
              <li class="px-2"><a href="#"><i class="fa fa-gift"></i> Wishlist</a></li>
              <li class="active px-2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li class="px-2"><a href="#"><i class="fa fa-shopping-cart"></i> Shopcart</a></li>
          </ul>
      </nav>

  </div>

  <div class="container" style="background:#dee2e6">

    <div class="d-flex flex-column">
      <div class="d-flex flex-row">
      <div class="col p-3">
        <div class="card h-100" style="border-color: #394263;">
          <div class="white-panel">
            <div class="white-header">
              <h5>USER DATA</h5>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Name:</td>
                  <td>Mark</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>Thornton@example.com</td>
                </tr>
                <tr>
                  <td>Client nr:</td>
                  <td>129458</td>
                </tr>
                <tr>
                  <td>Birthdate:</td>
                  <td>01 November 1990</td>
                </tr>
                <tr>
                  <td>Delivery address:</td>
                  <td>Example street 01</td>
                </tr>
              </tbody>
            </table>
            <div class="p-3 float-right">
              <button type="submit" class="btn btn-outline-primary">@lang('messages.change')
              </button>
            </div>
          </div>
        </div>
      </div>


      <div class="col p-3">
        <div class="card h-100" style="border-color: #394263;">
          <div class="white-panel">
            <div class="white-header">
              <h5>BANKACCOUNT DATA</h5>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Name:</td>
                  <td>Mark</td>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>Example street 01</td>
                </tr>
                <tr>
                  <td>Postcode:</td>
                  <td>1294 HG</td>
                </tr>
                <tr>
                  <td>Residence:</td>
                  <td>Groningen</td>
                </tr>
                <tr>
                  <td>Country:</td>
                  <td>Netherlands</td>
                </tr>
                <tr>
                  <td>Telephone nr:</td>
                  <td>555-5555</td>
                </tr>
              </tbody>
            </table>
            <div class="p-3 float-right">
              <button type="submit" class="btn btn-outline-primary">@lang('messages.change')
              </button>
            </div>
          </div>
        </div>
      </div>


      <div class="col p-3">
        <div class="card h-100" style="border-color: #394263;">
          <div class="white-panel">
            <div class="white-header">
              <h5>USER PHOTO</h5>
            </div>
            <p><img src="{{ URL::to('/') }}/img/profilepage/original.png.jpeg" class="rounded-circle" width="250"></p>
            <div class="p-3 float-right">
              <button type="submit" class="btn btn-outline-primary">@lang('messages.change')
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex flex-row-reverse">
  <div class="p-2">
    <button type="submit" class="btn btn-info">@lang('messages.deleteacc')
    </button>
  </div>
  </div>
    </div>
  </div>
</div>

@endsection
