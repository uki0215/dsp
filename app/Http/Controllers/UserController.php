<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Organization;

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
        $orgName = DB::table('organizations')->get();
        $workplaceName = DB::table('workplace')->get();
        $positionName = DB::table('position')->get();
        //dd($positionName);
        return view('users.modal.create-user', compact('orgName','workplaceName','positionName'));
    }

    public function store(Request $request)
        {

        $workplaceName = DB::table('workplace')->get();
        $orgName = DB::table('organizations')->get();
        $positionName = DB::table('position')->get();
            //dd($positionName);
        $request->validate([
            'workplaceName' => 'required|string',
            'orgName' => 'required|string',
            'positionName' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
          ]);
            User::create([
            'workplaceName' => $request->workplaceName,
            'orgName' => $request->orgName, 
            'positionName' => $request->positionName,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
          ]);

         return redirect('/users')->with('success', 'Created successfully user');   
    }

    public function edit($id)
    {
        $user = User::find($id);
        $workplaceName = DB::table('workplace')->get();
        $orgName = DB::table('organizations')->get();
        $positionName = DB::table('position')->get();
        //dd($user);
        return view('users.modal.edit-user',compact('user','positionName','orgName','workplaceName'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'workplaceName' => 'required|string',
            'orgName' => 'required|string',
            'positionName' => 'required|string',
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