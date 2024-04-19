<?php

namespace App\Http\Controllers;

use App\Models\PropertyAuth;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('website.property.view',['properties'=>PropertyAuth::all()]);
    }

    public function create()
    {
        return view('website.property.add');
    }

    public function store(Request $request)
    {
        PropertyAuth::newProperty($request);
        return back()->with('message', 'Property  info created successfully.');
    }

    public function edit($id){
        return view('website.property.edit',['property'=>PropertyAuth::find($id)]);
    }

    public function update(Request $request,$id){
        PropertyAuth::updatePropertyAuth($request,$id);
        return redirect('/property-view')->with('message', 'Property info update successfully.');
    }

    public function delete($id)
    {
        PropertyAuth::deletePropertyAuth($id);
        return back()->with('message', 'Property info delete successfully.');
    }

    public function details($id)
    {
        return view('website.property.details', ['property' => PropertyAuth::find($id)]);
    }
}
