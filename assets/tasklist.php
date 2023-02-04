<?php
  function Pendiente()
  {
    $conn = new mysqli('localhost', 'root', '', 'kanban','3306');
    $consulta = "SELECT * FROM PENDIENTE";
    $objRetVal = mysqli_query($conn, $consulta);
    return $objRetVal;  
  }
  function Proceso()
  { 
    $conn = new mysqli('localhost', 'root', '', 'kanban','3306');
    $consulta = "SELECT * FROM PROCESO";
    $objRetVal = mysqli_query($conn, $consulta);
    return $objRetVal;  
  }
  function Listo()
  { 
    $conn = new mysqli('localhost', 'root', '', 'kanban','3306');
    $consulta = "SELECT * FROM LISTO";
    $objRetVal = mysqli_query($conn, $consulta);
    return $objRetVal;  
  }
?>