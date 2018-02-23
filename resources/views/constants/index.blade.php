<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scanvador</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Value</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($constants as $constant)
      <tr>
      <td>{{ $constant->id }}</td>
      <td>{{ $constant->name }}</td>
      <td>{{ $constant->value }}</td>
        <td><a href="{{action('ConstantController@edit', $constant['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ConstantController@destroy', $constant['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>