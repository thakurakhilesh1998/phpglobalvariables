<?php
    include('db.php');

    function redirect()
    {
        header('location:index.php?error=please%20fill%20all%20details');
    }

    if(!empty($_POST['textmsg']) && !empty($_POST['username']))
    {
        $useranme=mysqli_real_escape_string($connection,$_POST['username']);
        $text=mysqli_real_escape_string($connection,$_POST['textmsg']);

        $query="Insert Into messageapp(username,testmsg) VALUES('$useranme','$text')";
        if(!mysqli_query($connection,$query))
        {
            die(mysqli_error($connection));
        }
        else
        {
            header("location:index.php?success=message%20saved%20successfully");
        }
    }
    else
    {
        redirect();
    }

   
?>