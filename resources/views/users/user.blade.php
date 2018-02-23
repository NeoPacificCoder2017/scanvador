@extends('layouts.template')

@section('title')
{{ $user->last_name}} {{ $user->first_name}}
@stop

@section('content')
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->first_name }}</td>
      </tr>
    </tbody>
  </table>
@stop