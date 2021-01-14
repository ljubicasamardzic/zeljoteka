<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deda Mrazova Evidencija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc2794d205.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>

<body class="background-img">
    <div class="container-fluid px-5 mx-5">
        <div class="row mt-5">
            <div class="col-8 px-0">
                <h1 class="glavni-naslov kurziv mb-3 natpis-zelje">Primljene poruke</h1>
                <table style="border: 1px solid black;" class="table table-responsive table-div">
                    <thead>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Grad</th>
                        <th>Želja</th>
                        <th>Završi</th>
                    </thead>
                    <?php

                    require('./zelje_folder.php');

                    foreach ($files as $file) {
                        $file_string = file_get_contents($dir . "/" . $file);
                        $file_object = json_decode($file_string);
                        $ime = $file_object->ime;
                        $prezime = $file_object->prezime;
                        $grad = $file_object->grad;
                        $zelja = $file_object->zelja;
                        $id = $file_object->id;
                        
                        // Dodato je dugme na čiji pritisak se zadatak označava kao zavšen, u ovom slučaju tako što se briše fajl

                        echo "<tbody><tr><td>$ime</td><td>$prezime</td><td>$grad</td><td>$zelja</td><td><form action='oznaci_zavrseno.php' method='post'><button class=\"btn btn-lg btn-success\" name='id' value=$id><i class=\"fas fa-check\"></i></button></form></td><tr></tbody>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>