<?php

namespace App\Http\Controllers\Planner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use Session;

class PlannerController extends Controller
{
     public function index()
    {
          $data = array();
         if (Session::has('loginId')) {
            $data = Person::where('id', '=', Session::get('loginId'))->first();
        }
        return view('planner.register-planner', compact('data'));
    }
}

