<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de prueba</title>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

  <!-- Latest compiled FontAwesome -->
  <script src="https://kit.fontawesome.com/5c751d65f4.js" crossorigin="anonymous"></script>

</head>

<body>

<div class="container-fluid bg-light">
    
    <div class="container">

      <ul class="nav nav-justified py-2 nav-pills">     

            <li class="nav-item">
              <a class="nav-link active">Complete sus datos</a>
            </li>

    </div>
    
</div>
  

<div class="d-flex justify-content-center text-center">

  <form class="py-5 bg-light" method="post" action="send.php">

    <div class="form-group">
      <label for="nombres">Nombres:</label>

      <div class="input-group">

        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        
         <input type="text" class="form-control" id="nombre" name="nombre">

      </div>
          
    </div>

    <div class="form-group">
      <label for="apellido">Apellidos:</label>

      <div class="input-group">

        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        
         <input type="text" class="form-control" id="apellido" name="apellido">

      </div>
          
    </div>   


    <div class="form-group">
      <label for="email">Correo electrónico:</label>

      <div class="input-group">

        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        
         <input type="email" class="form-control" id="email" name="email">

      </div>
          
    </div>


    <div class="form-group">
      <label for="pwd">Comentarios:</label>

      <div class="input-group">

        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-comments"></i></span>
        </div>

        <textarea name="comentario" id="comentario" rows="4" cols="50"></textarea>

      </div>
    
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

  </form>

</div>

</body>