@extends('layouts.app')

@section('content')

    <h1>伏線作品を登録しよう！</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src='<?php print htmlspecialchars($imageUrl, ENT_QUOTES, "UTF-8"); ?>'>
                       <div class="card-body">
                       <h5 class="card-title text-center alert alert-primary">作品名</h5>
                       <p class="card-text"><?php print htmlspecialchars($itemName, ENT_QUOTES, "UTF-8"); ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                       <li class="list-group-item">
                            <a href="<?php print htmlspecialchars($itemUrl, ENT_QUOTES, "UTF-8"); ?>" target="_blank" class="card-link text-center">
                               楽天詳細ページへ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                {!! Form::open(['route' => 'works.store']) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('fukusendo', '伏線度') !!}
                                    <select name="worksFukusendo" style="vertical-align: top; margin-right: 10px;" class="form-control">
                                        <option value="">1～5でスゴさを選んで下さい</option>
                                        <option value=1>1 : しょうもな</option>
                                        <option value=2>2 : まぁ多少はね...</option>
                                        <option value=3>3 : こんなもんかな</option>
                                        <option value=4>4 : 結構スゴイやんけ！</option>
                                        <option value=5>5 : 衝撃が忘れられない...</option>
                                    </select>
                            </div>
                        
                            <div class="col-md-6">
                                {!! Form::label('kind', '作品の種別') !!}
                                <select name="worksKind" style="vertical-align: top; margin-right: 10px;" class="form-control">
                                    <option value="">作品の種別を選んで下さい</option>
                                    <option value=1>映画</option>
                                    <option value=2>小説</option>
                                    <option value=3>マンガ</option>
                                </select>
                             </div>
                         </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('category', '伏線の種類') !!}
                                    <select name="worksCategory" style="vertical-align: top; margin-right: 10px;" class="form-control">
                                        <option value="">伏線の種類を選んで下さい</option>
                                        <option value=1>ちょくちょく回収型</option>
                                        <option value=2>最後にドカン型</option>
                                        <option value=3>意味不明型</option>
                                    </select>
                            </div>
                        
                            <div class="col-md-6">
                                {!! Form::label('munakuso', 'ムナクソ度') !!}
                                <select name="worksMunakuso" style="vertical-align: top; margin-right: 10px;" class="form-control">
                                    <option value="">見た後に気分悪くなりますか？</option></option>
                                    <option value=1>悪くなる</option>
                                    <option value=2>問題無し</option>
                                </select>
                             </div>
                         </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('comment', 'コメント') !!}
                        {!! Form::textarea('worksComment', null, ['class' => 'form-control', 'rows' => '4']) !!}
                    </div>
                    
                    {!! Form::hidden('itemName', $itemName) !!}                    
                    {!! Form::hidden('imageUrl', $imageUrl) !!}
                    {!! Form::hidden('itemUrl', $itemUrl) !!}

                    {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}

                {!! Form::close() !!}
            </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    
@endsection