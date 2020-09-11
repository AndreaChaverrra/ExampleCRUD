<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_status as type_status;


class Type_StatusController extends Controller
{
    public function index()
    {
        $type_statuses = Type_Status::all();
        return \View::make('type_statuses/list',compact('type_statuses'));
    }

   public function create()
   {
       return \View::make('type_statuses/new');
   }

   public function store(Request $request)
   {
       $type_status = new Type_Status;
       $type_status->name = $request->name;
       $type_status->save();
       return redirect('type_status');
   }

   public function edit($id) {
       $type_status = Type_Status::find($id);
       return \View::make('type_statuses/update', compact('type_status'));
   }

   public function update($id, Request $request){
       $type_status = Type_Status::find($id);
       $type_status->name = $request->name;
       $type_status->save();
       return redirect('type_status');

   }

   public function show(Request $request) {
       $type_statuses = Type_Status::where('name','like','%'.$request->name.'%')->get();
       return \View::make('type_statuses/list',compact('type_statuses'));
       $type_statuses = Type_Status::where('created_at','>',$date)->get();
       $type_statuses = Type_Status::where('created_at','<',$date)->get();
       $type_statuses = Type_Status::where('name','=',$name_1)
                        ->orWhere('name','=',$name_2)
                        ->get();
   }

   public function destroy($id) {
       $type_status = Type_Status::find($id);
       $type_status->delete();
       return redirect()->back();
    }}
