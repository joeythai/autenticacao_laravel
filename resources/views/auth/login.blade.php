<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h1>Login Page</h1>
          <pre>{{ var_dump($errors) }}</pre>
          <pre>{{ var_dump(session('fail')) }}</pre>
          <form action="/auth/login" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
            </div>

            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="form-group">
              <label for="remember"> <input type="checkbos" name="remember" >Remember </label>
            </div>

            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-success">
            </div>
          </form>
        </div>

      </div>

    </div>
  </body>
</html>
