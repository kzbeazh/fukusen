@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <h1>伏線作品を登録しよう！</h1>
        <br>
        <h2><span class="my-parts">作品情報</span></h2>
        <div class="card">
            <div class="card-body">
              　<div class="row o-2column">
                    <div class="col-md-2">
                        <div style="text-align: center;">
                            <img style="width: 100px; height: 150px; object-fit: cover;" src='<?php print htmlspecialchars($imageUrl, ENT_QUOTES, "UTF-8"); ?>' />
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5 class="card-title" style="font-weight:bold; text-decoration:underline;">{{ $itemName }}</h5>
                        <p class="card-text">{{ $itemCaption }}</p>
                        <a href="<?php print htmlspecialchars($itemUrl, ENT_QUOTES, "UTF-8"); ?>" target="_blank" class="card-link text-center">
                            楽天詳細ページへ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <h2><span class="my-parts">登録情報の作成</span></h2>
        {!! Form::open(['route' => 'works.store']) !!}
            <div class="form-group">
                {!! Form::label('worksName', '作品名') !!}
                {!! Form::textarea('worksName', null, ['class' => 'form-control', 'rows' => '1']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('worksStory', 'ストーリー') !!}
                {!! Form::textarea('worksStory', null, ['class' => 'form-control', 'rows' => '4']) !!}
            </div>
            
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
                            <option value="映画">映画</option>
                            <option value="小説">小説</option>
                            <option value="マンガ">マンガ</option>
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
                                <option value="ちょくちょく回収型">ちょくちょく回収型</option>
                                <option value="最後にドカン型">最後にドカン型</option>
                                <option value="意味不明型">意味不明型</option>
                            </select>
                    </div>
                
                    <div class="col-md-6">
                        {!! Form::label('munakuso', 'ムナクソ度') !!}
                        <select name="worksMunakuso" style="vertical-align: top; margin-right: 10px;" class="form-control">
                            <option value="">見た後に気分悪くなりますか？</option></option>
                            <option value="ムナクソ注意！">ムナクソ注意！</option>
                            <option value="問題無し">問題無し</option>
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
@endsection