<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
  </head>
  <body>
    <!-- <h1 id="mainHeading"><em>Welcome to the class.</em></h1>
    <h2>Welcome to the class.</h2>
    <h3>Welcome to the class.</h3>
    <h4>Welcome to the class.</h4>
    <h5>Welcome to the class.</h5>
    <h6>Welcome to the class.</h6>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label>
    <p>
      The is a paragraph.
    </p>
    <hr>
    <button id="clickMe" type="button">Click Me!</button>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <script src="index.js"></script> -->

    <?php
      // echo "Hello World":
      /*
        echo "Hello World!";
      */
      $firstName = "Usaid";
      $lastName = "Mughal";
      $intVar = 12;
      $decVar = 2.5;
      $boolVar = True;

      echo $firstName." ".$lastName;
    ?>
    <br>
    <?php
      echo strlen($firstName);
      echo "<br />";
      $cars = array("Toyota", "Audi", "Honda");
      echo $cars[0];
      echo "<br />";
      echo sort($cars);
      echo "<br />";
      $classMarks = array("Ali" => 70, "Earej" => 90, "Alishba" => 90);
      echo $classMarks["Alishba"];
      echo "<br />";
      $classMarksMulti = array(
        array("Sharpners", 200, 100),
        array("Pencils", 250, 150),
        array("Pens", 400, 175),
        array("Rubbers", 500, 450)
      );
      echo $classMarksMulti[3][1];
    ?>
  </body>
</html>
