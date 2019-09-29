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
        
        <?php if ($response->hits > 0) { ?>
                <br>
                <p>&quot;<?php print htmlspecialchars($keyword, ENT_QUOTES, "UTF-8"); ?>&quot;の検索結果一覧</p>
                <?php foreach ($response->Items as $item) { ?>
                <div class="card">
                    <div class="card-body">
                      　<div class="row o-2column">
                            <div class="col-md-2">
                                <div style="text-align: center;">
                                    <img style="width: 100px; height: 150px; object-fit: cover;" src='<?php print htmlspecialchars($item->Item->mediumImageUrls[0]->imageUrl, ENT_QUOTES, "UTF-8"); ?>' />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-title" style="font-weight:bold; text-decoration:underline;">{{ $item->Item->itemName }}</h5>
                                <p class="card-text">{{ $item->Item->itemCaption }}</p>
                                {!! link_to_route('works.create', '作品の詳細情報作成ページへ', ['itemCode' => $item->Item->itemCode, 'keyword' => $keyword], ['class' => 'btn btn-info']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            <?php } ?>
        <?php } else { ?>
            <p>検索結果はありません</p>
        <?php } ?>
    </div>
@endsection