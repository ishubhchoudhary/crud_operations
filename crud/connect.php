<?php
    $con = new mysqli('localhost', 'root', '' , 'crud');

    if($con) {
        //  echo "connection successfull";
        //die(mysqli_error($con));
    }
    else {
        die(mysqli_error($con));
    };
?>

