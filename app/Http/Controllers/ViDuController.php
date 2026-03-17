<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ViDuController extends Controller
{
    function test(){
    $name = "HUB";
    return view('test', ["name1"=>$name]);
 }

    function phimCanada(){
        $phim = DB::table('movie')->where('country_name', 'Canada')->get();
        return view('canada', compact('phim'));
    }
}
