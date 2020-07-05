<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $data = [];

        if ($request->isMethod('post')) {
            $form = $request->all();

            $rules = array(
                'email' => 'required|email',
                'password' => 'required|alphaNum|min:3'
            );

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {

                $data['message'] = "Dados inválidos";

            } else {

                $userdata = array(
                    'email' => $form['email'],
                    'password' => $form['password']
                );

                // attempt to do the login
                if (Auth::attempt($userdata)) {

                    return redirect(config('app.url') . '/dashboard');

                } else {

                    return redirect(config('app.url') . '/login', $data);

                }
            }
        }

        return view('login');
    }

    public function notfound() {
        return view('notfound');
    }
}
