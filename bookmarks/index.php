<?php
$bookmarks="mybookmarks";
  session_start();
  if(isset($_POST['web_name']) && isset($_POST['url']))
  {
    if(isset($_SESSION[$bookmarks]))
    {
      $_SESSION[$bookmarks][$_POST['web_name']]=$_POST['url'];
    }
    else
    {
      $_SESSION[$bookmarks]=Array($_POST['web_name']=>$_POST['url']);
    }
  }

  if(isset($_GET['action']) && $_GET['action']=='delete')
  {
    unset($_SESSION[$bookmarks][$_GET['name']]);
    header('location:index.php');
  }

  if(isset($_GET['msg']) && $_GET['msg']=="clearall")
  {
    unset($_SESSION[$bookmarks]);
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <style>
      .maincontainer{
        margin-top:2rem;

      }

      .delete
      {
        color:red;
      }
     </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bookmarker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?msg=clearall">Clear All <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container-fluid maincontainer">
        <div class="row">
            <div class="col-md-7 first" >
                <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                    <div class="form-group">
                        <label for="websitename">Website Name</label>
                        <input id="websitename" class="form-control" type="text" name="web_name">
                    </div>

                    <div class="form-group">
                        <label for="websiteurl">Website Url</label>
                        <input id="my-input" class="form-control" type="text" name="url">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-5 second">

            <?php if(isset($_SESSION[$bookmarks])):?>
              <ul class="list-group">
                <?php foreach ($_SESSION[$bookmarks] as $name=>$url):?>
                <li class="list-group-item">
                  <a href="<?php echo $url; ?>" target="_blank"><?php echo $name; ?></a>
                  <a href="index.php?action=delete&name=<?php echo $name;?>" class="delete">[X]</a>
                </li>
                <?php endforeach; ?>
              </ul>
                <?php endif;?>
            </div>
        </div>
     </div>
    </div>
</body>
</html>