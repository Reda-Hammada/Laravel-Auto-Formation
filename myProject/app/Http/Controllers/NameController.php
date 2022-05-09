<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\name;

class NameController extends Controller
{
    public function index(){

        $person = name::all();

        return view('pages.person',compact("person"));
    }
}
