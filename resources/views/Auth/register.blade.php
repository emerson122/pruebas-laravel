<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-success row align-items-center vh-100 justify-content-center">
    
    <div class="col-sm-6 bg-white text-center">
        <form action="" method="POST">
            @csrf
            <legend> <b> Registrarse</b></legend>
            <hr>
            <label for="" bgcolor='white'>Nombre Completo
            <input type="text" id="" name="name" required></label>
            <br>
            <hr>
            <label for="">Cuenta de usuario:
                    <input type="text" id="" name="user" required>
            </label>
                <hr>
                    <br>
            <label for="">Contraseña:
                    <input type="password" id="" name="pass" required>
            </label>
            <hr>
            <button class="btn btn-success  btn-login text-uppercase fw-bold" type="submit">Registrar</button>
            <a href="{{route('login')}}" class="btn btn-primary  btn-login text-uppercase fw-bold" href="">Cancelar</a>
            <hr>
        </form>
    </div>          
</body>
</html>
                