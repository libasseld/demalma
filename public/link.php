<?php

try {
    $link =$_SERVER['DOCUMENT_ROOT'].'/domains/elitedakar.com/public_html/storage/app/public';
    $target = $_SERVER['DOCUMENT_ROOT'].'/domains/elitedakar.com/public_html/public/storage';
    echo    "Erreur";

symlink($target, $link);        
} catch (\Throwable $th) {
        var_dump($th);
        echo    "Erreur";
}
?>
 