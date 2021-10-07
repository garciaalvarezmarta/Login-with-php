<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_principal.css">
    <title>Document</title>


</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }


    include("api/getTasksByUser.php");
    $tasks = $result->fetch_all();
    ?>
    <div class="container">
        <div class="label">
            <h3 class="titleCard">to Do</h3>
            <div id="toDo">
                <?php
                foreach ($tasks as $row) {
                    if ($row[3] == 0) {
                ?><div class="new-label">
                            <form action="api/updateTask.php" method="POST">
                                <input type="hidden" name="campo" value="<?php echo $row[3] ?>">
                                <input type="hidden" name="id" value="<?php echo $row[0] ?>">
                                <input type="text" name="text" class="new-input" value="<?php echo $row[1]; ?>">
                                <button type="submit" class="btn btn-action">Guardar</button>
                                <a href="api/updateCampo.php?id=<?php echo $row[0] ?>&campo=<?php echo $row[3] ?>">
                                    <input type="button" value="Pasar" class="btn btn-action">
                                </a>
                                <a href="api/deleteTask.php?id=<?php echo $row[0] ?>">
                                    <input type="button" value="Eliminar" class="btn btn-action">
                                </a>
                            </form>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
            <div class="btn-container">
                <button class="btn" onClick="addTask('toDo')">New</button>
            </div>
        </div>
        <div class="label">
            <h3 class="titleCard">Doing</h3>
            <div id="doing">
                <?php
                foreach ($tasks as $row) {
                    if ($row[3] == 1) {
                ?><div class="new-label">
                            <form action="api/updateTask.php" method="POST">
                                <input type="hidden" name="campo" value="<?php echo $row[3] ?>">
                                <input type="hidden" name="id" value="<?php echo $row[0] ?>">
                                <input type="text" name="text" class="new-input" value="<?php echo $row[1]; ?>">
                                <button type="submit" class="btn btn-action">Guardar</button>
                                <a href="api/updateCampo.php?id=<?php echo $row[0] ?>&campo=<?php echo $row[3] ?>">
                                    <input type="button" value="Atrás" class="btn btn-action">
                                </a>
                                <a href="api/deleteTask.php?id=<?php echo $row[0] ?>">
                                    <input type="button" value="Eliminar" class="btn btn-action">
                                </a>
                            </form>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
            <div class="btn-container">
                <button class="btn" onClick="addTask('doing')">New</button>
            </div>
        </div>

        <div>
            <a href="api/logOut.php">
                <input type="button" value="Cerrar sesión" class="btn btn-action">
        </div>
    </div>


    <script>
        function addTask(id) {

            document.getElementById(id).innerHTML += `
            
                <div class="new-label">
                    <form action="api/save_task.php" method="POST">
                        <input type="hidden" name="campo" value=${id}>
                        <input type="text" name="text" class="new-input"> 
                        <button type="submit" class="btn btn-action">Guardar</button>
                    </form>
                </div>

            `;

        }
    </script>
</body>

</html>