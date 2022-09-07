<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use Session;

class ShareFileController extends Controller
{
    public function index()
    {
         $data = array();
         if (Session::has('loginId')) {
            $data = Person::where('id', '=', Session::get('loginId'))->first();
        }
        return view('fileshare.share_file', compact('data'));
    }
}
