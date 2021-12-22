<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{

    public function appoinmentList()
    {
        return view('admin.layouts.apponment-list');
    }

    public function appoinmentCreate()
    {
        return view('admin.layouts.appoinment-create');

    }

    public function store(Request $request){
       // dd($request->all());

       Category::create([
            // field name from DB ||  field name from form
            'name'=>$request->name,
            
            'description'=>$request->description,
            
        ]);
        return redirect()->back();
    }



}
