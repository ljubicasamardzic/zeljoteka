<?php 
    $dir = "./zelje_db";
    $result = scandir($dir);
    $files = array_diff($result, array(".", ".."));        
?>