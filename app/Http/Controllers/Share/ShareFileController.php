<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\Person;
use App\Models\Upload;
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

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'descriptions'=>'required'
        ]);

        $prefix = "FNO-";
        $code = $prefix.rand(0,1000);
        $upload = new Upload();
        $upload->file_number = $code;
        $upload->first_name = $request->firstname;
        $upload->last_name = $request->lastname;
        $upload->nida = $request->nida;
        $upload->email = $request->email;
        $upload->phone = $request->phone;
        $upload->description = $request->descriptions;
        $upload->file = $request->file;
        $file=$request->file;
        $request->file->move('/files',$file);
        $result = $upload->save();

        if ($result) {
            return back()->with('success', 'File uploaded successfully');
        } else {
            return back()->with('fail', ' Something is Wrong');
        }
    }
}
