<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserFollowController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        \Auth::user()->follow($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        return back();
    }

        public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }
    
    
    public function favorites($id)
    {
        $user = User::find($id);
        $works = $user->favorites()->paginate();

        $data = [
            'user' => $user,
            'works' => $works,
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
    }

    
}
