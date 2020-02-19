<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests\AddProRequest;
use App\Education;
use App\Http\Requests\FormEduRequest;
use App\Qualification;
use App\Http\Requests\FormQualRequest;
use App\Interest;
use App\Http\Requests\FormIntRequest;
use App\Activity;
use App\Http\Requests\FormActRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function adminpro(){
        $profiles= Profile::all();
        return view('adminpro' ,compact('profiles'));
    }
    public function addpro(){
        return view('addprofile');
    }
    public function proadd(AddProRequest $request){
        Profile::create([
            'info'=>$request->info,
        ]);
        return redirect(route('adminpro'));
    }
    public function editpro(Profile $profile){
        return view('addprofile')->withProfile($profile);
    }
    public function proedit(AddProRequest $request, Profile $profile){
        $profile->update([
            'info'=>$request->info,
        ]);
        return redirect(route('adminpro'));
    }
    public function prodelete(Profile $profile){
        $profile->delete();
        return redirect(route('adminpro'));
    }





    public function adminedu(){
        $educate= Education::all();
        return view('adminedu', compact('educate'));
    }
    public function formedu(){
        return view('formedu');
    }
    public function eduadd(FormEduRequest $request){
        Education::create([
            'info'=>$request->info,
        ]);
        return redirect(route('adminedu'));
    }
    public  function editedu(Education $education){
        return view('formedu')->withEducation($education);
    }
    public  function eduedit(FormEduRequest $request, Education $education){
        $education->update([
            'info'=>$request->info,
        ]);
        return redirect(route('adminedu'));
    }
    public function edudelete(Education $education){
        $education->delete();
        return redirect(route('adminedu'));
    }




    public  function  adminqual(){
        $qualifications= Qualification::all();
        return view('adminqual', compact('qualifications'));
    }
    public  function formqual(){
        return view('formqual');
    }
    public  function qualadd(FormQualRequest $request){
        Qualification::create([
            'info'=>$request->info,
        ]);
        return redirect(route('adminqual'));
    }
    public function qualedit(Qualification $qualification){
        return view('formqual')->withQualification($qualification);
    }
    public  function editqual(FormQualRequest $request, Qualification $qualification){
        $qualification->update([
            'info'=>$request->info,
        ]);
        return redirect(route('adminqual'));
    }
    public  function deletequal(Qualification $qualification){
        $qualification->delete();
        return redirect(route('adminqual'));
    }



    public  function  adminint(){
        $interests= Interest::all();
        return view('adminint', compact('interests'));
    }
    public  function formint(){
        return view('formint');
    }
    public  function intadd(FormIntRequest $request){
        Interest::create([
            'info'=>$request->info,
        ]);
        return redirect(route('adminint'));
    }
    public function intedit(Interest $interest){
        return view('formint')->withInterest($interest);
    }
    public  function editint(FormIntRequest $request, Interest $interest){
        $interest->update([
            'info'=>$request->info,
        ]);
        return redirect(route('adminint'));
    }
    public  function deleteint(Interest $interest){
        $interest->delete();
        return redirect(route('adminint'));
    }



    public  function  adminact(){
        $activities= Activity::all();
        return view('adminact', compact('activities'));
    }
    public  function formact(){
        return view('formact');
    }
    public  function actadd(FormActRequest $request){
        Activity::create([
            'info'=>$request->info,
        ]);
        return redirect(route('adminact'));
    }
    public function actedit(Activity $activity){
        return view('formact')->withActivity($activity);
    }
    public  function editact(FormActRequest $request, Activity $activity){
        $activity->update([
            'info'=>$request->info,
        ]);
        return redirect(route('adminact'));
    }
    public  function deleteact(Activity $activity){
        $activity->delete();
        return redirect(route('adminact'));
    }
}
