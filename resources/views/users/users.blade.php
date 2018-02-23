@extends('layouts.template')

@section('title', 'Utilisateurs')

@section('content')
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users AS $user)
      <tr>
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->first_name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop