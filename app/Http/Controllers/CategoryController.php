<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category as category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return \View::make('categories/list',compact('categories'));
    }

    public function create()
   {
       return \View::make('categories/new');
   }

   public function store(Request $request)
   {
       $category = new Category;
       $category->name = $request->name;
       $category->save();
       return redirect('category');
   }

   public function edit($id) {
       $category = Category::find($id);
       return \View::make('categories/update', compact('category'));
   }

   public function update($id, Request $request){
       $category = Category::find($id);
       $category->name = $request->name;
       $category->save();
       return redirect('category');

   }

   public function show(Request $request) {
       $categories = Category::where('name','like','%'.$request->name.'%')->get();
       return \View::make('categories/list',compact('categories'));
       $categories = Category::where('created_at','>',$date)->get();
       $categories = Category::where('created_at','<',$date)->get();
       $categories = Category::where('name','=',$name_1)
                        ->orWhere('name','=',$name_2)
                        ->get();
   }

   public function destroy($id) {
       $category = Category::find($id);
       $category->delete();
       return redirect()->back();
   }
}
