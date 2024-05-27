<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Favorite;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function edit($id)  {
      
      $sociales = Social::all();
      $id = Auth::id();
      $user = User::find($id);
  
    return view('frontend.profileUserEdite',compact(    
      'sociales',
      'user',
      ));
   }
   public function update(Request $request,$id){
      $user = User::find($id);
      $data=$request->all();
      if(isset( $data['password'])){
      $user->update($data);}
      else{
         $data1=$request->except('password');
         $user->update($data1);
      }
      return redirect()->route('user.show');
   }
   function show()
   {
   
      $sociales = Social::all();
      $id = Auth::id();
      $user = User::find($id);
  
    return (view('frontend.profileUser', compact(
         
         'sociales',
         
         'favorite'
      )));
   }
   function order()
   {
      
      $sociales = Social::all();
      $id = Auth::id();
      $orders = Order::where('user_id', $id)->get();
 
    return (view('frontend.profileorder', compact(
         
         'sociales',
         'orders',
      )));
   }
   function favorite()
   {
      $companies=Company::all();
      $socials = Social::all();
      $id = Auth::id();
      $favorites = Favorite::where('user_id', $id)->get();
      $contact=Contact::where('id',1)->first();
   
  return (view('frontend.cart', compact(
         'companies',
         'socials',
         'contact',
         'favorites'
      )));
   }
}
