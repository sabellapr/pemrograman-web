<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuridController extends Controller
{
    public function index(){
       $dataa = DB::table('murid')->get();
       return view('murid', compact('dataa'));
    }
   
}
