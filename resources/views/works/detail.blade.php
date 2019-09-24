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
</div>

@endsection