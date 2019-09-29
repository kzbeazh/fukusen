{!! Form::model($work, ['route' => ['works.destroy', $work->id], 'method' => 'delete']) !!}
{!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
{!! Form::close() !!}