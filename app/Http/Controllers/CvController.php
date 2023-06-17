<?php

namespace App\Http\Controllers;

use App\Models\ProSkill;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function show(){
        $user = User::first();
        $skills = Skill::all();
        $proSkills = ProSkill::all();
        return response()->view('cv.template' , compact('user' , 'skills' , 'proSkills'));
    }

}
