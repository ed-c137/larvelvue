<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('role:user');
    }

    public function index(Request $request){
        //dd($request);
        return Inertia::render('Dashboard');
        // if(Auth::user()->hasRole('user')){ //dont worry about the linting showing an error;
            
        // }elseif(Auth::user()->hasRole('administrator')){
           
        // }

    }
}
