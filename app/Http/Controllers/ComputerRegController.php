<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\pcInfo;
use Jenssegers\Agent\Facades\Agent;
// use Response;
// use Larinfo;
use DateTime;

class ComputerRegController extends Controller
{
    public function showComs()
    {

        $pcinfoJson = pcinfo::all();

        return view('computers',compact('pcinfoJson'));
    }
    public function create()
    {

        $date = now();
        $orgName = DB::table('organizations')->get();
        $workplaceName = DB::table('workplace')->get();
        $positionName = DB::table('position')->get();
        $brandName = DB::table('brand')->get();
        $device_type = DB::table('device_type')->get();
        $sub_device = DB::table('sub_device')->get();
        $device_mark = DB::table('device_marks')->get();

        return view('users.modal.com-reg',compact('orgName','workplaceName','positionName','brandName','device_type','date','sub_device','device_mark'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'orgName' => 'required|string',
            'positionName' => 'required|string',
            'workplaceName' => 'required|string',
            'ubtzNum' => 'required|string|unique:pc_device_info',
            'regNum' => 'required|string|unique:pc_device_info',
            'serviceTag' => 'required|string|unique:pc_device_info',
            'brand' => 'required|string',
            'mark' => 'required|string',
            'subDevice' => 'required|string',
            'deviceType' => 'required|string',
            'ownerName' => 'required|string',
            'osType' => 'required|string',
            'cpu' => 'required|string',
            'ram' => 'required|string',
            'hard' => 'required|string',
            'price' => 'required|string',
            'buyedDate' => 'required|string',

          ]);

        $pcInfo = new pcInfo();

        $pcInfo->fill([
            'orgName' => $request->get('orgName'),
            'positionName' => $request->get('positionName'),
            'workplaceName' => $request->get('workplaceName'),
            'ubtzNum' => $request->get('ubtzNum'),
            'regNum' => $request->get('regNum'),
            'serviceTag' => $request->get('serviceTag'),
            'brand' => $request->get('brand'),
            'mark' => $request->get('mark'),
            'subDevice' => $request->get('subDevice'),
            'deviceType' => $request->get('deviceType'),
            'ownerName' => $request->get('ownerName'),
            'osType' => $request->get('osType'),
            'cpu' => $request->get('cpu'),
            'ram' => $request->get('ram'),
            'hard' => $request->get('hard'),
            'price' => $request->get('price'),
            'buyedDate' => $request->get('buyedDate'),
            'comment' => $request->get('comment'),
        ]);

        $pcInfo->save();

        return redirect('/computers')->with('success', 'Created successfully computers info');   
    }

    public function edit($id)
    {

        $date = now("Asia/Ulaanbaatar")->format('Y-m-d');
        $devicePcInfo = pcinfo::find($id);
        $workplaceName = DB::table('workplace')->get();
        $orgName = DB::table('organizations')->get();
        $positionName = DB::table('position')->get();
        $brandName = DB::table('brand')->get();
        $device_type = DB::table('device_type')->get();
        $sub_device = DB::table('sub_device')->get();
        $device_mark = DB::table('device_marks')->get();

        return view('users.modal.com-update',compact('devicePcInfo','workplaceName','orgName','positionName','brandName','device_type','sub_device','device_mark','date'));
    }


    public function update(Request $request, $id)
    {

        $pcinfo = pcinfo::find($id);
        $pcinfo->update($request->all());

        return redirect('/computers')->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        $pcinfo = pcinfo::find($id);
        $pcinfo->delete();

        return redirect('/computers')->with('success', 'User deleted successfully');
    }






    public function showPrinters()
    {
        
        return view('printers');
    }
    public function createPrinter()
    {

        $date = now("Asia/Ulaanbaatar")->format('Y-m-d H:i:s');
        return view('users.modal.printer-reg',compact('date'));
    }
}
