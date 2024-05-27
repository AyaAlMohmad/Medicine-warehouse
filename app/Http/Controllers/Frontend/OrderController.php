<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Order;
use App\Models\OrderAddition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request){
        $user_id=Auth::id();
        foreach ($request->product_id as $product_id) {
            $id=$product_id;
        Order::create([
            'amount'=>$request->amount,
         
            'user_id'=>$user_id,
            'product_id'=>$id
        ]);
        $favorit=Favorite::where('product_id',$product_id)->first();
        $favorit->delete();
        }
       
        return back();

    }
    public function destroy($id){
        $delete=Order::where('id',$id)->delete();
        return back();
     }
    
}
