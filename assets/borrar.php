<?php
  include_once 'database.php';
  $id = $_GET['id'];
  $consulta = "DELETE FROM LISTO WHERE ID = '$id'";
  $resul = mysqli_query($conn, $consulta);
?>
<script>window.location.href = "../index.php"</script>