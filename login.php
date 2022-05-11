<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
  <h2>Formulario de Ingreso</h2>
  <br><br>
  <form action="menu.php">
    <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" id="email" placeholder="Ingresar el nombre del usuario" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Ingresar su contraseña" name="pwd">
    </div>
    <br><br><br>
    <center>
    <button type="submit" class="btn btn-warning">Ingresar</button> <br><br>
    <button type="submit" class="btn btn-warning">Registrarse</button></center>
  </form>
</div>
</body>
</html>