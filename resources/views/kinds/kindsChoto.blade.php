@extends('layouts.app')

@section('content')
        <div class="top-wrapper">
            <div class="jumbotron">
                <h2>伏線で人生に驚きを</h2>
                <h3>More surprise will make the better life.</h3>
            </div>
            
            <div class="container">
                @include('commons.navtab')
                @include('eachWorks.eachWorks')
            </div>
        </div>
@endsection

