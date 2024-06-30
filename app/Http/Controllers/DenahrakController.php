<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DenahrakController extends Controller
{
    public function index()
    {
        return view('denahrak');
    }

    // public function getData(Request $request)
    // {
    //     $id = $request->id;

    //     if($id = )
    // }
}