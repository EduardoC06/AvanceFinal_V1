<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Agregar Productos</title>
</head>

<body>
  <h2>Productos</h2>

  <div class="contenedor-floatval rom">
    <form class="col-4 p-3" method='POST' enctype="multipart/form-data">

    <?php 
    include "php/conexion.php";
    include "php/agregarP.php";
    ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
        <input type="text" class="form-control" name="NombreP">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio del producto</label>
        <input type="text" class="form-control" name="PrecioP">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="ImagenP">
      </div>
      <button type="submit" class="btn btn-primary" name="btnAgregarPr">Agregar</button>
    </form>
  </div>
  <div class="col-8 p-4">
    <table class="table">
      <thead class="bg-info">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">Precio</th>
          <th scope="col">URL IMAGEN</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include "php/conexion.php";
          $sql = "select * from Productos";
          $result = $conexion->query($sql);
                  
          //$sql = "INSERT INTO formulario_contacto (id, nombreP, precioP, imageURL) VALUES ('', '')";
          while($datos = $result->fetch_object()) { ?>
        <tr>
          <td><?=$datos->id?></td>
          <td><?=$datos->nombre?></td>
          <td><?=$datos->precio?></td>
          <td><?=$datos->imagen_url?></td>
        </tr>
        <td>
          <a href="#" class="btn btn-small btn-warning">Editar</a>
          <a href="#" class="btn btn-small btn-danger">Borrar</a>
        </td>
        <?php }

                ?>
      </tbody>
    </table>
  </div>
  <style>
    body {
      background-color: #f8f9fa;
    }

    h2 {
      color: #343a40;
    }

    .contenedor-floatval {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .form-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>