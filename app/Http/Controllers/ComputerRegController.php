<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Jenssegers\Agent\Facades\Agent;
use Response;
use Larinfo;
use DateTime;

class ComputerRegController extends Controller
{
    public function showComs(){
        return view('computers');
    }
    public function createCom()
    {
        $date = now("Asia/Ulaanbaatar")->format('Y-m-d H:i:s');
        //$platform = Agent::platform();
        //$larinfo = Larinfo::getServerInfo();
        $softwareInfo = Larinfo::getServerInfoSoftware();
        //$hardwareInfo = json_encode(Larinfo::getServerInfoHardware(),true);
        //$hardwareInfo = Larinfo::getServerInfoHardware();
        //dd($hardwareInfo);
        [
            //$os = $softwareInfo['os'],
            //$model = $hardwareInfo['model'],
            //$cpu = $hardwareInfo['cpu'],
            //$cpu_count = $hardwareInfo['cpu_count'],
            //$disk = $hardwareInfo['disk'],
            //$disk_total = $disk['human_total'],  
            //$ram = $hardwareInfo['ram'],
            //$ram_total = $ram['human_total'],
        ];

        $orgName = DB::table('organizations')->get();
        $workplaceName = DB::table('workplace')->get();
        $positionName = DB::table('position')->get();
        $brandName = DB::table('brand')->get();
        $device_type = DB::table('device_type')->get();
        $sub_device = DB::table('sub_device')->get();
        $device_mark = DB::table('device_marks')->get();

        return view('users.modal.com-reg',compact('orgName','workplaceName','positionName','brandName','device_type','date','sub_device','device_mark'));

    }

    public function showPrinters(){
        
        return view('printers');
    }
    public function createPrinter(){

        
        $date = now("Asia/Ulaanbaatar")->format('Y-m-d H:i:s');

        return view('users.modal.printer-reg',compact('date'));
    }
}
