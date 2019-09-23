@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="top-wrapper">
            <div class="jumbotron">
                <h2>伏線で人生に驚きを</h2>
                <h3>More surprise will make the better life.</h3>
            </div>
            <div class="container">
                @include('commons.navtab')
                @include('eachWorks.eachWorks')
            </div>
        </div>
        <br>
        <hr>
        <br>
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
                <h2><span class="my-parts">気分に合わせて選べるよ</span></h2>
                  <div class="row o-4column">
                    <div class="col-md-3">
                    　<p>ちょっとづつ回収するよ<p><i class="fas fa-arrow-circle-right"></i> じっくり考えよう</p></p>
                    　<i class="fas fa-fish fa-5x"></i>
                    </div>
                    <div class="col-md-3">
                    　<p>最後に一気に回収する<p><i class="fas fa-arrow-circle-right"></i> カタルシスを味わえるよ</p></p>
                    　<i class="fas fa-hand-rock fa-5x"></i>
                    </div>
                    <div class="col-md-3">
                    　<p>よく分からない伏線だよ<p><i class="fas fa-arrow-circle-right"></i> 考えてもムダなこともあるよ</p></p>
                    　<i class="fas fa-question-circle fa-5x"></i>
                    </div>
                    <div class="col-md-3">
                    　<p>ムナクソ作品が分かるよ<p><i class="fas fa-arrow-circle-right"></i> 見たら一日の気分台無しだよ</p></p>
                    　<i class="fas fa-exclamation-triangle fa-5x" style="color: red;"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <hr>
        <br>
                
        <div class="step-wrapper">
            <div class="container">
                <h2><span class="my-parts">伏線がある作品をみんなで投稿しよう！</span></h2>
                <h2><span class="my-parts">使い方は簡単3ステップ！</span></h2>
                <br>
                  <div class="row o-3column">
                    <div class="col-md-4">
                    　<h3>ステップ1</h3>
                    　<i class="fas fa-search fa-5x"></i>
                    　<br>
                    　<p>楽天の力を使って作品検索</p>
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
                    　<p>みんなに公開</p>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <hr>
        <br>
        
        <div class="works-wrapper">
            <div class="container">
                <h2 style="text-align: center;"><span class="my-parts">新着作品だよ！</span></h2>
                <br>
                @include('eachWorks.eachWorks')
            </div>
        </div>
        
        <br>
        <hr>
        <br>
    @endif
@endsection