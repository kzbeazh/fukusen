@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card each" style="width: max;">
      <div style="text-align: center;">
          @if ($work->worksMunakuso == "ムナクソ注意！" )
             <h4 style="padding-top: 5px;"><i class="fas fa-exclamation-triangle fa-1x" style="color: red;"></i><a><span></span></a></h4>
          @else
             <h4 style="padding-top: 5px;"><br></h4>
          @endif
          <a><span class="badge badge-primary">{{ $work->worksKind }}</span></a>
          <a><span class="badge badge-info">{{ $work->worksCategory }}</span></a>
          <br>
          <img class="card-img-top top-works" style="width: 150px; height:200px;" src="<?php print htmlspecialchars($work->imageUrl, ENT_QUOTES, "UTF-8"); ?>" alt="作品画像">
      </div>
      <div class="card-body">
        <h4 style="font-size: 20px;" class="card-title item-works">{{ $work->itemName }}</h4>
        <p class="card-text item-works">{{ $work->worksComment }}</p>
      </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
               <a>伏線度：</a>
                @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $work->worksFukusendo )
                    <a class="fas fa-star my-color"></a>
                @else
                    <a class="fas fa-star else-color"></a>
                @endif
                @endfor

            </li>
       </ul>
    </div>
    <div>
    <br>
        {!! Form::open(['route' => ['works.detailStore']]) !!}
            <div class="form-group">
                {!! Form::textarea('workPost', null, ['class' => 'form-control', 'rows' => '2']) !!}
                <br>
                {!! Form::submit('コメント送信', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::hidden('workId', $work->id) !!}
            </div>
        {!! Form::close() !!}
    </div>
    
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0" style="font-size: 30px;">コメント</h6>
            @foreach ($comments as $comment)
                <div class="media text-muted pt-3">
                    <img src="https://1.bp.blogspot.com/-4PxfPaQV_YQ/UX-OUxD7rDI/AAAAAAAAQ28/ksJloFBsE94/s400/animal_hamster.png" style="width: 80px; height:80px; margin-right: 10px; object-fit: cover; ">
                        @if (Auth::id() == $comment->user->id)
                            {!! Form::model($comment, ['route' => ['works.detaildestroy', $comment->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
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
