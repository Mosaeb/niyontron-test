<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function repairRequest(){
        return view('website.maintenance.repair-request');
    }
    public function store(Request $request){
        Maintenance::newRepairRequest($request);
        return back()->with('message', 'Service repair request created successfully.');
    }

    public function view()
    {
        return view('website.maintenance.repair-view',['maintenances'=>Maintenance::all()]);
    }

    public  function details($id){
        return view('website.maintenance.details', ['maintenance' => Maintenance::find($id)]);
    }

    public function status(){
        return view('website.maintenance.status');
    }
}
