<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Social;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index($id)
  {
    $products = [];
    $companies = Company::all();
    $categories = Category::where('company_id', $id)->get();

    $allProducts = collect();

    foreach ($categories as $category) {
      $products = Product::where('category_id', $category->id)->get();
      $allProducts = $allProducts->merge($products);
    }
    $contact = Contact::where('id', 1)->first();
    $socials = Social::all();
    return view('frontend.product', compact(
      'allProducts',
      'companies',
      'contact',
      'socials',
      'categories'
    ));
  }
  public function categoryproduct(Request $request ,$id)
  {
    $companies = Company::all();
    $products = Product::where('category_id', $id)->get();
    $contact = Contact::where('id', 1)->first();
    $socials = Social::all();
    $categories = Category::where('company_id', $request->company_id)->get();

    return view('frontend.categoryproduct', compact(
      'products',
      'companies',
      'contact',
      'socials',
      'categories'
    ));
  }


  public function show($id)
  {
    $companies = Company::all();
    $product = Product::where('id', $id)->first();
    $contact = Contact::where('id', 1)->first();
    $socials = Social::all();
    return view('frontend.productItem', compact(
      'product',
      'companies',
      'contact',
      'socials'
    ));
  }
}
