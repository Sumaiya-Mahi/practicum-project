<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function serviceList()
    {
        return view('admin.layouts.service-list');
    }

    public function serviceCreate()
    {
        return view('admin.layouts.service-create');

    }

    public function store(Request $request){
       // dd($request->all());

       service::create([
            // field name from DB ||  field name from form
            'id'=>$request->id,
            'name'=>$request->name,
            'category'=>$request->category,
            'cost'=>$request->cost,
            'price'=>$request->price,
            'picture'=>$request->picture,
            'detail'=>$request->detail,

            
            'detail'=>$request->detail,
            
        ]);
        return redirect()->back();
    }



}
