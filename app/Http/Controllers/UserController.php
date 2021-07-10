<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Session;

class UserController extends Controller
{

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);

            if (User::create($data)) {
                Session::flash('success', 'saved');
            } else {
                Session::flash('error', 'Faild to save');
            }
            return redirect('/user/login');
        }

        return view('user.auth.register');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            // if (Auth::guard('admin')->attempt($credentials)) {

            // }

            exit;

          
            //return redirect()->back();
        }

        return view('user.auth.login');
    }
}
