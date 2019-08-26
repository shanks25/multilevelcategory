<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;
use App\Continent;

class User_Controller extends Controller
{
    public function index(){
        // $countries = Country::orderBy('name', 'asc')->get();
        $continents = Continent::orderBy('name', 'asc')->get();

        return view('home', ['continents'=> $continents]);
    }
    public function states(Request $request){
        $states = State::where('country_id',$request->id)->get();
        return $states;
    }
    public function cities(Request $request){
        $states = City::where('state_id',$request->id)->get();
        return $states;
    }
    public function countries(Request $request){
        $countries = Country::where('continent_code', $request->id)->get();
        return $countries;
    }
    
   public function submit(Request $request)
   {

     return $request->all();   

   }

    
}