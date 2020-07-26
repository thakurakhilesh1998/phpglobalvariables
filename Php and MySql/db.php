<?php

    $connection=mysqli_connect('localhost','root','','messageapp');
    if(mysqli_connect_errno())
    {
        echo 'error'.mysqli_connect_error();
    }
?>