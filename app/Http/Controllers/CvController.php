<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function show(){
        $user = User::first();
        return response()->view('cv.template' , compact('user'));
    }
}
