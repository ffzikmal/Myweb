<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Profile;
use App\Education;
use App\Qualification;
use App\Interest;
use App\Activity;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function profile(){
        $pro=Profile::all();
        return view('profile', ['pro'=>$pro]);
    }

    public  function edu(){
        $edu=Education::all();
        return view('edu', ['edu'=>$edu]);
    }

    public function qual(){
        $qual=Qualification::all();
        return view('qual', ['qual'=>$qual]);
    }

    public function activity(){
        $act=Activity::all();
        return view('activity', ['act'=>$act]);
    }

    public function interest(){
        $int=Interest::all();
        return view('interest', ['int'=>$int]);
    }

    public function work(){
        return view('work');
    }

}
