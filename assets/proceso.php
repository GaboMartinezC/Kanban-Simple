<?php
  include_once 'database.php';
  $id = $_GET['id'];
  $consulta = "SELECT * FROM PENDIENTE WHERE ID = '$id'";
  $resul = mysqli_query($conn, $consulta);
  $row = mysqli_fetch_assoc($resul);
  $descripcion = $row["DESCRIPCION"];
  $consulta = "INSERT INTO PROCESO (DESCRIPCION) VALUES ('$descripcion')";
  mysqli_query($conn, $consulta);
  $consulta = "DELETE FROM PENDIENTE WHERE ID = '$id'";
  mysqli_query($conn, $consulta);
?>
<script>window.location.href = "../index.php"</script>