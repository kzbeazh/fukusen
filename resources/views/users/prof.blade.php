<div class="card" style="width: 12rem;">
  <img src="{{ Gravatar::src($user->email, 50) }}" class="card-img-top" alt="ユーザー画像">
  <div class="card-body">
    <h5 class="card-title">{{ $user->name }}</h5>
    <p>{!! link_to_route('users.show', 'プロフィール', ['id' => $user->id]) !!}</p>
  </div>
    @include('user_follow.follow_button', ['user' => $user])
</div>