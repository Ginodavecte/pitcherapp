@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/payment/order-status.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/payment/shopping-cart.css') }}" type="text/css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('content')


<div class="container wrapper">
    <div class="row cart-head">
      <div class="container">
        <ol class="progtrckr" data-progtrckr-steps="5">
            <li class="progtrckr-doing">ShopCart</li><!--
         --><li class="progtrckr-doing">Billing</li><!--
         --><li class="progtrckr-todo">Payment</li><!--
         --><li class="progtrckr-todo">Place Order</li><!--
         --><li class="progtrckr-todo">Leave Review</li>
        </ol>
        <br>
      </div>
    </div>

    <div class="row cart-body">
      <form class="w-100 p-3" method="post" action="">
        <div class="row d-flex align-items-start">
          <div class="col-md-6">
            <!--SHIPPING METHOD-->
            <div class="card" style="border-color: #999;">
              <div class="card-header" style="color: #eee; background-image: linear-gradient(to bottom, #555 0px, #888 100%);">Address</div>
              <!-- <div class="card-header bg-secondary">Address</div> -->
              <div class="card-body">
                <div class="form-group">
                  <div class="form-group">
                    <h4>Shipping Address</h4>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>Country:</strong></div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="country" value="" />
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <strong>First Name:</strong>
                    <input type="text" name="first_name" class="form-control" value="" />
                  </div>

                  <div class="col">
                    <strong>Last Name:</strong>
                    <input type="text" name="last_name" class="form-control" value="" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>Address:</strong></div>
                  <div class="form-group">
                    <input type="text" name="address" class="form-control" value="" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>City:</strong></div>
                  <div class="form-group">
                    <input type="text" name="city" class="form-control" value="" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>State:</strong></div>
                  <div class="form-group">
                    <input type="text" name="state" class="form-control" value="" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>Zip / Postal Code:</strong></div>
                  <div class="form-group">
                    <input type="text" name="zip_code" class="form-control" value="" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>Phone Number:</strong></div>
                  <div class="form-group"><input type="text" name="phone_number" class="form-control" value="" /></div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>Email Address:</strong></div>
                  <div class="form-group"><input type="text" name="email_address" class="form-control" value="" /></div>
                </div>
                <div class="form-group">
                  <div class="form-group"><strong>Shipping Method:</strong></div>
                  <div class="form-group">
                    <div class="radio">
                      <label><input type="radio" name="optradio">PTT</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="optradio">PostNL</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="optradio">DHL</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--SHIPPING METHOD END-->
            <!--CREDIT CART PAYMENT-->
            <div class="card mt-5" style="border-color: #999;">
              <div class="card-header" style="color: #eee; background-image: linear-gradient(to bottom, #555 0px, #888 100%);"><span><i class="fas fa-lock"></i></span>Secure Payment</div>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#creditcard">Credit Card</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#paypal">Paypal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#ideal">IDEAL</a>
                </li>
              </ul>

              <div class="tab-content">
                <div id="creditcard" class="container tab-pane active">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-group">
                        <span>Pay secure using your credit card.</span>
                      </div>
                      <div class="form-group">

                        <img class="img-responsive" src="http://i76.imgup.net/accepted_c22e0.png">

                        <!-- <ul class="cards">
                                            <li class="visa hand">Visa</li>
                                            <li class="mastercard hand">MasterCard</li>
                                            <li class="amex hand">Amex</li> -->
                        <!-- <li><i class="fa fa-cc-visa"></i></li>
                                            <li><i class="fa fa-cc-mastercard"></i></li>
                                            <li><i class="fa fa-cc-amex"></i></li> -->
                        <!-- </ul> -->

                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group"><strong>Card Type:</strong></div>
                      <div class="form-group">
                        <select id="CreditCardType" name="CreditCardType" class="form-control">
                                            <option value="5">Visa</option>
                                            <option value="6">MasterCard</option>
                                            <option value="7">American Express</option>
                                            <option value="8">Discover</option>
                                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group"><strong>Credit Card Number:</strong></div>
                      <div class="form-group"><input type="text" class="form-control" name="car_number" value="" /></div>
                    </div>
                    <div class="form-group">
                      <div class="form-group"><strong>Card CVV:</strong></div>
                      <div class="form-group"><input type="text" class="form-control" name="car_code" value="" /></div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <strong>Expiration Date</strong>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <select class="form-control" name="">
                                            <option value="">Month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                    </select>
                        </div>
                        <div class="col">
                          <select class="form-control" name="">
                                            <option value="">Year</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                    </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="paypal" class="container tab-pane fade">
                  <h3>Menu 1</h3>
                  <p>Some content in menu 1.</p>
                </div>
                <div id="ideal" class="container tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Some content in menu 2.</p>
                </div>
              </div>
            </div>
            <!--CREDIT CART PAYMENT END-->
          </div>
          <div class="col-md-6">
            <!--REVIEW ORDER-->
            <div class="card" style="border-color: #999;">
              <div class="card-header" style="color: #eee; background-image: linear-gradient(to bottom, #555 0px, #888 100%);">
                Review Order
                <div class="float-right"><small><a class="afix-1" href="#" style="color: #eee";>Edit Cart</a></small></div>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="col">
                    <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
                  </div>
                  <div class="col">
                    <div class="col">Product name</div>
                    <div class="col"><small>Quantity:<span>1</span></small></div>
                  </div>
                  <div class="col text-right">
                    <h6><span>$</span>25.00</h6>
                  </div>
                </div>
                <div class="form-group">
                  <hr />
                </div>
                <div class="form-group row">
                  <div class="col">
                    <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
                  </div>
                  <div class="col">
                    <div class="col">Product name</div>
                    <div class="col"><small>Quantity:<span>1</span></small></div>
                  </div>
                  <div class="col text-right">
                    <h6><span>$</span>25.00</h6>
                  </div>
                </div>
                <div class="form-group">
                  <hr />
                </div>
                <div class="form-group row">
                  <div class="col">
                    <img class="img-fluid" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />
                  </div>
                  <div class="col">
                    <div class="col">Product name</div>
                    <div class="col"><small>Quantity:<span>2</span></small></div>
                  </div>
                  <div class="col text-right">
                    <h6><span>$</span>50.00</h6>
                  </div>
                </div>
                <div class="form-group">
                  <hr />
                </div>
                <div class="form-group">
                  <div class="col">
                    <strong>Subtotal</strong>
                    <div class="float-right"><span>$</span><span>200.00</span></div>
                  </div>
                  <div class="col">
                    <small>Shipping</small>
                    <div class="float-right"><span>-</span></div>
                  </div>
                </div>
                <div class="form-group">
                  <hr />
                </div>
                <div class="form-group">
                  <div class="col">
                    <strong>Order Total</strong>
                    <div class="float-right"><span>$</span><span>150.00</span></div>
                  </div>

                </div>
              </div>
            </div>
            <!--REVIEW ORDER END-->
            <!--COMMENT-->
            <div class="card mt-5" style="border-color: #999;">
              <div class="card-header" style="color: #eee; background-image: linear-gradient(to bottom, #555 0px, #888 100%);">Comment</div>
              <div class="form-group">
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                      <textarea name="message" id="message" class="form-control" rows="9" cols="25" placeholder="@lang('messages.message')"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--COMMENT END-->
          </div>
        </div>
      </form>
      <div class="col mb-2">
          <div class="row">
              <div class="col-sm-12  col-md-6">
                  <button class="btn btn-block btn-light">Continue Shopping</button>
              </div>
              <div class="col-sm-12 col-md-6 text-right">
                  <button class="btn btn-lg btn-block btn-success text-uppercase">Next Step (PAYMENT)</button>
              </div>
          </div>
      </div>
    </div>
  </div>



  @endsection
