@extends('layouts.app')

@section('content')

<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<div class="container">
  <br/>
  <div class="abc">
       <div class="panel-body"> <h2><b> <center>@lang('messages.contact_us')</center> </b></h2></div>
  </div>
 </div>
 <br/>
 <br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="well well-sm" >
                <form action="{{ route('contact.store') }}"  method="POST" >
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                @lang('messages.name')</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="@lang('messages.enter_name')" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                @lang('messages.email')</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="@lang('messages.enter_email')" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                @lang('messages.subject')</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">@lang('messages.choose_one')</option>
                                <option value="product">@lang('messages.product_review')</option>
                                <option value="services">@lang('messages.general_costumer_services')</option>
                                  <option value="query">@lang('messages.query')</option>
                                <option value="suggestions">@lang('messages.suggestions')</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                @lang('messages.message')</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="@lang('messages.message')"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            @lang('messages.send_message')</button>
                    </div>

                </div>
                </form>
            </div>
        </div>

    </div>

    @endsection
