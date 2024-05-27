<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
   public function store(Request $request){
      $user_id=Auth::id();
      $product_id=$request->product_id;
   $create=   Favorite::create([
         'amount'=>$request->amount,
          'user_id'=>$user_id,
          'product_id'=>$product_id
      ]);
      if($create){
         session()->flash('success','The order has been sent successfully');
      return back();
      }else{
         return back()->with('error','The order can not send');  
      }
  }
 public function destroy($id){
    $delete=Favorite::where('id',$id)->delete();
    return back();
 }
}
