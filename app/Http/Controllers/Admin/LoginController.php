<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

use App\Http\Requests;
use App\User;


class LoginController extends AdminController
{



    public  function  index()
    {


        if (\Auth::check()){

            return redirect('admin/index');

        }else{

            return view('admin/login');

        }


    }

    public function store(Requests\adminLoginRequest $request)
    {

        if (\Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

            return redirect('admin/index');

        }else{
            \Session::flash('user_login_failed','密码不正确或邮箱不正确');

            return redirect('admin/login')->withInput(['email'=>$request->get('email')]);

        }

    }

    public function logout()
    {

        \Auth::logout();



        if (!\Auth::check()){

            echo  123;
            return redirect('admin/login');

        }


    }



}
