@extends('frontend.master')

@section('content')



        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading">
                            <h2 class="title">Login</h2>
                            <p>If you have an account with us, please log in.</p>
                        </div><!-- End .heading -->

                        <form action="{{ route('login') }}" id="contact_form" method="post">
                            @csrf
                           <label>Username or email address *</label>
                           <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                          <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="myInput">
                            <input type="checkbox" onclick="myFunction()"> Show Password
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                                <a href="{{ route('password.request') }}" class="forget-pass"> Forgot your password?</a>
                            </div><!-- End .form-footer -->
                        </form>
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="heading">
                            <h2 class="title">Create An Account</h2>
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        </div><!-- End .heading -->

                        <form action="{{ route('register') }}" id="contact_form" method="post">
                            @csrf
                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Full Name " name="name" required="">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  aria-describedby="emailHelp" placeholder="Enter Your Phone " required="">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp" placeholder="Enter Your Email " required="">
                            <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Password " name="password" required="">
                            <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Re-Type Password " name="password_confirmation" required="">

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newsletter-signup">
                                <label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>
                            </div><!-- End .custom-checkbox -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div><!-- End .form-footer -->
                        </form>
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->




@endsection
