<div class="row o-3column">
    @foreach ($works as $work)
        <div class="col-md-4" style="margin-bottom: 1rem; margin-top: 1rem;">     
            <div class="card" style="width: max;">
              <div style="text-align: center;">
                  @if ($work->worksMunakuso == "ムナクソ注意！" )
                      <h3><span class="badge badge-danger">ムナクソ注意！</span></h3>
                  @else
                      <h3><span><br></span></h3>
                  @endif
                  <img class="card-img-top top-works" style="width: 150px; height:200px;" src="<?php print htmlspecialchars($work->imageUrl, ENT_QUOTES, "UTF-8"); ?>" alt="作品画像">
              </div>
              <div class="card-body">
                <h4 style="font-size: 20px;" class="card-title item-works">{{ $work->itemName }}</h4>
                <p class="card-text item-works">{{ $work->worksComment }}</p>
                <div style="text-align: center;">
                <button type="button" class="btn btn-outline-primary btn-sm">{{ $work->worksKind }}</button>
                <button type="button" class="btn btn-outline-info btn-sm">{{ $work->worksCategory }}</button>
                </div>
              </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                       <a>伏線度：</a>
                        @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $work->worksFukusendo )
                            <i class="fas fa-star my-color"></i>
                        @else
                            <i class="fas fa-star else-color"></i>
                        @endif
                        @endfor
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
</div>

