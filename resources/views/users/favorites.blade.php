@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row o-4column" style="margin-bottom: 1rem; margin-top: 2rem;">
        <div class="col-md-3"> 
             @include('users.prof')
        </div>

        <div class="col-md-9" style="margin-bottom: 1rem; margin-top: 2rem;">
            @include('users.usersNavtab')
            @include('eachWorks.eachWorks')
        </div>
    </div>
</div>

@endsection