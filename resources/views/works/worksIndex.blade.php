@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <h1>伏線作品を探そう！</h1>
        
        <div class="row">
            <div class="col-6">
                {!! Form::open(['route' => 'works.show']) !!}
                    <div class="form-group">
                        {!! Form::label('keyword', '検索キーワード：') !!}
                        {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection