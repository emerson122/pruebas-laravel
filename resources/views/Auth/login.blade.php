<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Soy un Login</h5>
            @if(Session::has('NOregistrado'))
            <b>
              <FONT COLOR="green">
                {{Session::get('NOregistrado')}}
              </FONT>
            </b>
            <br>
            @endif

           
            <form name="login" action="" method="POST">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="name@example.com" required>
                <label for="floatingInput">User</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="contra" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Contaseña</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Iniciar Sesion</button>
              </div>
              <hr class="my-4">
              <div class="d-grid">
                <a href="{{route('register')}}" class="btn btn-success btn-login text-uppercase fw-bold">Registrarse</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</body>

</html>