@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>ログインしよう！</h1>
        </div>
    
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
    
                <p class="mt-2">新人ですか? {!! link_to_route('signup.get', '今すぐユーザー登録!') !!}</p>
            </div>
        </div>
    </div>
@endsection