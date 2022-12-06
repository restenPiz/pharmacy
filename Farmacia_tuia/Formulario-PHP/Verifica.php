<?php
    
    if(!$_SESSION['Usuario']){

        header('Location: Index.php');
        exit();

    }

?>