@edxtends('app')
<style>
    /* rating */
.rating-css div {
    color: #ffe400;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 60px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }
  .checked {
      color:#ccbb20
  }

/* End of Star Rating */
</style>
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ url('/rating-add') }}" method="POST">
      <div class="modal-content">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $product->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @php $ratenum = number_formate$rating_value @endphp
        <div class="rating">
            @for ($i = 0; $i <= $ratenum; $i++)
            <i class="fa fa-star checked"></i>
            @endfor

            @for ($j = $ratenum+1; $j <= 5; $j++)
            <i class="fa fa-star "></i>
            @endfor

            @if($ratings->count() > 0)
                {{ $ratings->count() }} Ratings
            @else
            No Ratings
            @endif
            <span>{{ $ratings->count() }}</span>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    @if ($user_rating)
                    @for ($i = 0; $i <= $user_rating->stars_rated; $i++)
                    <input type="radio" value="{{ $i }}" name="product_rating" checked id="rating{{ $i }}">
                    <label for="rating{{ $i }}" class="fa fa-star"></label>
            <i class="fa fa-star checked"></i>
            @endfor

            @for ($j = $$user_rating->stars_rated+1; $j <= 5; $j++)
            <input type="radio" value="{{ $j }}" name="product_rating" checked id="rating{{ $j }}">
            <label for="rating{{ $j }}" class="fa fa-star"></label>
            @endfor


                    @else
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                    @endif
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Rate this product</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection
