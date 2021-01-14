<?php 
    session_start();

    require('./zelje_folder.php');
    if ($_POST) {
        $id = $_POST['id'];
    }

    $handle = opendir($dir);

    while ($file = readdir($handle)) {
        var_dump($file);
        if($file==$id.'.txt') {
            unlink($dir.'/'.$file);
            header("location: ./sve_zelje.php");
        }
    }
    closedir($handle);
?>