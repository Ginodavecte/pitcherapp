<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Home')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
  <div id="app">
      <nav class="navbar navbar-expand-md">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Pitcher app') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto"></ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                          <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
<div class="container-fluid" id="tabs">



  <div class="row" >
    <div class="col-md">

    </div>
    <div class="col-md text-center">
      <ul class="list-inline">
        <li class="list-inline-item"><a class="text-xs-center" href="#tabs-1">Schoenen</a></li>
        <li class="list-inline-item"><a class="text-xs-center" href="#tabs-2">Shorts</a></li>
        <li class="list-inline-item"><a class="text-xs-center" href="#tabs-3">Shirts</a></li>
      </ul>
    </div>
    <div class="col-md">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-md"></div>
    <div class="col-md">
      <div id="tabs-1">
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category Nike</a></li> |
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category Adidas</a></li> |
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category Puma</a></li>
        </ul>
      </div>
      <div id="tabs-2">
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category shorts 1</a></li> |
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category shorts 2</a></li> |
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category shorts 3</a></li>
        </ul>
      </div>
      <div id="tabs-3">
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category shirts 1</a></li> |
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category shirts 2</a></li> |
          <li class="list-inline-item"><a class="text-center" href="#">Sub Category shirts 3</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md"></div>

  </div>



</div>
