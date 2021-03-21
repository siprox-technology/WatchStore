<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Request $request)
    {
        //validate user inputs
        $this->validate($request,[
            'star_number'=>'required|integer|between:1,5',
            'review_text'=>'required|max:495',
            'product_id'=>'required'
        ]);

        //check user has not submitted review for this product before
        if(Review::where('user_id',auth()->user()->id)->where('product_id',$request->product_id)->count())
        {
            return back()->withErrors(['submit_error'=>'You already submitted review for this item']);
        }
        
        Review::create(
            [
                'star_number' => $request->star_number,
                'text' => $request->review_text,
                'product_id'=>$request->product_id,
                'user_id'=>auth()->user()->id
            ]
        );

        return back();
    }
    
}
