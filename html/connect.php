<?php

    $connect = mysqli_connect('localhost','root','tracking_number');
    if (mysqli_connect_error($connect)){
        echo 'Failed to connect';
    }

?>