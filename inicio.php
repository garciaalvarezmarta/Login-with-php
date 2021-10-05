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
        include("api/getTasksByUser.php");

        while($row = $result->fetch_row()){
            printf ("%s (%s)\n", $row[0],$row[1]);
        }


       /* while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
            printf("ID: %s  Nombre: %s", $row[0], $row[1]);  
        }*/
            
        //printf("%s (%s)\n", $row[i], $row[i+1]);
        
    ?>
    <div class="container">
        <div class="label">
            <h3 class="titleCard">to Do</h3> 
            <div id="toDo">
                
            </div>
            <div class="btn-container">
                <button class="btn" onClick="addTask('toDo')">New</button>
            </div> 
        </div>
        <div class="label">
            <h3 class="titleCard">Doing</h3> 
            <div id="doing">
            </div>
            <div class="btn-container">
                <button class="btn" onClick="addTask('doing')">New</button>
            </div> 
        </div>
    </div>


    <script>
        function addTask(id){
            
            document.getElementById(id).innerHTML += `
            
                <div class="new-label">
                    <form action="api/save_task.php" method="POST">
                        <input type="hidden" name="campo" value=${id}>
                        <input type="text" name="text" class="new-input"> 
                        <button type="submit" class="btn btn-action">Enviar</button>
                    </form>
                </div>

            `;
            
        }
        
     </script>
</body>
</html>