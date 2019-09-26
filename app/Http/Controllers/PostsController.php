<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Storage;
use App\User;

class PostsController extends Controller
{
  public function add()
  {
      return view('posts.create');
  }

  public function show($id)
    {
        $data = [];
        $user = User::find($id);
        $works = $user->works()->orderBy('created_at', 'desc')->paginate();

        $data = [
            'user' => $user,
            'works' => $works,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
/*
  public function create(Request $request)
  {
      $post = new Post;
      $form = $request->all();

      //s3アップロード開始
      $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      // アップロードした画像のフルパスを取得
      $post->image_path = Storage::disk('s3')->url($path);

      $post->save();

      return redirect('welcome');
  }
*/

  public function create(Request $request)
  {
    
//      $post = new Post;
//      $form = $request->all();
    
      //s3アップロード開始
      $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      // アップロードした画像のフルパスを取得
      $profUrl = Storage::disk('s3')->url($path);
      
      $data = [];
      $user = \Auth::user();
      $works = $user->works()->orderBy('created_at', 'desc')->paginate();

      $data = [
          'user' => $user,
          'works' => $works,
          'profUrl' => $profUrl,
      ];

      $data += $this->counts($user);
      return view('users.postshow', $data);
  }

    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->profUrl = $request->profUrl;
        $user->save();
        
        return redirect('/');
    }

  
}