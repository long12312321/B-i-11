<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index(Request $request){
        // $name_id =$request->input("name_id");
        //   if($name_id ==""){
        //     return redirect('login');
        //   }else{
        //     return view('contact');
        //   }
          return view('contact');
        }
    public function __construct(){
        $this-> middleware('auth');
    }
}
