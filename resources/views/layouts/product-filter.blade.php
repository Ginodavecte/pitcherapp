<div id="accordion">

  <div class="card  mb-2">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#cateories-menu">
        Categories
      </a>
    </div>
    <div id="cateories-menu" class="collapse show">
      <ul class="list-group">
        @foreach($categories as $category)
        <li class="list-group-item button" data-filter="{{ $category->name }}">{{ $category->name }}</li>
        @endforeach
      </ul>

    </div>
  </div>

  <div class="card  mb-2">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#brands-menu">
        Brands
      </a>
    </div>
    <div id="brands-menu" class="collapse">
      <ul class="list-group">
        @foreach($brands as $brand)
        <li class="list-group-item button" data-filter="{{$brand->name}}">{{$brand->name}}</li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="card  mb-2">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#color-menu">
        Color
      </a>
    </div>
    <div id="color-menu" class="collapse">
        <ul class="list-group">
          @foreach($colors as $color)
            <li class="list-group-item button" data-filter="{{$color->name}}">{{$color->name}}</li>
          @endforeach
        </ul>

    </div>
  </div>

  <div class="card mb-2">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#size-menu">
        Size
      </a>
    </div>
    <div id="size-menu" class="collapse">
      <ul class="list-group">
        @foreach($sizes as $size)
          <li class="list-group-item button" data-filter="{{$size->name}}">{{$size->name}}</li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="card  mb-2">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#price-menu">
        Price
      </a>
    </div>
    <div id="price-menu" class="collapse">
      <div class="card-body">
        <p><input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></p>
        <div id="slider-range"></div>
      </div>
    </div>
  </div>

  <div class="card  mb-2">
    <div class="row">
      <ul>
          <li class="list-group-item button" data-filter="all"> <a href="#">reset</a></li>
        </ul>
    </div>

  </div>

</div>
