<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Rating;
use \Illuminate\Facades\Support\Auth;

class RatingController extends Controller
{
    public function addrating(Request $request)
    {
        $stars_rated = $request->input('product_rating');
        $product_id = $request->input('product_id');

        $product_check = Product::where('id', $product_id)->where('status', '0')->first();
        if($product_check)
        {
            $verified_purchase = Order::where('orders.user_id', Auth::id())
                                ->join('orders_details', 'orders.id', 'orders_details.order_id')
                                ->where('orders_details.product_id', $product_id)->get();

            if($verified_purchase->count() > 0)
            {
               $existing_rating = Rating::where('user_id', Auth::id())->where('product_id', $product_id)->first();
               if($existing_rating)
               {
                 $existing_rating->stars_rated = $stars_rated;
                 $existing_rating->updated();
               }
               else
               {
                Rating :: create ([
                    'user_id' => Auth::id();
                    'product_id' => $product_id;
                    'stars_rated' => '';
                ]);
               }
               return redirect()->back()-with('status', "Thank you for rating this product");
            }
            else
            {
                return redirect()->back()->with('status', "You cannot rate a product without purchase");
            }
        }
        else
            {
                return redirect()->back()->with('status', "The link you followed was broken");
            }
    }
}
