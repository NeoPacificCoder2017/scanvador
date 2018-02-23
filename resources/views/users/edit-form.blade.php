@extends('layouts.template')

@section('title', 'Inscriptions')
@section('content')
<div class="row">
  <div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <div class="row">
      <div class="col-md-6 offset-3">
        <form method="post" action="{{action('UserController@update', $user->id)}}">
            {{csrf_field()}}
          <input type="hidden" value="{{csrf_token()}}" name="_token" />
          <input name="_method" type="hidden" value="PATCH">
          <div class="form-group">
              <label for="first_name">first_name:</label>
              <input value={{ $user->first_name  }} type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">last_name:</label>
              <input value={{ $user->last_name  }} type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="email">email:</label>
              <input value={{ $user->email  }} type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone_number">phone_number:</label>
              <input value={{ $user->phone_number  }} type="text" class="form-control" name="phone_number"/>
          </div>
          <div class="form-group">
              <label for="users_type_id">users_type_id:</label>
              <input value={{ $user->users_type_id  }} type="text" class="form-control" name="users_type_id"/>
          </div>
          <div class="form-group">
              <label for="password">password:</label>
              <input value={{ $user->password  }} type="text" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="class">class:</label>
              <input value={{ $user->class  }} type="text" class="form-control" name="class"/>
          </div>
          <div class="form-group">
              <label for="birth_date">birth_date:</label>
              <input value={{ $user->birth_date  }} type="text" class="form-control" name="birth_date"/>
          </div>
          <div class="form-group">
              <label for="official_picture">official_picture:</label>
              <input value={{ $user->official_picture  }} type="text" class="form-control" name="official_picture"/>
          </div>
          <div class="form-group">
              <label for="profil_picture">profil_picture:</label>
              <input value={{ $user->profil_picture  }} type="text" class="form-control" name="profil_picture"/>
          </div>
          <div class="form-group">
              <label for="token">token:</label>
              <input value={{ $user->token  }} type="text" class="form-control" name="token"/>
          </div>
          <div class="form-group">
              <label for="supervisor_name">supervisor_name:</label>
              <input value={{ $user->supervisor_name  }} type="text" class="form-control" name="supervisor_name"/>
          </div>
          <div class="form-group">
              <label for="supervisor_phone_number">supervisor_phone_number:</label>
              <input value={{ $user->supervisor_phone_number  }} type="text" class="form-control" name="supervisor_phone_number"/>
          </div>
          <div class="form-group">
              <label for="supervisor_mail">supervisor_mail:</label>
              <input value={{ $user->supervisor_mail  }} type="text" class="form-control" name="supervisor_mail"/>
          </div>
          <div class="form-group">
              <label for="establishment_id">establishment_id:</label>
              <input value={{ $user->establishment_id  }} type="text" class="form-control" name="establishment_id"/>
          </div>
          <div class="form-group">
              <label for="qr_code">qr_code:</label>
              <input value={{ $user->qr_code  }} type="text" class="form-control" name="qr_code"/>
          </div>












          <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection