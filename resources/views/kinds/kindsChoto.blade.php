@extends('layouts.app')

@section('content')
        <div class="top-wrapper">
            @include('commons.authtop')
            <div class="container">
                @include('commons.navtab')
                @include('eachWorks.eachWorks')
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $works->links() }}
        </div>
@endsection

