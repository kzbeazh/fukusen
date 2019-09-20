@extends('layouts.app')

@section('content')
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
        <div class="row">
            <div class="col-12">
                <h2>&quot;<?php print htmlspecialchars($keyword, ENT_QUOTES, "UTF-8"); ?>&quot;の検索結果一覧</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">画像</th>
                            <th>作品名</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($response->Items as $item) { ?>
                            <tr>
                                <td>
                                    {!! link_to_route('works.create', 'これにする！', ['itemCode' => $item->Item->itemCode, 'keyword' => $keyword]) !!}
                                </td>                                
                                <td class="text-center">
                                    <img src='<?php print htmlspecialchars($item->Item->mediumImageUrls[0]->imageUrl, ENT_QUOTES, "UTF-8"); ?>' />
                                </td>
                                <td>
                                    <a href="<?php print htmlspecialchars($item->Item->itemUrl, ENT_QUOTES, "UTF-8"); ?>" target="_blank">
                                        <?php print htmlspecialchars($item->Item->itemName, ENT_QUOTES, "UTF-8"); ?>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <p>検索結果はありません</p>
    <?php } ?>

@endsection