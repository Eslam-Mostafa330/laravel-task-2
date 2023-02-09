<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function index()
    {

        $data = categoryModel::all();
        return view('welcome', compact('data'));
        die;
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:categories,name"
        ]);
        categoryModel::create($request->except(["_token"]));
        return redirect('/category');
    }

    public function delete($id)
    {
        $category = categoryModel::find($id);
        $category->delete();
        return redirect('/category');
    }

    public function edit($id)
    {
        $category = categoryModel::find($id);
        return view('edit', compact('category'));
    }

    public function update(Request $request)
    {  
        $category = categoryModel::find($request->id);
        $category->update($request->except("_token"));
        return redirect('/category');
    }
}
