<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Rating;
use Session;
use Illuminate\Support\Facades\DB;
use Mail;

class UserController extends Controller
{

    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
      
    }

    function register(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        
        if (!Hash::check($req->confirm_password, $user->password))
        {
            return "The passwords do not match";
        }
        else
        {
            $user->save();
            $req->session()->put('user',$user);     //directly start the session
            return redirect('/');
            $data=['name'=>$user->name,'data'=>"Thankyou for registering here on this website. Please explore the different courses"];
            $user['to']=$user->email;
            Mail::send('register_mail',$data,function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject('Hello from E-Learning App');
            });

        }

        return redirect('/login');            //redirected to login first
       
     }


}