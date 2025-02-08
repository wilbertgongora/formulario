<?php
include  'CONEXION.PHP';

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $nombre = $data["nombre"];
    $apellido = $data["apellido"];
    $gmail = $data["gmail"];
    $consulta = $data["consulta"];
    $mensaje = $data["mensaje"];

    $sql = "INSERT INTO FORMULARIO (Nombre, Apellido, gmail, consulta, mensaje) 
            VALUES ('$nombre', '$apellido', '$gmail', '$consulta', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["mensaje" => "Datos guardados correctamente"]);
    } else {
        echo json_encode(["error" => $conn->error]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
          input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            border: 2px solid #18e767;
            border-radius: 5px; 
            box-sizing: border-box;
        }

        
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px; 
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

   
    <form action="#" method="POST">
        <h2>FORMULARIO CONTACTO</h2> 

      <br> <div> <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required></div> </br>

      <br> <div> <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" required></div> <br>

  <br> <div><label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required> </div> </br>

    <br><div><label for="Consulta">Tipo de Consulta:</label></div></br>
   
  <br> <div><input type="radio" id="Tipo de consulta" name="Tipo de consulta" required>Consulta General </div> </br>

   <br><input type="radio" name="consulta" value="consulta"> Solicitud de soporte </br>

 <br> <div>  <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="6" required></textarea></div></br>

    <br><input type="radio" name="consulta" value="consulta"> 
    Autorizo para ser contactado por el equipo  </br>

    <br><div><button type="submit">Enviar</button></div></br>
    
    
  <div class="autor">
    Formulario de contacto @2025</a>. 
    Desarrollado por <a href="#">WILBERT GONGORA
    </a>.
  </div>
</body>

</html>