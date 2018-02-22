@extends('layouts.template')

@section('title')
{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}
@stop
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenue {{ Auth::user()->first_name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
