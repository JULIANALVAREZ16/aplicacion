<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <form method="post" action="registrar.php">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identificador</label>
    <input type="text" class="form-control" id="Identificador" name="Identificador" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Detalle</label>
    <input type="text" class="form-control" id="Detalle" name="Detalle" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Registarr</button>
</form>
    
</body>
</html>