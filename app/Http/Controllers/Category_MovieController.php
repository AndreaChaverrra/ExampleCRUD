<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category_movie as category_movie;


class Category_MovieController extends Controller
{
    public function index()
    {
        $category_movies = Category_Movie::all();
        return \View::make('category_movies/list',compact('category_movies'));
    }

   public function create()
   {
       return \View::make('category_movies/new');
   }

   public function store(Request $request)
   {
       $category_movie = new Category_Movie;
       $category_movie->save();
       return redirect('category_movie');
   }

   public function edit($id) {
       $category_movie = Category_Movie::find($id);
       return \View::make('category_movies/update', compact('category_movie'));
   }

   public function update($id, Request $request){
       $category_movie = Category_Movie::find($id);
       $category_movie->save();
       return redirect('category_movie');

   }

   public function show(Request $request) {
       return \View::make('category_movies/list',compact('category_movies'));
   }

   public function destroy($id) {
       $category_movie = Category_Movie::find($id);
       $category_movie->delete();
       return redirect()->back();
    }}
