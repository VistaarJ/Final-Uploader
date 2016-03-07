 <!DOCTYPE html>

<?php session_start(); ?>

<head>
</head>
<body>

 <form action="upload.php" method="post" enctype="multipart/form-data">
      <h2>Upload your files here!  </h2> 
    
        <input type="file" placeholder="Your file" name="myfile">
      <br><br>
        
    <input type="submit"  name="Upload it!"> 

  </form><!-- form -->
  </body>
 </html>