<?php 
        session_start();
        isset($_SESSION["korisnik"]) ? $user = $_SESSION["korisnik"] : $user = "nema";
        isset($_SESSION["pol"]) ? $pol = $_SESSION["pol"] : $pol = "nedefinisan";
        $pozdrav = "";

                if ($pol == "muski") {
                    $pozdrav = "Dragi";
                } else if ($pol == "zenski") {
                    $pozdrav = "Draga";
                }
                global $pozdrav;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primljena želja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body class="background-img">
    <div class="container-fluid">
        <div class="row div-poruka">
        <h1 class="manji-tekst kurziv">
                <?php 
                echo $pozdrav.' '.$user?>, Deda Mraz je primio tvoju poruku!</h1>
             <h1 class="kurziv mt-3">Tvoj poklon se priprema!</h1>
             <h1 class="kurziv mt-3">XOXOXO</h1>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>