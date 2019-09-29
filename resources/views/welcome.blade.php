@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="top-wrapper">
            @include('commons.authtop')
            <div class="container">
                @include('commons.navtab')
                @include('eachWorks.eachWorks')
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $works->links() }}
        </div>
    @else
        <div class="top-wrapper">
            <div class="jumbotron">
                <h2>伏線で人生に驚きを</h2>
                <h3>More surprise will make the better life.</h3>
                <p>伏線とは</p>
                <p>後の展開に備えて、それに関連した事柄を前のほうでほのめかしておくこと。</p>
            </div>
        </div>
        
        <div class="message-wrapper">
            <div class="container">
                <h2><span class="my-parts">伏線にもイロイロ</span></h2>
                <h2><span class="my-parts">気分に合わせて選ぼう</span></h2>
                  <div class="row o-4column">
                    <div class="col-md-3">
                    　<p>ちょくちょく回収型<p>
                    　<i class="fas fa-fish fa-5x"></i>
                    　<p style="font-size: 15px;">伏線を仕込みながら、少しづつ回収していくスタイル。回収をしない伏線が多すぎると、開いた風呂敷を畳まない「風呂敷職人」と揶揄されることがある。</p>
                    </div>
                    <div class="col-md-3">
                    　<p>最後にドカン型<p>
                    　<i class="fas fa-hand-rock fa-5x"></i>
                    　<p style="font-size: 15px;">溜めに溜めた伏線を最後に一気に回収するスタイル。そのため、途中で見るのを止めた場合は、もどかしさだけが残る。また、ルール無用が横行するのもこのスタイルなので、ノックスの十戒に沿うことが求められる。</p>
                    　<a href="https://ja.wikipedia.org/wiki/%E3%83%8E%E3%83%83%E3%82%AF%E3%82%B9%E3%81%AE%E5%8D%81%E6%88%92">ノックスの十戒 (出展:Wikipedia)</a>
                    </div>
                    <div class="col-md-3">
                    　<p>意味不明型<p>
                    　<i class="fas fa-question-circle fa-5x"></i>
                    　<p style="font-size: 15px;">視聴者が知りたかったことを放置し、全く別の事実が明かされる珍しいスタイル。驚きはするが、なにか釈然としないものが残る、ある意味不条理な作品。</p>
                    </div>
                    <div class="col-md-3">
                    　<p>ムナクソ作品<p>
                    　<i class="fas fa-exclamation-triangle fa-5x" style="color: red;"></i>
                    　<p style="font-size: 15px;">伏線はマイナスの感情に関連することが多く、中には見たことを後悔するような、気分の悪くなる回収をする作品も多く存在する。</p>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <hr>
        <br>
                
        <div class="step-wrapper">
            <div class="container">
                <h2><span class="my-parts">伏線がある作品を投稿</span></h2>
                <h2><span class="my-parts">使い方は簡単3ステップ！</span></h2>
                <br>
                  <div class="row o-3column">
                    <div class="col-md-4">
                    　<h3>ステップ1</h3>
                    　<i class="fas fa-search fa-5x"></i>
                    　<br>
                    　<p>作品検索</p>
                    </div>
                    <div class="col-md-4">
                    　<h3>ステップ2</h3>
                    　<i class="far fa-keyboard fa-5x"></i>
                    　<br>
                    　<p>作品情報を入力</p>
                    </div>
                    <div class="col-md-4">
                    　<h3>ステップ3</h3>
                    　<i class="fas fa-upload fa-5x"></i>
                    　<br>
                    　<p>ユーザーに公開</p>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <hr>
        <br>
        
        <div class="works-wrapper">
            <div class="container">
                <h2 style="text-align: center;"><span class="my-parts">新着作品</span></h2>
                <br>
                @include('eachWorks.eachWorks')
            </div>
        </div>
        
        <br>
        <hr>
        <br>
        
        <div class="container">
            <h2 style="text-align: center;"><span class="my-parts">いますぐログイン</span></h2>
            <br>
        
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
        
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'メールアドレス') !!}
                            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            {!! Form::label('password', 'パスワード') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
        
                        {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
        
                </div>
            </div>
        </div>
    @endif
@endsection