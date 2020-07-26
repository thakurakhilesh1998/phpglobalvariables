<?php
    include('db.php');
?>
<?php
if(isset($_GET['error']))
{
    $error=$_GET['error'];
}
?>
<?php
    $query="Select * from messageapp order by timeanddate DESC";
    $msg=mysqli_query($connection,$query);
?>
<?php
if(isset($_GET['success']))
{
    $success=$_GET['success'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message App</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h2>Message App</h2>
            <?php if(isset($error)):?>
                <div class="alert" style="color: red; text-align:center"><?php echo $error;?></div>
            <?php endif;?>
            <?php if(isset($success)):?>
                <div style="color: green; text-align:center"><?php echo $success;?></div>
            <?php endif;?>
        </header>

        <main class="main">
            <form id="form" method="post" action="process.php">
                <input type="text" placeholder="message text" name="textmsg">
                <input type="text" placeholder="username" name="username">
                <input type="submit" value="Submit">
            </form>
            
            <ul class="msglist">
              <?php 
              while($row=mysqli_fetch_assoc($msg)):
              ?>
              <li><?php echo $row['testmsg']?>.By:<?php echo $row['username']?>.Sent on<?php echo $row['timeanddate']?></li>
              <?php endwhile; ?>
            </ul>
        </main>

        <footer>
            MessageApp &copy; 2020
        </footer>
    </div>
</body>
</html>