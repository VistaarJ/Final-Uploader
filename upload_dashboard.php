<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="icon" type="image/png" href="images/favicon-32x32.png">

      <title>File Uploader</title>

    <script src="bootstrap/css/jquery.min.js"></script>
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/css/holder.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/dashboard.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Dynamic File Uploader</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#"> Hi <?php echo $_SESSION["email"];?></a></li>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" id="menu">
            <li><a href="handleupload.php">Display Files</a></li>
            <li class="active"><a href="#">Upload Files</a></li>
            <li><a href="delete.php">Delete Files</a></li>
            <li><a href="share.php">Share Files</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <form action="upload.php" method="post" enctype="multipart/form-data">
      <h2>Upload your files here!</h2>
      

    


        <input type="file" placeholder="Your file" name="myfile">
 


      <input type="submit"  name="Upload it!">
    </form>

      </div>
    </div>


  </body>
</html>
