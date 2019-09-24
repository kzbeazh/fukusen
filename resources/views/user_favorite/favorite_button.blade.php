@if (Auth::user()->is_favorite($work->id))
    {!! Form::open(['route' => ['works.unfavorite', $work->id], 'method' => 'delete']) !!}
        {!! Form::submit('お気に入り', ['class' => 'btn btn-light btn-sm']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['works.favorite', $work->id]]) !!}
        {!! Form::submit('お気に入り', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@endif