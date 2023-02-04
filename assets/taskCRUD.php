<?php
  function Nuevo($descripcion)
  {
    $conn = new mysqli('localhost', 'root', '', 'kanban','3306');
    $consulta = "INSERT INTO PENDIENTE (DESCRIPCION) VALUES ('$descripcion')";
    mysqli_query($conn, $consulta);
  }
?>