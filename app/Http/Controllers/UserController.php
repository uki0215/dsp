<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{

    public function showUsers(Request $request)
    {
        $users = DB::table('users')->get();
        $count = DB::table('users')->count();
        return view('users.user-management',['users' => $users])->with('count', $count);
    }

    public function create()
    {
        return view('users.modal.create-user');
    }

    public function store(Request $request)
        {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
          ]);
            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
          ]);

         return redirect('/users')->with('success', 'Created successfully user');   
    }

    public function edit($id)
    {
        $user = User::find($id);
        //dd($user);
        return view('users.modal.edit-user',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
          ]);
          $user = User::find($id);
          $user->update($request->all());
          
          /*$user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
          ]);
          */

          return redirect('/users')->with('success', 'User updated successfully');

    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted successfully');
    }
}