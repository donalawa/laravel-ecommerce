<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function index() {
        // return view('pages.index',compact('title'));
        $products = Product::all();
        return view('pages.index')->with('products',$products);
        // return Product::all();
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = array(
            'title'=>'Services',
            'services'=>['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}
