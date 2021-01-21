<?php
// Preko sesije se šalje ime osobe i pol, kako bi se poruka personalizovala u zelja_poslata.php
// Za muški pol, poruka će počinjati sa "dragi", za ženski sa "draga" i uz to ime osobe

    session_start();
    
    require('./zelje_folder.php');

    if ($_POST) {
       $ime = $_POST["ime"];
       $prezime = $_POST["prezime"];
       isset($_POST["grad"]) ? $grad = $_POST["grad"] : $grad = "";
       $zelja = $_POST["zelja"];
       isset($_POST["provjera"]) ? $provjeraDobrote = $_POST["provjera"] : $provjeraDobrote = "ne";
       isset($_POST["pol"]) ? $pol = $_POST["pol"] : $pol = "nedefinisano";
       $_SESSION["korisnik"] = $ime;
       $_SESSION["pol"] = $pol;
    }
      
    if ((!preg_match("/^[\p{L} ]+$/u", $ime)) || (!preg_match("/^[\p{L} ]+$/u", $prezime)) || $grad == "" || $provjeraDobrote == "ne" || $zelja == "" || $pol == "nedefinisano") {
        header("location: ./index.php?msg=error");
    } else {
        if (!file_exists("./zelje_db")) {
             mkdir("./zelje_db");
        }
        global $ime, $prezime, $grad, $zelja;
        $fileId = uniqid();

        $txt_array = ["ime" => $ime, "prezime" => $prezime, "grad" => $grad, "zelja" => $zelja, "id" => $fileId];
        $txt_json = json_encode($txt_array);

        $newFile = fopen("./zelje_db/".$fileId.".txt", "w");
        fwrite($newFile, $txt_json);

        header("location: ./zelja_poslata.php");
    }
