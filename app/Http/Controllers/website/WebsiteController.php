<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
//        return 'ok';
        return view('website.home.index');
    }
    public function product()
    {
        return view('website.product.index');
    }
}
