<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user as User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return \View::make('users/list',compact('users'));
    }

   public function create()
   {
       return \View::make('users/new');
   }

   public function store(Request $request)
   {
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();
       return redirect('user');
   }

   public function edit($id) {
       $user = User::find($id);
       return \View::make('users/update', compact('user'));
   }

   public function update($id, Request $request){
       $user = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();
       return redirect('user');

   }

   public function show(Request $request) {
       $users = User::where('name','like','%'.$request->name.'%')->get();
       return \View::make('users/list',compact('users'));
       $users = User::where('created_at','>',$date)->get();
       $users = User::where('created_at','<',$date)->get();
       $users = User::where('name','=',$name_1)
                        ->orWhere('name','=',$name_2)
                        ->get();
   }

   public function destroy($id) {
       $user = User::find($id);
       $user->delete();
       return redirect()->back();
    }}
