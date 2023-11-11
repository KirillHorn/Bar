<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    } 
    public function product() {
        return view('product');
    }
    public function catalog() {
        return view('catalog');
    }
    public function basket() {
        return view('basket');
    }
}
