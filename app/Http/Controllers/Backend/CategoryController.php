<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function categoryList()
    {
        return view('admin.layouts.category-list');
    }

    public function categoryCreate()
    {
        return view('admin.layouts.category-create');

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
