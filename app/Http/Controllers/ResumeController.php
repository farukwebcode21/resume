<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(Request $request){
        return view('pages.resume');

    }
    public function resumeLink(Request $request){
        return DB::table('resumes')->first();
        
    }
    public function experiencesData(Request $request){
        return DB::table('experiences')->get();
        
    }
    public function educationData(Request $request){
        return DB::table('educations')->get();
        
    }
    public function skillsData(Request $request){
        return DB::table('skills')->get();
        
    }
    public function languageData(Request $request){
        return DB::table('languages')->get();
    }
}
