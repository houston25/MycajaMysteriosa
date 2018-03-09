<?php
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$procedencia=$_POST['procedencia'];
$enterar=$_POST['enterar'];
$cuanto=$_POST['cuanto'];
$recibir=$_POST['recibir'];
$mensual=$_POST['mensual'];
$anual=$_POST['anual'];
$meses=$_POST['meses'];
$incluir=$_POST['incluir'];
$opciones=" ";
$cantidad=$_POST['cantidad'];
$recomendar=$_POST['recomendar'];
$boletin=$_POST['boletin'];
$link= mysqli_connect('localhost','cajam160_admin','Mystery_31','cajam160_mysterybox');

if($_POST[opciones]!="")
{
    if(is_array($_POST['opciones']))
    {
        while(list($key,$value)=each($_POST['opciones']))
        {
            $opciones .= $value." ";
        }
    }
}

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query="insert into encuesta values(NULL,'".$edad."','".$sexo."','".$correo."','".$procedencia."','".$enterar."','".$cuanto."','".$recibir."','".$mensual."','".$anual."','".$meses."','".$incluir."','".$opciones."','".$cantidad."','".$recomendar."','".$boletin."')";
$resul=mysqli_query($link,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.ico">

    <title>Mystery Box</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

    
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#" id="Titulo"><img src="images/logo.png" width="80">ystery<span class="shadow">Box</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="precios.html">Precios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cajas</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Comun</a>
                        <a class="dropdown-item" href="#">Rara</a>
                        <a class="dropdown-item" href="#">Epica</a>
                        <a class="dropdown-item" href="#">Legendaria</a>
                        <a class="dropdown-item" href="#">Edici&oacute;n Especial</a>
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Como Funciona</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Gracias por tu apoyo</h1>
            <br><center><img src="images/gracias.jpg" class="img-fluid"></center>
        </div>

    </main>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>