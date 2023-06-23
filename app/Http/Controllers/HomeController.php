<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page(Request $request){
        return view('pages.home');

    }
    public function heroData(Request $request){
        return DB::table('heroproperties')->first();
        
    }
    public function aboutData(Request $request){
        return DB::table('abouts')->first();
        
    }
    public function socialData(Request $request){
        return DB::table('socials')->first();
        
    }
}
