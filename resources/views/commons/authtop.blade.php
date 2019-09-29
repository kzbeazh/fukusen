<div class="jumbotron" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
        <div class="row o-2column">
            <div class="col-md-8">
                <h2 style="padding-top: 10px; padding-bottom: 10px;">伏線で人生に驚きを</h2>
                <h3 style="padding-bottom: 30px;">More surprise will make the better life.</h3>
            </div>
            <div class="col-md-4">
                <div class="active-cyan-4 mb-4">
                    {!! Form::open(['route' => 'works.search']) !!}   
                        <div class="input-group">
                            {!! Form::text('searchword', null, ['class' => 'form-control mr-sm-2', 'style' => 'margin-right: 5px;']) !!}
                            <span class="input-group-btn">
                                {!! Form::submit('検索', ['class' => 'btn btn-info border border-white']) !!}
                            </span>
                        </div>
                    {!! form::close() !!}
                    <br>
                    {!! link_to_route('works.index', '作品投稿', [], ['class' => 'btn btn-primary btn-lg btn-block border border-white']) !!}
                </div>
            </div>
        </div>
    </div>
</div>