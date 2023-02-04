<!DOCTYPE html>
<?php
    include_once 'assets/tasklist.php';
    $pend = Pendiente();
    $proc = Proceso();
    $lst = Listo();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css" integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="icon/png" href="assets/6124995.png">
    <title>Kanban</title>
  </head>
  <body><br>
    <div class = "container box"><h1 class = "title">Kanban basico para gestion de proyectos 2023</h1>
        <form action = "index.php" method = "post">
            <input type="hidden" name="formulario">
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-info" type="text" name = "nuevo" placeholder="Nueva tarea">
                    <span class="icon is-left">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                </p>
                <button class="button is-info is-outlined">
                    <span class="icon is-left">
                      <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class = "container content has-text-centered">
        <div class = "columns">
            <div class = "column box">
                <h1 class = "subtitle is-4">Pendiente</h1>
                <?php
                    while ($row = mysqli_fetch_assoc($pend)){?>
                        <tr>
                            <div class = "box">
                                <td><?php echo $row["DESCRIPCION"];?></td><br>
                                <a href="assets/proceso.php?id=<?php echo $row["ID"]?>" class="button is-info is-outlined">
                                    <span class="icon">
                                        <i class="fa  fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                        </tr>
                <?php } ?>
            </div><br>
            <div class = "column box">
                <h1 class = "subtitle is-4">En proceso</h1>
                <?php
                    while ($row = mysqli_fetch_assoc($proc)){?>
                        <tr>
                            <div class = "box">
                                <td><?php echo $row["DESCRIPCION"];?></td><br>
                                <a href="assets/PRTopendiente.php?id=<?php echo $row["ID"]?>" class="button is-info is-outlined">
                                    <span class="icon">
                                        <i class="fa  fa-chevron-left"></i>
                                    </span>
                                </a>
                                <a href="assets/listo.php?id=<?php echo $row["ID"]?>" class="button is-info is-outlined">
                                    <span class="icon">
                                        <i class="fa  fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                        </tr>
                <?php } ?>
            </div><br>
            <div class = "column box">
                <h1 class = "subtitle is-4">Listo</h1>
                <?php
                    while ($row = mysqli_fetch_assoc($lst)){?>
                        <tr>
                            <div class = "box">
                                <td><?php echo $row["DESCRIPCION"];?></td><br>
                                <a href="assets/pendiente.php?id=<?php echo $row["ID"]?>" class="button is-info is-outlined">
                                    <span class="icon">
                                        <i class="fa  fa-chevron-left"></i>
                                    </span>
                                </a>
                                <a href="assets/borrar.php?id=<?php echo $row["ID"]?>" class="button is-info is-outlined">
                                    <span class="icon">
                                        <i class="fa  fa-trash"></i>
                                    </span>
                                </a>
                            </div>
                        </tr>
                <?php } ?>
            </div><br>
        </div>
    </div>
    <hr>
    <p align = "center">
        <img align = "center" src = "https://media.tenor.com/S61VCO73mOAAAAAC/linux-tux.gif" width = "400" height = "220"/>
    </p><hr>
  </body>
</html>
<?php
    if (isset($_POST['formulario']))
    {
        include_once 'assets/taskCRUD.php';
        if (!empty($_POST['nuevo']))
        {
            $descripcion = $_POST['nuevo'];
            Nuevo($descripcion);
        }
    }
?>