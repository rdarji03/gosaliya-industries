<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function viewHome(){
        return view("home");
    }
    public function viewAbout(){
        return view("about.about");
    }
    public function viewProduct(){
        return view("product.product");
    }
    public function viewProcess(){
        return view("process.process");
    }
    public function viewContact(){
        return view("contact.contact");
    }
}
