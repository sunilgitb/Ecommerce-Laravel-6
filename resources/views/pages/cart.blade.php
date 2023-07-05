@extends('frontend.master')

@section('content')
@php

$setting = DB::table('settings')->first();
$charge = $setting->shipping_charge;
$vat = $setting->vat;
@endphp
<style>
    .item {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.btn-pay {
  background-color: #C800Da;
  border: 0;
  color: #fff;
  font-weight: 600;
}

.fa-ticket {
  color: #0e1fa1;
}
</style>
{{-- <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-7">
        <div class="border border-gainsboro p-3">

          <h2 class="h6 text-uppercase mb-0">Cart Total (2 Items): <strong class="cart-total">98.60</strong></h2>
        </div>
        @foreach($cart as $row)
        <div class="border border-gainsboro p-3 mt-3 clearfix item">
          <div class="text-lg-left">
            <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
          </div>
          <div class="col-lg-5 col-5 text-lg-left">
            <h3 class="h6 mb-0">  <img src="{{ asset($row->options->image) }}" height="40px" width="40px"><br>
              <small>{{ $row->name  }}</small>
            </h3>
          </div>
          <div class="product-price d-none">{{ $row->name  }}</div>
          <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
            <form method="post" action="{{ route('update.cartitem') }}">
              @csrf
            <label for="pass-quantity" class="pass-quantity">Quantity</label>
            <input type="hidden" name="productid" value="{{ $row->rowId }}">
            <input class="form-control" type="number" value="1" min="1" name="qty" value="{{ $row->qty }}">

          </div>
          <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
            <span class="product-line-price">{{ $row->price*$row->qty }}
            </span>
          </div>
        </form>
          <div class="remove-item pt-4">
            <button class="remove-product btn-light">
              Delete
            </button>
          </div>
        </div>
        @endforeach

      </div>

      <div class="col-xl-3 col-lg-4 col-md-5 totals">
        <div class="border border-gainsboro px-3">
          <div class="border-bottom border-gainsboro">
            <p class="text-uppercase mb-0 py-3"><strong>Order Summary</strong></p>
          </div>
          <div class="totals-item d-flex align-items-center justify-content-between mt-3">
            <p class="text-uppercase">Subtotal</p>
            <p class="totals-value" id="cart-subtotal">95</p>
          </div>
          <div class="totals-item d-flex align-items-center justify-content-between">
            <p class="text-uppercase">Estimated Tax</p>
            <p class="totals-value" id="cart-tax">3.60</p>
          </div>
          <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-top border-gainsboro">
            <p class="text-uppercase"><strong>Total</strong></p>
            <p class="totals-value font-weight-bold cart-total"> <td  @if(Session::has('coupon'))
                                     <span style="float: right;">
                                    {{ Session::get('coupon')['balance'] }} </span>
                                     Coupon : ({{ Session::get('coupon')['name'] }} )
                                    <a href="{{ route('coupon.remove') }}" class="btn btn-danger btn-sm">X</a>
                                 <span style="float: right;">{{ Session::get('coupon')['discount'] }} </span>
                                    @else
                                     <span style="float: right;">
                                        &#8377;{{  Cart::Subtotal() }} </span>
                                    @endif</td></p>
          </div>
        </div>
        <a href="#" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-0">Pay Now <span class="totals-value cart-total">98.60</span></a>
      </div>

    </div>
  </div>--}}
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-7">
        <div class="border border-gainsboro p-3">

          <h2 class="h6 text-uppercase mb-0">Cart Total (2 Items): <strong class="cart-total">98.60</strong></h2>
        </div>

        <div class="border border-gainsboro p-3 mt-3 clearfix item">
          <div class="text-lg-left">
            <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
          </div>
          @foreach($cart as $row)
          <div class="col-lg-5 col-5 text-lg-left">
            <h3 class="h6 mb-0"> <img src="{{ asset($row->options->image) }}" height="40px" width="40px"></small>
            </h3>
          </div>
          <div class="product-price d-none">{{ $row->price * 2 }}</div>
          <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
            <label for="pass-quantity" class="pass-quantity">Quantity</label>
            <input class="form-control" type="number" value="1" min="1" max="100" name="qty">
          </div>
          <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
            <span class="product-line-price">{{ $row->price*$row->qty }}
            </span>
          </div>
         
          <div class="remove-item pt-4">
            <button class="remove-product btn-light">
              Delete
            </button>
          </div>
          @endforeach
        </div>

        

      </div>

      <div class="col-xl-3 col-lg-4 col-md-5 totals">
        <div class="border border-gainsboro px-3">
          <div class="border-bottom border-gainsboro">
            <p class="text-uppercase mb-0 py-3"><strong>Order Summary</strong></p>
          </div>
          <div class="totals-item d-flex align-items-center justify-content-between mt-3">
            <p class="text-uppercase">Subtotal</p>
            <p class="totals-value" id="cart-subtotal">95</p>
          </div>
          <div class="totals-item d-flex align-items-center justify-content-between">
            <p class="text-uppercase">Estimated Tax</p>
            <p class="totals-value" id="cart-tax">3.60</p>
          </div>
          <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-top border-gainsboro">
            <p class="text-uppercase"><strong>Total</strong></p>
            <p class="totals-value font-weight-bold cart-total">98.60</p>
          </div>
        </div>
        <a href="#" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-0">Pay Now <span class="totals-value cart-total">98.60</span></a>
      </div>
    </div>
  </div><!-- container -->
@endsection
