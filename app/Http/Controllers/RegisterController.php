<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
    
        if($request->isMethod('post')){
            $acc = $request->input("acc");
            $pass = $request->input("pass");
            $cpass = $request->input("cpass");
            $checkAcc = DB::table('users')-> where('account',$acc)->first();
            if($checkAcc){
                return redirect()->route('re')-> with ('message1','Account exists');
            }else{
                if ($pass === $cpass){
                    $user = new Users();
                    $user->account = $acc;
                    $user->password = bcrypt($pass);
                    $user->save();
                    $details =[
                        'account'=> $request->input("acc"),
                        'password'=>  $pass = $request->input("pass")
                ];
                Mail::to('long.duc.5074@gmail.com')->send(new SendMail($details));
                    return redirect()->route('login')-> with ('message2','Register succesful');
                }else{
                    return redirect()->route('re')-> with ('message3','2 pass should same');
                }
            }
          

          
        }
    }


}
