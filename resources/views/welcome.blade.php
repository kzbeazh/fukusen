@extends('layouts.app')

@section('content')
    @if (Auth::check())

    @else
        <div class="top-wrapper">
            <!--　▼ ジャンボトロン　 -->
                <div class="jumbotron">
                  <div class="container">
                    <h1>見出しテキストテキスト</h1>
                    サブテキストサブテキストサブテキストサブテキストサブテキストサブテキスト
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a>
                  </div>
                </div>
            <!--　▲ ジャンボトロン　 -->
        </div>
        
        <div class="message-wrapper">
            
        </div>
        
        <div class="works-wrapper">
            
        </div>

        <footer>
            
        </footer>        
    @endif
@endsection