<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cooker_Meal;
use App\Models\KitchenType;
use App\Models\Order;
use App\Models\Cobon;
// use App\Models\User;
use Illuminate\Http\Request;
use Hash;
// use Auth;

class AdminController extends Controller
{
    //-----------get dashboard Page--------------------------------------
    public function getDashboard()
    {

        $users = User::where('UserType','User')->count();
        $cookers = User::where('UserType','Cooker')->count();
        $meals = Cooker_Meal::count();
        $kitchenTypes = KitchenType::count();
        $orders = Order::count();
        $cobons = Cobon::count();

        return view('index', compact(['users', 'cookers', 'meals', 'kitchenTypes', 'orders', 'cobons']));
    }

    //---------------Admin Add ,show AllAdmin ,  Login ,Logout -----------------------------------------

    public function getlogin()
    {
        return view('login');
    }
    public function postlogin(Request $request){
        // if(Auth::attempt(['Email'=>$request['email'],'Password'=>$request['password']])){

            //     return view('index');

            // }
            // return redirect()->back();
            $email = $request->input('email');
            $password = $request->input('password');

            $admin = User::where('Email', $email)->where('UserType','Admin')->first();
            if($admin){

                $check=Hash::check($request['password'], $admin->Password);

                if($check){
                    Auth::login($admin,$request->has('remember'));
                    // dd(Auth::user()->UserName);

                return redirect('index');
            }else{
                return redirect()->back();

            }
        }else{
            return redirect()->back();
        }

    }


    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }

    public function getcookerrequest()
    {
        $cookers = User::where('UserType','Cooker')->where('IsConfirmed',0)->get();
        return view('cookersrequests', compact('cookers'));

    }
    public function acceptcooker($id)
    {
        // dd($id);
        $cooker = User::where('id',$id)->first();
        // dd($cooker);
        $cooker->IsConfirmed = 1;
        $cooker->save();
        // return redirect()->back();
        return redirect()->back();

    }
    public function deletecooker($id)
    {

        $cooker = User::where('id',$id)->first();
        $cooker->delete();

        return redirect()->back();

    }
    public function addcooker(Request $request){
        // dd($request);
        $password = Hash::make($request->Password);
        $user= new User();
        $user->Name = $request->Name;
        $user->Kitchen_Name = $request->Kitchen_Name;
        $user->Nationality = $request->Nationality;
        $user->Phone = $request->Phone;
        $user->Password = $password;
        $user->UserType = "Cooker";
        $user->IsConfirmed =1;
        $user->save();

        return redirect()->back();


    }


    public function getcookers()
    {
        $cookers = User::where('UserType','Cooker')->where('IsConfirmed',1)->orderBy('created_at','desc')->get();
        return view('cookers', compact('cookers'));

    }

    public function getorders()
    {
        $orders = Order::with(['User','Cooker'])->orderBy('created_at','desc')->get();
//        dd($orders);
        return view('orders', compact('orders'));
    }

    public function getusers()
    {
        $users = User::where('UserType','User')->orderBy('created_at','desc')->get();
        return view('users', compact('users'));
    }

    public function getkitchentypes()
    {
        $kitchenTypes = KitchenType::all();
        return view('kitchentypes',compact('kitchenTypes'));
    }

    public function getSubService()
    {
        $services=Service::with('subservice')->get();
        $subServices = SubService::all();
        return view('admin.pages.subServices.index',compact(['subServices','services']));

    }
    public function getAddSubService(){
        $services=Service::with('subservice')->get();
        $subService=SubService::all();

        return view('admin.pages.subServices.index',compact(['subServices','services']));
    }
    public function addSubService(Request $request ){
        $service_id = $request->service_id;
        $subService=$request->name;
        Service::find($service_id)->subservice()->create(['name'=>$subService]);
        return redirect()->back();

    }

    //--------------------show all Orders------------------------------------
    public function getOrder()
    {
        $orders = Order::all();
        return view('admin.pages.orders.index', compact('orders'));
    }
}
