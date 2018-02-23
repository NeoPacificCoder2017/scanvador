{!! Form::open(['action' => $action, 'method' => $method]) !!}

{!! Form::label('task_id', 'tâche à accomplir:') !!}
{!! Form::number('task_id') !!}

{!! Form::label('place_id', 'lieu indiqué:') !!}
{!! Form::number('place_id') !!}

{!! Form::label('start_at', 'début:') !!}
{!! Form::datetime('start_at') !!}

{!! Form::label('end_at', 'fin:') !!}
{!! Form::datetime('end_at') !!}

{!! Form::label('constant_id_lateness', 'constante de retard:') !!}
{!! Form::number('constant_id_lateness') !!}

{!! Form::label('constant_id_absence', 'constante d\'abscence:') !!}
{!! Form::number('constant_id_absence') !!}

{!! Form::label('teacher_id', 'professeur:') !!}
{!! Form::number('teacher_id') !!}

{!! Form::submit('Valider') !!}

{!! Form::close() !!}