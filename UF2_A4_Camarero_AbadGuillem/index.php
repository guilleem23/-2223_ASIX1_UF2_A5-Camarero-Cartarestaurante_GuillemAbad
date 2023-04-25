<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icon.jpg">
<!-- Utilización de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Font Awesome script -->
    <script src="https://kit.fontawesome.com/8fdbfafaa1.js" crossorigin="anonymous"></script>
    <title>Restaurant Menu</title>
</head>
<style>
    body {
background-image: url('./img/water-34.gif');
background-size: cover;
    }
</style>
<body>
<hr>
<!-- Cabecera -->
<div class="linea-color">
    <p>Bienvenido al restaurante! Esperemos que disfrute de su comida aquí en la playa de las Maldivas!</p>
  </div>
  
<!-- Título -->
    <br><i><h1 class="titulo">🍽️   WILLIAM'S BEACH RESTAURANT    🏖️</h1></i>

    <div class="columna-3 columns">
        <div class="menu-williams">
            <u><h2>PLATOS COMBINADOS🥗</h2></u> 
    <?php
    // platos combinados.xml enlace  

    if (file_exists('./xml/menu.xml')) {
    $platos = simplexml_load_file('./xml/menu.xml');
    foreach ($platos->combinados as $combinados) {
         echo "<strong>" . $combinados['nombre'] . "</strong>";
    echo "Precio: €" . $combinados['precio'] . "<br>🍝<br>";
    echo "<strong>Categoría: " .$combinados['categoria'] ."</strong>";
    echo $combinados['descripcion'] . "<br>🍝<br>";
    echo "Calorías: " . $combinados['calorias'] . "<br>";
    echo "Ingredientes:<br>";
        foreach ($combinados->ingrediente as $ingrediente) {
                        echo "- " . $ingrediente['nombre'] . "<br>";
              }
           echo "<br>";
    }
    } else {
    exit('¡Lo siento, no funcionan nuestros servicios como restaurante!');
     }
            ?>
        </div>
    <div class="menu-williams">
    <u><h2>BOCADILLOS🥪</h2></u>
    <?php

#bocatas.xml enlace

if (file_exists('./xml/menu.xml')) {
    $platos = simplexml_load_file('./xml/menu.xml');
    foreach ($platos->bocatas as $bocatas) {
echo "<strong>" . $bocatas['nombre'] . "</strong>";
echo "Precio: €" . $bocatas['precio'] . "<br>🥖<br>";
echo "<strong>Categoría: " .$bocatas['categoria'] ."</strong>";
echo $bocatas['descripcion'] . "<br>🥖<br>";
echo "Calorías: " . $bocatas['calorias'] . "<br>";
echo "Ingredientes:<br>";
    foreach ($bocatas->ingrediente as $ingrediente) {
            echo "- " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
    }
} else {
    exit('¡Lo siento, no funcionan nuestros servicios como restaurante!');
}
?>
    </div>
    <div class="menu-williams">
    <u><h2>POSTRES🍰</h2></u>
    <?php

#postres.xml enlace

if (file_exists('./xml/menu.xml')) {
$platos = simplexml_load_file('./xml/menu.xml');
foreach ($platos->postres as $postres) {
echo "<strong>" . $postres['nombre'] . "</strong>";
echo "Precio: €" . $postres['precio'] . "<br>🎂<br>";
echo $postres['descripcion'] . "<br>🎂<br>";
echo "Calorías: " . $postres['calorias'] . "<br>";
echo "Ingredientes:<br>";
    foreach ($postres->ingrediente as $ingrediente) {
            echo "- " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
    }
} else {
    exit('¡Lo siento, no funcionan nuestros servicios como restaurante!');
}
?>
    </div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/imagen1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/imagen2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/imagen3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Pie de página final-->
<br>
<div class="linea-color">
    <p>Si tiene alguna duda, no se olvide de preguntarle cualquier cosa al camarero/a, gracias!</p>
  </div>
  <hr>

</body>
</html>