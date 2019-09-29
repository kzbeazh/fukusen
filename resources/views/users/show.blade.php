@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row o-4column" style="margin-bottom: 1rem; margin-top: 2rem;">
        <div class="col-md-3"> 
             @include('users.prof')
             <br>
             <h3><span class="my-parts" style="font-size: 20px;">ユーザー画像を変更</span></h3>
             @if ($user->id == \Auth::user()->id)
                <form action="{{ action('PostsController@create') }}" method="post" enctype="multipart/form-data">
                <!-- アップロードフォームの作成 -->
                <input type="file" name="image">
                {{ csrf_field() }}
                <input type="submit" value="アップロード">
              @else
              @endif
      </form>
        </div>

        <div class="col-md-9" style="margin-bottom: 1rem; margin-top: 2rem;">
            @include('users.usersNavtab')
            @include('eachWorks.eachWorks')
        </div>
    </div>
</div>

@endsection