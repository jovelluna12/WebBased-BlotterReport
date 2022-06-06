<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\report;

class WebBlotterControl extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    
}
