<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Models\Users;
use Session;
use DB;


class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request){
        $acc = $request->account;
        if(Auth::attempt(['account' => $request->account,'password'=> $request->password])){
               // Session::flash('name_acc',$request->account);
                
               $data = [DB::table('users')-> where('account',$acc)->first()];
               // return redirect('home',compact($request));
                return view('contact',['data' => $data]);
        }else{
            return redirect('login')-> with('Thong bao','Dang nhap k thanh cong');
        }
    }
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('login');
}
}
