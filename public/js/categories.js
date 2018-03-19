$(document).ready(function(){
  $("#block").click(function(){
    $("#product_list").hide(1000);
    $("#product_block").show(1000);
  });

  $("#list").click(function(){
    $("#product_list").show(1000);
    $("#product_block").hide(1000);
  });
<<<<<<< 5bfe158a3ec017f6786688a0b9f659de8ca9c1e3




/* Product filter */
  $(".button").click(function(){
    var value = $(this).attr("data-filter");
    if(value == "all"){
      $(".filter").show();
    }else{
      $(".filter").not("."+value).hide();
      $(".filter").filter("."+value).show();
    }

  });
=======
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );

  $( function() {
    $( "#tabs" ).tabs({
      event: "mouseover"
    });
  } );
/* Product filter */
  $(".button").click(function(){
    var value = $(this).attr("data-filter");
    if(value == "all"){
      $(".filter").show(1000);
    }else{
      $(".filter").not("."+value).hide(1000);
      $(".filter").filter("."+value).show(1000);
    }

<<<<<<< 4b9bbc21432b64bbbe43f3a329cd4c4ed9a12f6f
>>>>>>> Category page
=======
  });
>>>>>>> added product filtering to the category page
});
