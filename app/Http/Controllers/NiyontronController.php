<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class NiyontronController extends Controller
{
private $customer,$profiles;
    public function index()
    {
        return view('website.home.index');
    }

    public function login()
    {
        return view('website.user.login');
    }
    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email',$request->user_name)->orWhere('mobile', $request->user_name)->first();
        if ($this->customer){
            if (password_verify($request->password,$this->customer->password)){
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->fname.' '.$this->customer->lname);
                return redirect('/property-add');

            }
        }
        else{
            return back()->with('message', 'Your password is invalid.');
        }
    }
    public function dashboard()
    {
        $this->profile =Customer::where('id',Session::get('customer_id'))->get();
        return view('website.user.dashboard',['users' =>  $this->profile]);
    }

    public function services(){
        return view('website.services.index');
    }

    public function serviceProviders(){
        return view('website.services.service-providers');
    }

    public function propertyList(){
        return view('website.property.list');
    }

    public  function contact(){
        return view('website.contact.index');
    }

    public function rentManagement(){
        return view('website.rent.management');
    }
}
