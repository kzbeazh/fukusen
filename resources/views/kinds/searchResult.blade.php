@extends('layouts.app')

@section('content')
        <div class="top-wrapper">
            @include('commons.authtop')
            <div class="container">
                <button type="button" class="btn btn-lg btn-info" disabled>検索結果は{{ $workscnt }}件です。</button>
                <br><br>
                @include('commons.navtab')
                @include('eachWorks.eachWorks')
            </div>
        </div>
@endsection