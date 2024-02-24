<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categorys =Category::get();
        return view('index',['categorys'=>$categorys]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){


        $validated = $request->validate([
            'categoryname' => 'required',
        ]);
        $category = new Category;
        $category->categoryname = $validated['categoryname'];
        $category->save();
        return redirect('index');
    }

    public function delete($id){
        db::table('categories')->delete($id);
        return redirect('index');
    }

    public function edit($id){
        $data = Category ::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'categoryname' => 'required',
        ]);
        $data = Category::find($id);
        $data->categoryname=$validatedData['categoryname'];

        $data->save();
        return redirect('index');


    }

}
