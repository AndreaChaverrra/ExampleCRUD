<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rental as rental;


class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return \View::make('rentals/list',compact('rentals'));
    }

   public function create()
   {
       return \View::make('rentals/new');
   }

   public function store(Request $request)
   {
       $rental = new Rental;
       $rental->start_date = $request->start_date;
       $rental->end_date = $request->end_date;
       $rental->total = $request->total;
       $rental->save();
       return redirect('rental');
   }

   public function edit($id) {
       $rental = Rental::find($id);
       return \View::make('rentals/update', compact('rental'));
   }

   public function update($id, Request $request){
       $rental = Rental::find($id);
       $rental->start_date = $request->start_date;
       $rental->end_date = $request->end_date;
       $rental->total = $request->total;
       $rental->save();
       return redirect('rental');

   }

   public function show(Request $request) {
       $rentals = Rental::where('name','like','%'.$request->name.'%')->get();
       return \View::make('rentals/list',compact('rentals'));
       $rentals = Rental::where('created_at','>',$date)->get();
       $rentals = Rental::where('created_at','<',$date)->get();
       $rentals = Rental::where('name','=',$name_1)
                        ->orWhere('name','=',$name_2)
                        ->get();
   }

   public function destroy($id) {
       $rental = Rental::find($id);
       $rental->delete();
       return redirect()->back();
    }}
