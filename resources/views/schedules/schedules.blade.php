@extends('layouts.template')

@section('content')
<a href="{{action('ScheduleController@create')}}"><button type="button" class="btn btn-primary btn-sm">Ajouter plannig</button></a>

@foreach($schedules as $schedule)
    <ul>
        <li>{{ $schedule->id }}</li>
        <li>{{ $schedule->task_id }}</li>
        <li>{{ $schedule->place_id }}</li>
        <li>{{ $schedule->start_at }}</li>
        <li>{{ $schedule->end_at }}</li>
        <li>{{ $schedule->constant_id_lateness }}</li>
        <li>{{ $schedule->constant_id_absence }}</li>
        <li>{{ $schedule->teacher_id }}</li>
        <li>{{ $schedule->planner_id }}</li>
        <li><a href="{{action('ScheduleController@show', $schedule)}}"><button type="button" class="btn btn-primary btn-sm">Afficher plannig</button></a></li>
    </ul>
@endforeach
@stop