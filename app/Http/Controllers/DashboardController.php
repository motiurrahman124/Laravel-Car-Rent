<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Car;
use App\Models\CarBook;

class DashboardController extends Controller
{
    public function createRegistration(Request $request)
    {
        
       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['type']=0;
       $data['password']=Hash::make($request->password);

       User::create($data);
       return redirect()->route('login');
    }

    public function createLogin(Request $request)
    {
       // dd($request->all());

       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
       {
        
        if(Auth::user()->type==0)
        {
            return redirect()->route('home'); 
        }
        else if(Auth::user()->type==1){
            return redirect()->route('adminPanel');
        }
        else{
            return redirect()->route('login');
        }
       }
       
    }
    public function addCar()
    {
        return view('back.car_add');
    }

    public function createCar(Request $request)
    {
        //dd($request->all());

        if(!file_exists(public_path('images')))
        {
            mkdir(public_path('images'),0777,true);
        }

        $image=$request->image;
        $name=$image->getClientOriginalName();
        $imagename=time()."_".$name;
        $destination=public_path('images');
        $image->move($destination,$imagename);
        
        $data['image']='images/'.$imagename;
        $data['car_name']=$request->car_name;
       $data['brand']=$request->brand;
       $data['fuel_type']=$request->fuel_type;
       $data['model']=$request->model;
       $data['price']=$request->price;
       $data['overview']=$request->overview;

       Car::create($data);

       return redirect()->route('car_list');

    }

    public function car_list()
    {
        
        $car=Car::all();


        return view('back.car_list',['car'=>$car]);

    }
    public function car_book_list()
    {
        
        $car=CarBook::all();


        return view('back.car_book_list',['car'=>$car]);

    }

    public function delete($id)
    {
        
        $carId=Car::where(['id'=>$id])->first();

        if($carId)
        {
            $carId->delete();
            return redirect()->route('car_list');
        }

    }

    public function approval($id)
    {
        $data=CarBook::find($id);
        $data['status']='Approved';
        $data->save();
        return redirect()->back(); 
    }

    public function admin_logout()
    {
        Auth::logout();
        return redirect()->route('login'); 
    }
}
