<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captura de Datos</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="dive">
        <center>
    <h1>Captura de Datos Personales</h1>
    <hr>
    <h2>Ingresa los datos que se te piden</h2>
    <hr>
    <p>Mi Primera Encuesta</p>
    <hr>
    <form action="resultados.php" method="post">
      <label for="Name">Nombre</label>
          <input type="text" id="Name" name="Name" placeholder="Ingresa tu nombre" />
          <hr>
          <label for="Age">Edad</label>
          <input type="number" id="Age" name="Age" />
          <hr>
          <label for="City">Ciudad</label>
          <input type="text" id="City" name="City" placeholder="Ingresa tu Ciudad" />
          <hr>
          <label for="Hobby">Pasatiempo</label>
          <input type="text" id="Hobby" name="Hobby" placeholder="Ingresa tu Pasatiempo" />
          <hr>
          <button type="submit">¡Ingresamos Datos!</button>
          <hr>
    </form>
    </center>

  </div>
</body>
</html>