@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    @if ($work->worksMunakuso == "ムナクソ注意！" )
        <h4><i class="fas fa-exclamation-triangle fa-1x" style="color: red;"></i><a><span style="color: red; font-size: 20px;">：ムナクソ注意！</span></a></h4>
    @else
    @endif
        <div class="card">
            
            <div class="card-body">
                <h6 class="border-bottom border-gray pb-2 mb-0" style="font-size: 30px;">作品詳細</h6>
              　<div class="row o-2column">
                    <div class="col-md-2">
                        <div style="text-align: center;">
                            <img style="width: 100px; height: 150px; object-fit: cover;" src='<?php print htmlspecialchars($work->imageUrl, ENT_QUOTES, "UTF-8"); ?>' />
                        </div>
                    </div>
                    <div class="col-md-10">
                        <a class="card-title" style="font-weight:bold; text-decoration:underline; font-size: 20px;">{{ $work->worksName }}</a>
                        <a><span class="badge badge-primary">{{ $work->worksKind }}</span></a>
                        <a><span class="badge badge-info">{{ $work->worksCategory }}</span></a>
                        <p class="card-text">{{ $work->worksStory }}</p>
                        
                        <a class="card-title" style="font-weight:bold; font-size: 15px;">コメント by <a>{!! link_to_route('users.show', $work->user->name, ['id' => $work->user->id]) !!}</a></a>
                        <p class="card-text">{{ $work->worksComment }}</p>
                        <a>伏線度：</a>
                        @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $work->worksFukusendo )
                            <a class="fas fa-star my-color"></a>
                        @else
                            <a class="fas fa-star else-color"></a>
                        @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="container card" style="background-color: #f0f8ff; padding: 20px; margin-top: 20px; margin-bottom: 20px;">
            <h6 class="border-bottom border-gray pb-2 mb-0" style="font-size: 30px;">コメント作成</h6>
            {!! Form::open(['route' => ['works.detailStore']]) !!}
                <div class="form-group">
                    {!! Form::textarea('workPost', null, ['class' => 'form-control', 'rows' => '2']) !!}
                    <br>
                    {!! Form::submit('送信', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::hidden('workId', $work->id) !!}
                </div>
            {!! Form::close() !!}
        </div>
        
    <div class="my-3 p-3 bg-white rounded shadow-sm card">
        <h6 class="border-bottom border-gray pb-2 mb-0" style="font-size: 30px;">コメント一覧</h6>
        @foreach ($comments as $comment)
            <div class="media text-muted pt-3">
                <img src="{{ $comment->user->profUrl }}" style="width: 80px; height:80px; margin-right: 10px; object-fit: cover; display:block;">
                @if (Auth::id() == $comment->user->id)
                    {!! Form::model($comment, ['route' => ['works.detaildestroy', $comment->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @else
                
                @endif
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"  style="font-size: 20px;">
                    <strong class="d-block text-gray-dark"  style="font-size: 15px;"><span>@</span>{{ $comment->user->name }}</strong>
                    <p>{{ $comment->workPost }}</p>
                    <p style="font-size: 15px; text-align: left;">{{$comment->created_at}}</p>
                </div>
             
            </div>
        @endforeach
    </div>
</div>

@endsection
