<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#141f33;">
        <img src="https://pbs.twimg.com/profile_images/503398857430937600/qkAjKBDv_400x400.jpeg" style="height: 50px; width: auto;"> 
        <a class="navbar-brand" href="/" style="margin-left: 20px;">伏線すげぇ.work</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">{!! link_to_route('users.index', 'ユーザー一覧', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('users.show', '自分のプロフィール', ['id' => Auth::id()]) !!}</li>
                            <li class="dropdown-item">{!! link_to_route('favorites.show', 'お気に入り', ['id' => Auth::id()]) !!}</li>
                            <li class="dropdown-item">{!! link_to_route('works.index', '作品投稿', []) !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">{!! link_to_route('signup.get', 'サインナップ', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
