<?php
  require('lib/print.php')
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB1 - JavaScript</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>


    <ol>
      <?php
        print_list();
       ?>
    </ol>

    <h2>Create your contents</h2>
    <form class="" action="update-process.php" method="post">
      <p><input type="hidden" name="old_title" value="<?=$_GET['id'] ?>"></p>
      <p><input type="text" name="title" value=""></p>
      <p><textarea name="description" rows="8" cols="80"></textarea></p>
      <p><input type="submit" ></p>
    </form>
  </body>
</html>
