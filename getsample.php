<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get method sample</title>
  </head>
  <body>
    <?php
      if (isset($_GET["name"])) {
        echo "<p>Hi, ".$_GET["name"]."</p>";
      }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="inputName">Name:</label>
      <input type="text" name="name" id="inputName">
      <input type="submit" value="submit">
    </form>
  </body>
</html>
