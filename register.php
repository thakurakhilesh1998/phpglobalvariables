<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email_address=$_POST['email'];
$location=$_POST['location'];

if($first_name=="" || $last_name=="" || $email_address=="" || $location=="")
{
    header("location:global.php?error=please%20fill%20all%20details");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-card w3-margin w3-padding">
        <h2>User Profile</h2>
        <h3><?php echo $first_name.' '.$last_name;?></h3>
        <ul>
            <li>Email Address: <?php echo $email_address; ?></li>
            <li>Location: <?php echo $location?></li>
        </ul>
    </div>    
</body>
</html>