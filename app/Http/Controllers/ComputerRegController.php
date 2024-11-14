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
        $hardwareInfo = json_encode(Larinfo::getServerInfoHardware(),true);;
        $hardwareInfo = Larinfo::getServerInfoHardware();
        //dd($hardWareInfo);
        [
            $os = $softwareInfo['os'],
            $model = $hardwareInfo['model'],
            $cpu = $hardwareInfo['cpu'],
            $cpu_count = $hardwareInfo['cpu_count'],
            $disk = ($hardwareInfo['disk']),
            $disk_total = $disk['human_total'],  
            $ram = $hardwareInfo['ram'],
            $ram_total = $ram['human_total'],
        ];
        
        return view('users.modal.com-reg',compact('os','model','cpu','cpu_count','disk','disk_total','ram','ram_total','date')); 
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
