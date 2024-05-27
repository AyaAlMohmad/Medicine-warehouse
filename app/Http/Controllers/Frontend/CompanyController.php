<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()  {
    $companies=Company::all();
        return view('layouts.frontend.includes.header',compact('companies'));
      }
}
