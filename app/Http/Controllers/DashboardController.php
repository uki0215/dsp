<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DashboardController extends Controller
{
    public function countUser()
    {
        $count = DB::table('users')->count();
        return view('dashboard')->with('count', $count);
    }
}
