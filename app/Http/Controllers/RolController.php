<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rol as rol;


class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return \View::make('roles/list',compact('roles'));
    }

   public function create()
   {
       return \View::make('roles/new');
   }

   public function store(Request $request)
   {
       $rol = new Rol;
       $rol->name = $request->name;
       $rol->save();
       return redirect('rol');
   }

   public function edit($id) {
       $rol = Rol::find($id);
       return \View::make('roles/update', compact('rol'));
   }

   public function update($id, Request $request){
       $rol = Rol::find($id);
       $rol->name = $request->name;
       $rol->save();
       return redirect('rol');

   }

   public function show(Request $request) {
       $roles = Rol::where('name','like','%'.$request->name.'%')->get();
       return \View::make('roles/list',compact('roles'));
       $roles = Rol::where('created_at','>',$date)->get();
       $roles = Rol::where('created_at','<',$date)->get();
       $roles = Rol::where('name','=',$name_1)
                        ->orWhere('name','=',$name_2)
                        ->get();
   }

   public function destroy($id) {
       $rol = Rol::find($id);
       $rol->delete();
       return redirect()->back();
    }}
