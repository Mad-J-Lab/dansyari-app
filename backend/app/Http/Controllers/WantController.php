<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Want;

class WantController extends Controller
{
    public function category(){
        \Log::info('a');
        return  Want::with('category')->get();
    }
}
