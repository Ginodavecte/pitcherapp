$(document).ready(function(){
  $("#block").click(function(){
    $("#product_list").hide(1000);
    $("#product_block").show(1000);
  });

  $("#list").click(function(){
    $("#product_list").show(1000);
    $("#product_block").hide(1000);
  });




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
