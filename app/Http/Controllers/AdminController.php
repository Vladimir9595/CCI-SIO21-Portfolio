<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        // return abort('404');
        return view(
            'log'

        );
    }

    public function admin()
    {
        $user = [
            'name' => $_POST['pseudo'],
            'password' => $_POST['password']
        ];
        if (Auth::attempt($user)) {
            return view(
                'admin'
            );
        } else {
            return back();
        }
    }
}
