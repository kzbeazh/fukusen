<div class="row o-3column">
    @foreach ($works as $work)

        <div class="col-md-4 works">     
            @if ($work->worksMunakuso == "ムナクソ注意！" )
                <h4><i class="fas fa-exclamation-triangle fa-1x" style="color: red;"></i><a><span style="color: red; font-size: 20px;">：ムナクソ注意！</span></a></h4>
            @else
                <h4><br></h4>
            @endif
            <div class="card each" style="width: max;">
              <div class="card-body">
                
                @if (Auth::check())
                    <h4 style="font-size: 15px;" class="card-title item-works">{!! link_to_route('works.detail', $work->worksName, ['id' => $work->id]) !!}</h4>
                @else
                    <h4 style="font-size: 15px;" class="card-title item-works">{{$work->worksName}}</h4>
                @endif
                <p class="card-text item-works"></i> {{ $work->worksComment }}</p>
              </div>
              <div style="text-align: center;">

                  <a><span class="badge badge-primary">{{ $work->worksKind }}</span></a>
                  <a><span class="badge badge-info">{{ $work->worksCategory }}</span></a>
                  <br>
                  <img class="card-img-top top-works" style="width: 175px; height: 250px; object-fit: cover; padding: 20px;" src="<?php print htmlspecialchars($work->imageUrl, ENT_QUOTES, "UTF-8"); ?>" alt="作品画像">
                  <br>
                  <p style="color: gray; padding-right: 10px; margin-bottom: 5px;">投稿日：{{ $work->created_at }}</p>
                  @if (Auth::check())
                      <a>by {!! link_to_route('users.show', $work->user->name, ['id' => $work->user->id]) !!}</a>
                  @else
                  @endif
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
                        
                        <div class="active-cyan-4">
                            <div class="input-group">
                                @if (Auth::check())
                                    <a style="margin-right: 10px;">@include('user_favorite.favorite_button')</a>
                                @else
                                @endif
                                <span class="input-group-btn">
                                    @if (Auth::id() == $work->user->id)
                                        <a>@include('eachWorks.workDestroy')</a>
                                    @else
                                    @endif
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
    
    
</div>

