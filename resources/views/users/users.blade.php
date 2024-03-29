<br>
<h1>ユーザー一覧</h1>
<div class="row o-4column">
    @if (count($users) > 0)
        @foreach ($users as $user)
            <div class="col-md-3"> 
                <div class="card" style="width: 12rem; margin: 1rem;">
                  <img src="{{ $user->profUrl }}" class="card-img-top" alt="ユーザー画像" style="width: 200px; height: 200px; object-fit: cover; padding: 20px;">
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 15px;">{{ $user->name }}</h5>
                    <p style="font-size: 12px;">{!! link_to_route('users.show', 'プロフィール', ['id' => $user->id]) !!}</p>
                    @include('user_follow.follow_button', ['user' => $user])
                  </div>
                </div>
            </div>
        @endforeach
    @endif
</div>