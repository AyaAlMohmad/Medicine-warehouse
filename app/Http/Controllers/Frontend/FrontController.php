<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Social;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index()  {
    $companies=Company::all();
    $products = Product::orderBy('created_at', 'desc')->get();

    $groupedProducts = $products->groupBy('category_id')->map(function ($products) {
        return $products->first();
    })->take(6);
 

    
    $contact=Contact::where('id',1)->first();
    $socials=Social::all();

// return $companyProducts;
    return view('frontend.index',compact('companies',
  'groupedProducts','contact','socials'));
  }
}
