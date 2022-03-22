<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cruds;
use Session;

class CrudeController extends Controller
{
    public function showData()
    {
        $showData = cruds::all();
        return view('show_data', compact('showData'));
    }
    public function addData()
    {
        return view('add_data');
    }
    public function storeData(Request $request)
    {
        $rules = [
            'name' => 'required|max:20',
            'email' => 'required|email'
        ];
        $cm = [
            'name.required' => 'Enter Your Name',
            'name.max' => 'Your name must be less 20 characters',
            'email.required' => 'Enter Your Email',
            'email.email' => 'Your email must be a valid email'
        ];
        $this->validate($request, $rules, $cm);
        $crud = new cruds();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg', 'Data Successfully Added');

        return redirect()->back();
    }
}
