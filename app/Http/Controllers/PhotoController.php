<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request){
    
        $name = $request->file()->getClientOriginalName();
        return $name;
    }

}
