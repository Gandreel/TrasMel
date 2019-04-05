<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('css/registro.css')}}" rel="stylesheet" type="text/css" media="all" />
    <title>TrasMel</title>
</head>
<body>

<div class="testbox">
  <h1>Registro de Usuario</h1>

  <form action="/">

  <hr>
  <label id="icon" for="email"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Email" required/>

  <label id="icon" for="nickName"><i class="icon-user"></i></label>
  <input type="text" name="nickName" id="nickName" placeholder="Nick Name" required/>

  <label id="icon" for="pass"><i class="icon-shield"></i></label>
  <input type="password" name="pass" id="pass" placeholder="Password" required/>
  <hr>

   <p>Si aprieta el boton de registro acepta los <a href="#">terminos y condiciones</a>.</p>
   <a href="#" class="button">Registro</a>
  </form>
</div>
</body>
</html>
