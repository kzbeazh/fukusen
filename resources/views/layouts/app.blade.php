<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>伏線すげぇ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>

    <body>

        @include('commons.navbar')
        @include('commons.error_messages')
        @yield('content')
        
        <br>
        <hr>
        <h5 style="text-align: center; color: gray; font-size: 15px;">©Copyright 2019 Fukusensugee.work All Rights Reserved.</h5>
        <br>        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>