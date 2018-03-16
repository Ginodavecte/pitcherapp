@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/productpage/magnifier.css') }}" type="text/css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/productpage/demo.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/productpage/gallery.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/productpage/description.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/productpage/productinfo.css') }}" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
@endsection

@section('content')

<div class="container-fluid">
     <!-- Breadcrumb : to show to the user where they are -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Category</a></li>
      <li class="breadcrumb-item active">Single Product</li>
    </ol>

    <div class="container">

      <p><h2 style="text-align:left;">Product Name (Nike airmax)</h2></p>
      
      <div class="row">

      <div class="gallery col-md-6">
       <div class="slider">
        <ul id="gallery"></ul>
    </div>
    <div class="magnifier-preview" id="gallery-preview">
        <div class="heading">Birds of America</div>
        <div class="title" id="gallery-preview-title">&nbsp;</div>
        <div class="author">by John James Audubon</div>
    </div>
    <div class="btn-wrapper">
        <button class="prev" id="gallery-prev">&lt;</button>
        <button class="next" id="gallery-next">&gt;</button>
    </div>
   </div>  <!--end of div gallery -->
   <div class="col-md-6">


       <div class="product-title">Corsair GS600 600 Watt PSU</div>
       <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
       <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
       <hr>
       <div class="product-price">$ 1234.00</div>
       <div class="product-stock">In Stock</div>
       <hr>
       <div class="product-size">
         <select>
           <option selected disabled>Select size</option>
           <option value="s">S</option>
           <option value="m">M</option>
           <option value="l">L</option>
           <option value="xl">XL</option>
         </select>
       </div><br>
       <div>
         <select>
           <option selected disabled>Select color</option>
           <option value="red">Red</option>
           <option value="blue">Blue</option>
           <option value="yellow">Yellow</option>
           <option value="Orange">Orange</option>
         </select>
       </div>
       <hr>
       <div class="btn-group cart">
         <button type="button" class="btn btn-success">
           Add to cart
         </button>
       </div>
       <div class="btn-group wishlist">
         <button type="button" class="btn btn-danger">
           Add to wishlist
         </button>
       </div>

   </div>
 </div> <!--end of div row -->
 <div>
   <p> <h3 style="text-align : center;">Product Description</h3> </p>

<div class="tab">
 <button class="tablinks" onclick="openTab(event, 'Description')" id="defaultOpen">Description</button>
 <button class="tablinks" onclick="openTab(event, 'Specs')">Specs</button>
 <button class="tablinks" onclick="openTab(event, 'Reviews')">Reviews</button>
</div>

<div id="Description" class="tabcontent">
 <h3>Description</h3>
 <p>This is the part where the product will be discribed with a beutifull story</p>
</div>

<div id="Specs" class="tabcontent">
 <h3>Specs</h3>
 <p>Here is where you find a overview of the product like this.</p>
 <ul>
   <li> Real nikies </li>
   <li> Good quality</li>
   <li> Better then the rest</li>
   <li> Can be worn in the rain</li>
   <li> No where else this price</li>
 </ul>
</div>

<div id="Reviews" class="tabcontent">
 <h3>Reviews</h3>
 <p>Reviews is the capital of Japan.</p>
</div>
</div> <!--end of div description -->
</div> <!--end of div container -->
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
    </div> <!--end of div row product carousel -->

</div> <!--end of div container fluid -->

@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/productpage/Event.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/productpage/Magnifier.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/productpage/gallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/productpage/description.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/productpage/related-product-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/productpage/productinfo.js') }}"></script>
<script type="text/javascript">
var evt = new Event(),
    m = new Magnifier(evt, {
        largeWrapper: document.getElementById('gallery-preview')
    }),
    imageData = [
        {
            title: 'Downy Woodpecker',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/112_Downy_Woodpecker.jpg/250px-112_Downy_Woodpecker.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/112_Downy_Woodpecker.jpg/1000px-112_Downy_Woodpecker.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:112_Downy_Woodpecker.jpg'
        },
        {
            title: 'Hooded Warbler',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/110_Hooded_Warbler.jpg/250px-110_Hooded_Warbler.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/110_Hooded_Warbler.jpg/1000px-110_Hooded_Warbler.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:110_Hooded_Warbler.jpg'
        },
        {
            title: 'Pileated Woodpecker',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/111_Pileated_Woodpecker.jpg/250px-111_Pileated_Woodpecker.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/111_Pileated_Woodpecker.jpg/1000px-111_Pileated_Woodpecker.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:111_Pileated_Woodpecker.jpg'
        },
        {
            title: 'Bluebird',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/5/51/113_Blue-bird.jpg/250px-113_Blue-bird.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/5/51/113_Blue-bird.jpg/1000px-113_Blue-bird.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:113_Blue-bird.jpg'
        },
        {
            title: 'Wood Pewee',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/115_Wood_Pewee.jpg/250px-115_Wood_Pewee.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/115_Wood_Pewee.jpg/1000px-115_Wood_Pewee.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:115_Wood_Pewee.jpg'
        },
        {
            title: 'Blue Grosbeak',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/1/11/122_Blue_Grosbeak.jpg/250px-122_Blue_Grosbeak.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/1/11/122_Blue_Grosbeak.jpg/1000px-122_Blue_Grosbeak.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:122_Blue_Grosbeak.jpg'
        },
        {
            title: 'Cat Bird',
            thumb: 'http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/128_Cat_Bird.jpg/250px-128_Cat_Bird.jpg',
            large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/128_Cat_Bird.jpg/1000px-128_Cat_Bird.jpg',
            url: 'http://commons.wikimedia.org/wiki/File:128_Cat_Bird.jpg'
        }
    ],
    gallery = new Gallery(evt, m, {
        gallery: document.getElementById('gallery'),
        images: imageData,
        prev: document.getElementById('gallery-prev'),
        next: document.getElementById('gallery-next'),
        previewText: document.getElementById('gallery-preview-title')
    });
    m.attach({
        thumb: '#thumb',
        zoomable: false
    });
    m.attach({
        thumb: '#thumb-inside',
        large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Starry_Night_Over_the_Rhone.jpg/1200px-Starry_Night_Over_the_Rhone.jpg',
        zoom: 3
    });
    m.attach({
        thumb: '#thumb1',
        large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Starry_Night_Over_the_Rhone.jpg/1200px-Starry_Night_Over_the_Rhone.jpg',
        largeWrapper: 'preview1',
        zoom: 3,
        zoomable: false
    });
    m.attach({
        thumb: '#thumb2',
        large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Starry_Night_Over_the_Rhone.jpg/1600px-Starry_Night_Over_the_Rhone.jpg',
        largeWrapper: 'preview2',
        zoom: 2,
        zoomable: true,
        onthumbenter: function (data) {
            document.getElementById('enter').innerHTML = 'Mouse enter';
            document.getElementById('leave').innerHTML = '';
            document.getElementById('zoom').innerHTML = '';
        },
        onthumbmove: function (data) {
            document.getElementById('move').innerHTML = 'Mouse move';
        },
        onthumbleave: function (data) {
            document.getElementById('enter').innerHTML = '';
            document.getElementById('move').innerHTML = '';
            document.getElementById('zoom').innerHTML = '';
            document.getElementById('leave').innerHTML = 'Mouse leave';
        },
        onzoom: function (data) {
            document.getElementById('zoom').innerHTML = 'Zoom: ' + data.zoom;
        }
    });
    //star rating


</script>
@endsection
