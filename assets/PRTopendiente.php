<?php
  include_once 'database.php';
  $id = $_GET['id'];
  $consulta = "SELECT * FROM PROCESO WHERE ID = '$id'";
  $resul = mysqli_query($conn, $consulta);
  $row = mysqli_fetch_assoc($resul);
  $descripcion = $row["DESCRIPCION"];
  $consulta = "INSERT INTO PENDIENTE (DESCRIPCION) VALUES ('$descripcion')";
  mysqli_query($conn, $consulta);
  $consulta = "DELETE FROM PROCESO WHERE ID = '$id'";
  mysqli_query($conn, $consulta);
?>
<script>window.location.href = "../index.php"</script>