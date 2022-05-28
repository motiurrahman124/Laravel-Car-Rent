<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\CarBook;

class SiteController extends Controller
{
    public function home()
    {
        $car = Car::all();
    
        return view('front.layouts.home',['car'=>$car]);
    }
    public function about()
    {
        return view('front.layouts.page');
    }
    public function contact()
    {
        return view('front.layouts.contact');
    }
    public function login()
    {
        return view('front.layouts.login');
    }
    public function registration()
    {
        return view('front.layouts.registration');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function carBook()
    {
        
        $carlist=Car::all();
        return view('front.layouts.car_book',['carlist'=>$carlist]);
    }
    public function bookingList()
    {
        
        $booklist=CarBook::all();
        return view('front.layouts.booking_list',['booklist'=>$booklist]);
    }
    public function carBookCreate(Request $request)
    {
        
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['time']=$request->date;
        $data['car_name']=$request->car_name;
        $data['number']=$request->number;
        $data['status']="in progress";
        $data['message']=$request->message;

        CarBook::create($data);
       return redirect()->route('car_booking');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); 
    }
}
    

