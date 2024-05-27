<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()  {
        $companies=Company::all();
        $items=Service::all();
        $socials=Social::all();
        $contact=Contact::where('id',1)->first();
    
          return view('frontend.service',compact('companies'
          ,'items','socials','contact'));
        }
        public function show($id)  {
            $companies=Company::all();
            $item=Service::where('id',$id)->first();
            $socials=Social::all();
            $contact=Contact::where('id',1)->first();
        
              return view('frontend.serviceItem',compact('companies'
              ,'item','socials','contact'));
            }
}
