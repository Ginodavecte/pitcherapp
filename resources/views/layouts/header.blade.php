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
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

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
          <ul class="navbar-nav mr-auto"></ul>
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
  <div class="container-fluid">
    <div class="row justify-content-center">
        <div id="tabs">
          <ul>
            <li class="nav-tab"><a href="#tabs-1">Voetballschoenen</a></li>
            <li class="nav-tab"><a href="#tabs-2">Kleding</a></li>
            <li class="nav-tab"><a href="#tabs-3">Accessoires</a></li>
          </ul>

          <div id="tabs-1">
            <div class="row">
              <nav class="navbar navbar-inverse">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="nav-link home" >Merk</a></li>
                  <li class="list-inline-item"><a href="#" class="nav-link projects">Ondergrond</a></li>
                  <li class="list-inline-item"><a href="#" class="nav-link services">Accessoires</a></li>
                  <li class="list-inline-item"><a href="#" class="nav-link contact">Kids</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div id="tabs-2">
            <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="nav-link home" >Trainingskleding</a></li>
                <li class="list-inline-item"><a href="#" class="nav-link projects">Onderkleding</a></li>
                <li class="list-inline-item"><a href="#" class="nav-link services">Teamkleding</a></li>
                <li class="list-inline-item"><a href="#" class="nav-link contact">Clubs</a></li>
              </ul>
            </nav>
          </div>
          <div id="tabs-3">
            <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
              <ul class="list-inline">
                <li class="list-inline-item dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Ballen <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/product">Ballen</a></li>
                    <li><a href="/product">Ballen</a></li>
                    <li><a href="/product">Ballen</a></li>
                    <li><a href="/product">Ballen</a></li>
                  </ul>
                </li>

                <li class="list-inline-item dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Uitrusting <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/product">Shirts</a></li>
                    <li><a href="/product">Shirts</a></li>
                    <li><a href="/product">Shirts</a></li>
                    <li><a href="/product">Shirts</a></li>
                  </ul>
                </li>
                <li class="list-inline-item dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Bescherming <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/product">Scheenbeschermers</a></li>
                    <li><a href="/product">Scheenbeschermers</a></li>
                    <li><a href="/product">Scheenbeschermers</a></li>
                    <li><a href="/product">Scheenbeschermers</a></li>
                  </ul>
                </li>
                <li class="list-inline-item dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Keepers <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/product">Shirts</a></li>
                    <li><a href="/product">Shorts</a></li>
                    <li><a href="/product">Helm</a></li>
                    <li><a href="/product">Doel</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    </div>

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/categories">Category</a></li>
      <li class="breadcrumb-item active"><a href="/product">Product</a></li>
    </ol>
  </div>
