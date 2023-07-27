<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    
    <link rel="shortcut icon" class="imagem-redonda" href="./imagens/matematica.jpg" type="image/x-icon">
   
    <title>Tabuada</title>

</head>

<div class="gradiente-rosa-claro">

<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index:999;">
    <a class="navbar-brand" href="#"> Matématica </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit"> Pessquisar </button>
    </form>
    </div>
    <br><br>
</nav>

<body>


      <br><br><br><br><br><center>
<div class="alert alert-light" role="alert">
<span class="texto01">  📐 Tabuada básica 📐 </span>
  </div> </center>

<div style= "top: 250px; left:240px; position: absolute;" >   


  <div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card h-100">
   
      <div class="card-body">
        <h5 class="card-title"> <center> 📌 Tabuada 02 📌 </center> </h5>
        <p class="card-text">
   
<?php 

$N = 2;

for ($x = 0; $x <=10; $x++) {

    $resultado = $N * $x;

    echo "$N X $x = $resultado <br> ";
}

?>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"> Laço de repetição for </small>
      </div>
    </div>
    
  </div>

  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"> <center>  📌 Tabuada 03 📌 </center>  </h5>
        <p class="card-text">


<?php 
$x = 0;
$N = 3;

while($x  <=10) {


    $resultado = $N * $x;

    echo "$N X $x = $resultado  <br>";

    $x++;
}
?>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Laço de repetição while</small>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><center> 📌 Tabuada 04 📌 </center> </h5>
        <p class="card-text"><?php 

$N = 4;

for ($x = 0; $x <=10; $x++) {

    $resultado = $N * $x;

    echo "$N X $x = $resultado <br> ";
}

?>

<span class="texto02"> This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than  </span>
 <br>   </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Laço de repetição for </small>
      </div>
    </div>
</div>

</div>

<div style= "top: 500px; left:1px; position: absolute;" >   


  <div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card h-100">
   
      <div class="card-body">
        <h5 class="card-title"> <center> 📌 Tabuada 05 📌  </center> </h5>
        <p class="card-text">
   
<?php 

$N = 5;

for ($x = 0; $x <=10; $x++) {

    $resultado = $N * $x;

    echo "$N X $x = $resultado <br> ";
}

?>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"> Laço de repetição for </small>
      </div>
    </div>
    
  </div>

  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"> <center> 📌  Tabuada 06  📌 </center>  </h5>
        <p class="card-text">


<?php 
$x = 0;
$N = 6;

while($x  <=10) {


    $resultado = $N * $x;

    echo "$N X $x = $resultado  <br>";

    $x++;
}
?>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Laço de repetição while</small>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><center> 📌 Tabuada 07 📌 </center> </h5>
        <p class="card-text"><?php 

$N = 7;

for ($x = 0; $x <=10; $x++) {

    $resultado = $N * $x;

    echo "$N X $x = $resultado <br> ";
}

?>

<span class="texto02"> This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than  </span>
 <br>   </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Laço de repetição for </small>
      </div>
    </div>
</div>

</div>

<div style= "top: 500px; left:1px; position: absolute;" >   


  <div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card h-100">
   
      <div class="card-body">
        <h5 class="card-title"> <center>📌 Tabuada 08 📌 </center> </h5>
        <p class="card-text">
   
<?php 

$N = 8;

for ($x = 0; $x <=10; $x++) {

    $resultado = $N * $x;

    echo "$N X $x = $resultado <br> ";
}

?>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"> Laço de repetição for </small>
      </div>
    </div>
    
  </div>

  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"> <center> 📌 Tabuada 09  📌</center>  </h5>
        <p class="card-text">


<?php 
$x = 0;
$N = 9;

while($x  <=10) {


    $resultado = $N * $x;

    echo "$N X $x = $resultado  <br>";

    $x++;
}
?>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Laço de repetição while</small>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><center>  📌 Tabuada 10 📌 </center> </h5>
        <p class="card-text"><?php 

$N = 10;

for ($x = 0; $x <=10; $x++) {

    $resultado = $N * $x;

    echo "$N X $x = $resultado <br> ";
}

?>

<span class="texto02"> This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than  </span>
 <br>   </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Laço de repetição for </small>
      </div>
    </div>
</div>

</div>

</body>
</html>