<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	
    public function index()
    {
        return view('index');
    }
    
    
    public function tour()
    {
    	return view('tour');
    }
    
    
    public function about()
    {
    	return view('about');
    }
    
    
    public function buyPrice()
    {
    	return view('buyPrice');
    }
    
    //admin article
    public function work()
    {
    	return view('work');
    }
    
    //people share
    public function share()
    {
    	return view('share');
    }
    
}
