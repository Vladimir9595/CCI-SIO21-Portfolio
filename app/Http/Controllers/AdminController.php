<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view(
            'log'
        );
    }

    public function admin()
    {
        $articles = Article::all();
        if (count($_POST) > 2) {
            $user = [
                'name' => $_POST['pseudo'],
                'password' => $_POST['password']
            ];

            if (Auth::attempt($user)) {
                Session::put('connected', true);
                return view(
                    'admin',
                    compact('articles')
                );
            } else {
                Session::put('connected', false);
                return back();
            }
        } elseif (Session::get('connected') === true) {
            return
                view(
                    'admin',
                    compact('articles')
                );
        }
    }

    public function new()
    {
        $message = false;
        if (Session::get('connected') === false) {
            return abort('404');
        }
        if (count($_POST) > 3) {
            Article::create([
                'title' => $_POST['title'],
                'image' => $_POST['image'],
                'content' => $_POST['content'],
                'link' => $_POST['link'],
            ]);
            $message = true;
        }
        return view(
            'action'
        )->with('action', 'new')->with('message', $message);
    }
    public function edit($id, Request $request)
    {
        $message = false;
        if (Session::get('connected') === false) {
            return abort('404');
        }
        $article = Article::find($id);

        if (count($_POST) > 3) {
            $update = Article::find($id);

            $update->title = $request->input("title");
            $update->image = $request->input("image");
            $update->content = $request->input("content");
            $update->link = $request->input("link");
            $update->save();
            $message = true;
        }
        return view(
            'action'
        )->with('action', 'edit')->with('article', $article)->with('message', $message);
    }
    public function delete($id)
    {
        if (Session::get('connected') === false) {
            return abort('404');
        }
        $delete = Article::find($id);
        $delete->delete();
        return view(
            'action'
        )->with('action', 'delete');
    }
}
