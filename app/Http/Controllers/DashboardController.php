<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\pcInfo;

class DashboardController extends Controller
{
    public function countUser()
    {
        $count = User::count();
        $pcCount = pcInfo::count();
        return view('dashboard',compact('count','pcCount'));
    }
}
