<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post method sample</title>
  </head>
  <body>
    <?php
      if (isset($_POST["name"])) {
        echo "<p>Hi, ".$_POST["name"]."</p>";
      }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <label for="inputName">Name:</label>
      <input type="text" name="name" id="inputName">
      <input type="submit" value="submit">
    </form>
  </body>
</html>
