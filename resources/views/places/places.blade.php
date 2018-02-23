@extends('layouts.template')

@section('content')

{!! Form::open(['url' => '/places']) !!}

    <h1>La liste des salles / lieux de l'établissement</h1>
  
    Le nom de la salle : <input type="text" name="first_name"/><br />
    Etablissement : <input type="mail" name="email"/><br />
	
{!! Form::close() !!}

@endsection