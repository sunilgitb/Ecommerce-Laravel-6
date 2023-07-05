@extends('frontend.master')

@section('content')


<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_responsive.css') }}">
	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart_container">
						<div class="cart_title">Your Wishlist Product</div>
						<div class="cart_items">
							<ul class="cart_list">

                              @foreach($product as $row)

		<li class="cart_item clearfix">
			<div class="cart_item_image text-center"><br><img src="{{ asset($row->image_one) }} " style="width: 70px; width: 70px;" alt=""></div>
			<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
				<div class="cart_item_name cart_info_col">
					<div class="cart_item_title">Name</div>
					<div class="cart_item_text">{{ $row->product_name  }}</div>
				</div>

				@if($row->product_color == NULL)

                @else
				<div class="cart_item_color cart_info_col">
					<div class="cart_item_title">Color</div>
					<div class="cart_item_text"> {{ $row->product_color }}</div>
				</div>
				 @endif


                @if($row->product_size == NULL)

                @else
                <div class="cart_item_color cart_info_col">
					<div class="cart_item_title">Size</div>
					<div class="cart_item_text"> {{ $row->product_size }}</div>
				</div>
                @endif

                <div class="cart_item_color cart_info_col">
					<div class="cart_item_title">Action</div><br>
                    <div>
                        <button id="{{ $$row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" onclick="productview(this.id)">Add to Cart</button>
                    </div>
				</div>






			</div>
		</li>
								@endforeach
							</ul>
						</div>




					</div>
				</div>
			</div>
		</div>
	</div>

    <script>
        $(document).ready(function(){
          $('.addcart').on('click', function(){
             var id = $(this).data('id');
             // alert(id)
             if (id) {
                 $.ajax({
                     url: " {{ url('/add/to/cart/') }}/"+id,
                     type:"GET",
                     datType:"json",
                     success:function(data){
                  const Toast = Swal.mixin({
                       toast: true,
                       position: 'top-end',
                       showConfirmButton: false,
                       timer: 3000,
                       timerProgressBar: true,
                       onOpen: (toast) => {
                         toast.addEventListener('mouseenter', Swal.stopTimer)
                         toast.addEventListener('mouseleave', Swal.resumeTimer)
                       }
                     })
     
                  if ($.isEmptyObject(data.error)) {
     
                     Toast.fire({
                       icon: 'success',
                       title: data.success
                     })
                  }else{
                      Toast.fire({
                       icon: 'error',
                       title: data.error
                     })
                  }
     
     
                     },
                 });
     
             }else{
                 alert('danger');
             }
          });
     
        });
     
     
     </script>

@endsection
