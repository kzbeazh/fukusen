@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row o-4column" style="margin-bottom: 1rem; margin-top: 2rem;">
        <div class="col-md-3"> 
             @include('users.prof')
        </div>

        <div class="col-md-9" style="margin-bottom: 1rem; margin-top: 2rem;">
            <ul class="nav nav-tabs nav-justified mb-3">
                <li class="nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">投稿作品 <span class="badge badge-primary">{{ $count_works }}</span></a></li>
                <li class="nav-item"><a href="{{ route('users.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/followings') ? 'active' : '' }}">Followings <span class="badge badge-primary">{{ $count_followings }}</span></a></li>
                <li class="nav-item"><a href="{{ route('users.followers', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/followers') ? 'active' : '' }}">Followers <span class="badge badge-primary">{{ $count_followers }}</span></a></li>
            </ul>
            @include('users.users')
        </div>
    </div>
</div>

@endsection