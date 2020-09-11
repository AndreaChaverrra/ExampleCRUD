<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status as status;


class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return \View::make('statuses/list',compact('statuses'));
    }

   public function create()
   {
       return \View::make('statuses/new');
   }

   public function store(Request $request)
   {
       $status = new Status;
       $status->name = $request->name;
       $status->save();
       return redirect('status');
   }

   public function edit($id) {
       $status = Status::find($id);
       return \View::make('statuses/update', compact('status'));
   }

   public function update($id, Request $request){
       $status = Status::find($id);
       $status->name = $request->name;
       $status->save();
       return redirect('status');

   }

   public function show(Request $request) {
       $statuses = Status::where('name','like','%'.$request->name.'%')->get();
       return \View::make('statuses/list',compact('statuses'));
       $statuses = Status::where('created_at','>',$date)->get();
       $statuses = Status::where('created_at','<',$date)->get();
       $statuses = Status::where('name','=',$name_1)
                        ->orWhere('name','=',$name_2)
                        ->get();
   }

   public function destroy($id) {
       $status = Status::find($id);
       $status->delete();
       return redirect()->back();
    }}
