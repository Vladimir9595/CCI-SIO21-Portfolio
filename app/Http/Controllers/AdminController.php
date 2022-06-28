<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        // $posts = [
        //     'Mon titre',
        //     'Mon second titre'
        // ];

        return view(
            'index'
            // [
            //     // 'posts' => $posts,
            //     // 'id_1' => 3
            // ]
        );
    }
}
