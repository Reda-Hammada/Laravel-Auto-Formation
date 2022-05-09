<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class testController extends Controller
{
    public function  test(){

        $helloWorld = "first controller example";

        return view('pages/helloworld',compact("helloWorld"));
    }
    
    public function showById($id){

        $person = [

            1 => 'reda',
            2 => 'hicham',
        ];

        $personId = $person[$id];


        return view('pages/testController', compact("personId"));


    }



}
