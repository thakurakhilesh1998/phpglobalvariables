<?php
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email_address=$_POST['email'];
    $location=$_POST['location'];

    if($first_name==''|| $last_name==''|| $email_address==''|| $location=='')
    {
        header('location:index.php?error=please%20fill%20%all%20details');
    }

    $cookie_first_name='first_name';
    $cookie_last_name='last_name';
    $cookie_email='email_address';
    $cookie_location='location';
    setcookie($cookie_first_name,$first_name,time()+12000);
    setcookie($cookie_last_name,$last_name,time()+12000);
    setcookie($cookie_email,$email_address,time()+12000);
    setcookie($cookie_location,$location,time()+12000);
    header('location:index.php');

?>