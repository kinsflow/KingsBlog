<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Post;
use App\User;
class kingsController extends Controller
{
    //
    public function home()
    {
            //$posts = Post::all()->join('users')->on('users.id', '=', 'posts.user_id');
            $posts = \Illuminate\Support\Facades\DB::table('posts')
                    ->select('posts.*', 'users.name')
                    ->join('users', 'posts.user_id', '=', 'users.id')->orderBy('id','desc')->take(5)->get();
            return view('layout.home', compact('posts'));
    }



    public function dashboard()
    {
            $id= Auth::user();
            $posts=$id->posts->all();
            return view('layout.dashboard', compact('posts'));
    }


    public function nav()
    {
        return view('layout.nav');
    }


    public function logon()
    {
        return view('layout.logon');
    }



    public function comment(Post $uid)
    {
        $uid = $uid->id;
        $comment = Comment::create([
        'comments' => request('comment'),
        'post_id' => $uid
    ]);
    
    return back();
    }



    public function insert(Request $request)
    {
        $id = Auth::user()->id;
    $insert = [
        'user_id'=>$id,
        'title' => $request['title'],
        'post' => $request['post']
    ];
    $run = Post::create($insert);
    return redirect('/dashboard');
    }



    public function login()
    {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        if($user){
            return redirect('logon');
        }
    }



    public function auth()
    {
        $credentials = [
            'email' => request('email'),
            'password' => request('password')
          ];
      
          if (auth()->attempt($credentials)) {
              return redirect('dashboard');
          }
          dd('not found');
      
      //    if (auth()->attempt(['email' => request('email'), 'password' => request('password')]))
      
    }


    public function shart($id)
    {
        $uid = Post::find($id);
    return view('layout.shart', compact('uid'));
    }

}
