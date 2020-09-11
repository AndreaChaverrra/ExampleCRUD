<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_rental as movie_rental;


class Movie_RentalController extends Controller
{
    public function index()
    {
        $movie_rentals = Movie_Rental::all();
        return \View::make('movie_rentals/list',compact('movie_rentals'));
    }

   public function create()
   {
       return \View::make('movie_rentals/new');
   }

   public function store(Request $request)
   {
       $movie_rental = new Movie_Rental;
       $movie_rental->price = $request->price;
       $movie_rental->observations = $request->observations;
       $movie_rental->save();
       return redirect('movie_rental');
   }

   public function edit($id) {
       $movie_rental = Movie_Rental::find($id);
       return \View::make('movie_rentals/update', compact('movie_rental'));
   }

   public function update($id, Request $request){
       $movie_rental = Movie_Rental::find($id);
       $movie_rental->price = $request->price;
       $movie_rental->observations = $request->observations;
       $movie_rental->save();
       return redirect('movie_rental');

   }

   public function show(Request $request) {
       $movie_rentals = Movie_Rental::where('price','like','%'.$request->price.'%')->get();
       return \View::make('movie_rentals/list',compact('movie_rentals'));
       $movie_rentals = Movie_Rental::where('created_at','>',$date)->get();
       $movie_rentals = Movie_Rental::where('created_at','<',$date)->get();
       $movie_rentals = Movie_Rental::where('price','=',$price_1)
                        ->orWhere('price','=',$price_2)
                        ->get();
   }

   public function destroy($id) {
       $movie_rental = Movie_Rental::find($id);
       $movie_rental->delete();
       return redirect()->back();
    }}
