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
        $platform = Agent::platform();
        $larinfo = Larinfo::getServerInfo();
        $softwareInfo = Larinfo::getServerInfoSoftware();
        $hardWareInfo = json_encode(Larinfo::getServerInfoHardware(),true);;
        //dd($hardWareInfo);
        /*
        [
            //$os = $softwareInfo['os'],
            $model = $hardWareInfo['model'],
            $cpu = $hardWareInfo['cpu'],
            $cpu_count = $hardWareInfo['cpu_count'],
            $disk = ($hardWareInfo['disk']),
            $disk_total = $disk['human_total'],  
            $ram = $hardWareInfo['ram'],
            $ram_total = $ram['human_total'],
        ];
        
        */
        return view('users.modal.com-reg',compact('softwareInfo','hardWareInfo','larinfo','date')); 
    }

    public function showPrinters(){
        
        return view('printers');
    }
    public function createPrinter(){

        //echo $_SERVER['HTTP_USER_AGENT'] . "\n\n<br>";
        $date = now("Asia/Ulaanbaatar")->format('Y-m-d H:i:s');
        return view('users.modal.printer-reg',compact('date'));
    }
}
