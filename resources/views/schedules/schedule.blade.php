{!! dump($schedule) !!}

<a href="{{action('ScheduleController@edit', $schedule)}}"><button type="button" class="btn btn-primary btn-sm">Modifier plannig</button></a>

{!! Form::open(['action' => ['ScheduleController@destroy', $schedule], 'method' => 'delete']) !!}

{!! Form::submit('Supprimer') !!}

{!! Form::close() !!}