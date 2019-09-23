@extends('layouts.app')

@section('content')

<div class="container">
    @include('users.users', ['users' => $users])
</div>

@endsection