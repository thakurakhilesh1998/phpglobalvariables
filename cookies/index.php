<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-card w3-margin w3-padding">
        <?php
            if(isset($_GET['error'])):?>
                <div class="w3-panel w3-red">
                <p><?php echo $_GET['error'];?></p>
                </div> 
            <?php endif;?>

        <h2>Registration Form</h2>
            <form method="post" action="cookiesphp.php" class='w3-container'>
                <label class="w3-label w3-text-blue">
                First Name
                </label>
                <?php if(isset($_COOKIE['first_name'])){?>
                <input type="text" class="w3-input w3-border" name="first_name" value="<?php echo htmlentities($_COOKIE['first_name']);?>">
                <?php } else {?>
                <input type="text" class="w3-input w3-border" name="first_name">
                <?php }?>
                <br>
                <label class="w3-label w3-text-blue">
                Last Name
                </label>
                <input type="text" class="w3-input w3-border" name="last_name">
                <br>
                <label class="w3-label w3-text-blue">
                Email Address
                </label>
                <input type="text" class="w3-input w3-border" name="email">
                <br>
                <label class="w3-label w3-text-blue">
                Location
                </label>
                <select class="w3-input w3-border" name="location">
                    <option value="Shimla">Shimla</option>
                    <option value="Mandi">Mandi</option>
                    <option value="Kangra">Kangra</option>
                    <option value="Bilaspur">Bilaspur</option>
                    <option value="Hamirpur">Hamirpur</option>
                    <option value="Una">Una</option>
                </select>
                <br>
                <input type="submit" class='w3-submit w3-border'>
            </form>
    </div>
</body>
</html>