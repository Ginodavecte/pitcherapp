@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/payment/order-status.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/payment/shopping-cart.css') }}" type="text/css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('content')

<!-- de navbar moet weg behalve de bovenste -->
<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-doing">ShopCart</li><!--
 --><li class="progtrckr-todo">Billing</li><!--
 --><li class="progtrckr-todo">Payment</li><!--
 --><li class="progtrckr-todo">Place Order</li><!--
 --><li class="progtrckr-todo">Leave Review</li>
</ol>
<br>
<div class="container">
  <h2 style="text-align:left;">Shopping Cart</h2>
</div>
<hr>
  <div class="container-fluid mb-4">
     <div class="row">
         <div class="col-12">
             <div class="table-responsive">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th scope="col"> </th>
                             <th scope="col">Product</th>
                             <th scope="col">Available</th>
                             <th scope="col" class="text-center">Quantity</th>
                             <th scope="col" class="text-right">Price</th>
                             <th> </th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                             <td>Product Name Dada</td>
                             <td>In stock</td>
                             <td><input class="form-control" type="text" value="1" /></td>
                             <td class="text-right">124,90 €</td>
                             <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                         </tr>
                         <tr>
                             <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                             <td>Product Name Toto</td>
                             <td>In stock</td>
                             <td><input class="form-control" type="text" value="1" /></td>
                             <td class="text-right">33,90 €</td>
                             <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                         </tr>
                         <tr>
                             <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                             <td>Product Name Titi</td>
                             <td>In stock</td>
                             <td><input class="form-control" type="text" value="1" /></td>
                             <td class="text-right">70,00 €</td>
                             <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                         </tr>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td>Sub-Total</td>
                             <td class="text-right">255,90 €</td>
                         </tr>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td>Shipping</td>
                             <td class="text-right">6,90 €</td>
                         </tr>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td>Discount</td>
                             <td class="text-right">0,00 €</td>
                         </tr>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td><strong>Total</strong></td>
                             <td class="text-right"><strong>346,90 €</strong></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
         <div class="col mb-2">
             <div class="row">
                 <div class="col-sm-12  col-md-6">
                     <button class="btn btn-block btn-light">Continue Shopping</button>
                 </div>
                 <div class="col-sm-12 col-md-6 text-right">
                     <button class="btn btn-lg btn-block btn-success text-uppercase">Next Step (Billing)</button>
                 </div>
             </div>
         </div>
     </div>
     <br>
     <br>
       <p> <h3 style="text-align:center;">You also might be intrested in</h3> </p>
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
         </div> <!--end of div row product carousel -->
</div> <!--end of div container-fluid cart data -->
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/productpage/related-product-slider.js') }}"></script>
@endsection
