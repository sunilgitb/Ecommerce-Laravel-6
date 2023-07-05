@extends('frontend.master')

@section('content')

@php
 $site = DB::table('sitesetting')->first();

@endphp

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div><!-- End .container -->
        
    </nav><div class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="container">
        <div id="map"></div><!-- End #map -->

        <div class="row">
            <div class="col-md-8">
                <h2 class="light-title">Write <strong>Us</strong></h2>

                <form  action="{{ route('contact.form') }}" id="contact_form" method="post">
                    @csrf
                    <div class="form-group required-field">
                        <label for="contact-name">Name</label>
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required." name="name">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required." name="email">
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label for="contact-phone">Phone Number</label>
                        <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number" name="phone">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-message">What’s on your mind?</label>
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                    </div><!-- End .form-group -->

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .col-md-8 -->

            <div class="col-md-4">
                <h2 class="light-title">Contact <strong>Details</strong></h2>

                <div class="contact-info">
                    <div>
                        <i class="icon-phone"></i>
                        <p><a href="tel:">0201 203 2032</a></p>
                        <p><a href="tel:">0201 203 2032</a></p>
                    </div>
                    <div>
                        <i class="icon-mobile"></i>
                        <p><a href="tel:">201-123-3922</a></p>
                        <p><a href="tel:">302-123-3928</a></p>
                    </div>
                    <div>
                        <i class="icon-mail-alt"></i>
                        <p><a href="mailto:#">porto@gmail.com</a></p>
                        <p><a href="mailto:#">porto@portotemplate.com</a></p>
                    </div>
                    <div>
                        <i class="icon-skype"></i>
                        <p>porto_skype</p>
                        <p>porto_template</p>
                    </div>
                </div><!-- End .contact-info -->
            </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-8"></div><!-- margin -->
</main><!-- End .main -->
@endsection
