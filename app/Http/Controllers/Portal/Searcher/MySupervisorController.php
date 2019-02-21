<?php

namespace App\Http\Controllers\Portal\Searcher;

 use App\Countrie;
 use App\Http\Controllers\Controller;
 use App\Nationalitie;
 use App\Registration;

 class MySupervisorController extends Controller
{
    //


    // search profile with limit info for supervisor
    public function getSupervisorProfile($id) {
        $supervisor = Registration::where('ID',$id)->get()->first();
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();
        return view('portal.searcher.supervisor.mySupervisor',compact('supervisor' , 'nationalities' , 'countries'));
    }



}
