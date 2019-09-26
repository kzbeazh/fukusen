{!! Form::model($work, ['route' => ['works.destroy', $work->id], 'method' => 'delete']) !!}
{!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}