<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonController extends Controller
{
    public function index()
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

    public function mention()
    {
        return view(
        'mentions'

        );
    }
    // public function show($id)
    // {
    //     $posts = [
    //         1 => 'Mon titre n°1',
    //         2 => 'Mon titre n°2'
    //     ];

    //     $post = $posts[$id] ?? 'pas de titre';

    //     return view('article', [
    //         'post' => $post

    //     ]);
    // }

    // public function contact()
    // {
    //     return view('contact');
    // }

    // public function information()
    // {
    //     $infos = [
    //         'Merci d\'écrire votre nom ici',
    //         'Si vous voulez en savoir plus cliquez ici'
    //     ];

    //     return view('info', [
    //         'infos' => $infos,
    //         'num' => 335
    //     ]);
    // }
}
