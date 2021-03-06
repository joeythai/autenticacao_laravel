<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h1>Register</h1>
          <pre>{{ var_dump($errors) }}</pre>
          <form action="/auth/register" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
              <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
            </div>

            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="form-group">
              <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control">
            </div>


            <div class="form-group">
              <input type="submit" value="Register" class="btn btn-success">
            </div>
          </form>
        </div>

      </div>

    </div>
  </body>
</html>
