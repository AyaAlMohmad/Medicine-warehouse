<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Social;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()  {
      $companies=Company::all();
      $items=About::all();
      $socials=Social::all();
      $contact=Contact::where('id',1)->first();
  
        return view('frontend.about',compact('companies'
        ,'items','socials','contact'));
      }
}
