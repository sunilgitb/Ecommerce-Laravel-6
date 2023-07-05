@extends('frontend.master')

@section('content')

@php
$setting = DB::table('settings')->first();
$charge = $setting->shipping_charge;
$vat = $setting->vat;
@endphp

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <ul class="checkout-progress-bar">
            <li>
                <span>Shipping</span>
            </li>
            <li class="active">
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Summary</h3>

                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">2 products in Cart</a>
                    </h4>

                    <div class="collapse" id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">Baseball Cap</a>
                                            </h2>

                                            <span class="product-qty">Qty: 4</span>
                                        </div>
                                    </td>
                                    <td class="price-col">$17.90</td>
                                </tr>

                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">Dress Shoes</a>
                                            </h2>

                                            <span class="product-qty">Qty: 4</span>
                                        </div>
                                    </td>
                                    <td class="price-col">$7.90</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Ship To:
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>

                    <address>
                        Desmond Mason <br>
                        123 Street Name, City, USA <br>
                        Los Angeles, California 03100 <br>
                        United States <br>
                        (123) 456-7890
                    </address>
                </div><!-- End .checkout-info-box -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Shipping Method:
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>

                    <p>Flat Rate - Fixed</p>
                </div><!-- End .checkout-info-box -->
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-8 order-lg-first">
                <div class="checkout-payment">
                    <h2 class="step-title">Payment Method:</h2>

                    <h4>Check / Money order</h4>

                    <div class="form-group-custom-control">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                            <label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>
                        </div><!-- End .custom-checkbox -->
                    </div><!-- End .form-group -->

                    <div id="checkout-shipping-address">
                        <address>
                            Desmond Mason <br>
                            123 Street Name, City, USA <br>
                            Los Angeles, California 03100 <br>
                            United States <br>
                            (123) 456-7890
                        </address>
                    </div><!-- End #checkout-shipping-address -->
                    <ul class="cart_list">
                              
                        @foreach($cart as $row)

  <li class="cart_item clearfix">
       


      <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">

           <div class="cart_item_name cart_info_col">
              <div class="cart_item_title"><b>Product Image</b></div>
              <div class="cart_item_text"><img src="{{ asset($row->options->image) }} " style="width: 70px; width: 70px;" alt=""></div>
          </div>


          <div class="cart_item_name cart_info_col">
              <div class="cart_item_title"><b>Name</b></div>
              <div class="cart_item_text">{{ $row->name  }}</div>
          </div>

          @if($row->options->color == NULL)

          @else
          <div class="cart_item_color cart_info_col">
              <div class="cart_item_title"><b>Color</b></div>
              <div class="cart_item_text"> {{ $row->options->color }}</div>
          </div>
           @endif


          @if($row->options->size == NULL)

          @else
          <div class="cart_item_color cart_info_col">
              <div class="cart_item_title"><b>Size</b></div>
              <div class="cart_item_text"> {{ $row->options->size }}</div>
          </div>
          @endif
            

          <div class="cart_item_quantity cart_info_col">
              <div class="cart_item_title"><b>Quantity</b></div> 
           <div class="cart_item_text"> {{ $row->qty }}</div>
     
          </div>



          <div class="cart_item_price cart_info_col">
              <div class="cart_item_title"><b>Price</b></div>
              <div class="cart_item_text">${{ $row->price }}</div>
          </div>
          <div class="cart_item_total cart_info_col">
              <div class="cart_item_title"><b>Total</b></div>
              <div class="cart_item_text">${{ $row->price*$row->qty }}</div>
          </div>

           
      </div>
  </li>
                          @endforeach
                      </ul>
                  </div>

  <ul class="list-group col-lg-8" style="float: right;">
      @if(Session::has('coupon'))
      <li class="list-group-item">Subtotal : <span style="float: right;">
      ${{ Session::get('coupon')['balance'] }} </span> </li>
       <li class="list-group-item">Coupon : ({{ Session::get('coupon')['name'] }} )
        <a href="{{ route('coupon.remove') }}" class="btn btn-danger btn-sm">X</a>
     <span style="float: right;">${{ Session::get('coupon')['discount'] }} </span> </li>
      @else
      <li class="list-group-item">Subtotal : <span style="float: right;">
      ${{  Cart::Subtotal() }} </span> </li>
      @endif
      
    

      <li class="list-group-item">Shiping Charge : <span style="float: right;">${{ $charge  }} </span> </li>
      <li class="list-group-item">Vat : <span style="float: right;">${{ $vat }} </span> </li>
      @if(Session::has('coupon'))
      <li class="list-group-item">Total : <span style="float: right;">${{ Session::get('coupon')['balance'] + $charge + $vat }} </span> </li>
      @else
<li class="list-group-item">Total : <span style="float: right;">${{ Cart::Subtotal() + $charge + $vat }} </span> </li>
      @endif
     
    </ul> 
                    <div id="new-checkout-address" class="show">
                        <form action="{{ route('oncash.charge') }}" method="post" id="payment-form">
                            @csrf
                            <div class="form-group required-field">
                                <label>First Name </label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Full Name " name="name" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Phone Number </label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Phone " name="phone" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label>Email </label>
                                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Email " name="email" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Address </label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Address" name="address" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>City  </label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your City" name="city" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label>State/Province</label>
                                <div class="select-custom">
                                    <select name="ship_state" id="state" class="form-control">
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Zip/Postal Code </label>
                                <input type="text" name="ship_zipcode" class="form-control" required>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label>Country</label>
                                <div class="select-custom">
                                    <select class="form-control" name="ship_country">
                                        <option value="USA">India</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="China">China</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->
                            </div><!-- End .form-group -->

                            <div class="form-group-custom-control">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="address-save">
                                    <label class="custom-control-label" for="address-save">Save in Address book</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->
                            <input type="hidden" name="shipping" value="{{ $charge }} ">
                <input type="hidden" name="vat" value="{{ $vat }} ">
                <input type="hidden" name="total" value="{{ Cart::Subtotal() + $charge + $vat }} ">

                <input type="hidden" name="ship_name" value="{{ $data['name'] }} ">
                <input type="hidden" name="ship_phone" value="{{ $data['phone'] }} ">
                <input type="hidden" name="ship_email" value="{{ $data['email'] }} ">
                <input type="hidden" name="ship_address" value="{{ $data['address'] }} ">
                <input type="hidden" name="ship_city" value="{{ $data['city'] }} ">
                <input type="hidden" name="ship_state" value="{{ $data['state'] }} ">
                <input type="hidden" name="ship_zipcode" value="{{ $data['zipcode'] }} ">
                <input type="hidden" name="ship_country" value="{{ $data['country'] }} ">
                <input type="hidden" name="payment_type" value="{{ $data['payment'] }} ">

                        
                    </div><!-- End #new-checkout-address -->
                    <div class="contact_form_title text-center"> Payment By </div>
    <div class="form-group">
        <ul class="logos_list">
            <li><input type="radio" name="payment" value="oncash">Cash on Delivery </li>
            <li><input type="radio" name="payment" value="stripe"> Razorpay</li>

             <li><input type="radio" name="payment" value="paypal">Paytm</li>



        </ul>

    </div>
                    <div class="clearfix">
                         <button class="btn btn-info float-right">Pay Now</button>
                    </div><!-- End .clearfix -->
                </div><!-- End .checkout-payment -->
            </form>
                <div class="checkout-discount">
                    <h4>
                        <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                    </h4>

                    <div class="collapse" id="checkout-discount-section">
                        <form action="#">
                                <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                        </form>
                    </div><!-- End .collapse -->
                </div><!-- End .checkout-discount -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->
@endsection
