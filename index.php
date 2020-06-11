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

    <!-- <?php
      // echo "Hello World":
      /*
        echo "Hello World!";
      */
      // $firstName = "Usaid";
      // $lastName = "Mughal";
      // $intVar = 12;
      // $decVar = 2.5;
      // $boolVar = True;
      //
      // echo $firstName." ".$lastName;
    ?>
    <br> -->
    <!-- <h1>Love Calculator</h1>
    <label for="yourName">Enter your name</label>
    <input type="text" name="yourName" value="">
    <br>
    <label for="yourName">Enter your beloved's name</label>
    <input type="text" name="thereName" value="">
    <button type="submit" name="calculate">Calculate</button> -->
    <?php
      // echo strlen($firstName);
      // echo "<br />";
      // echo str_word_count($firstName);
      // echo "<br />";
      // echo strrev($firstName);
      // echo "<br />";
      // echo pi();
      // echo "<br />";
      // echo(min(0, 150, 30, 20, -8, -200));
      // echo "<br />";
      // echo(max(0, 150, 30, 20, -8, -200));
      // echo "<br />";
      // echo sqrt(36);
      // echo "<br />";
      // echo round(5.65); // 6
      // echo "<br />";
      // echo floor(5.65); // 5
      // echo "<br />";
      // $lovePercentage = rand(1, 100);
      // echo $lovePercentage."%";
      // echo "<br />";
      // if ($lovePercentage >=90)
      // {
      //   echo "You are made for each other";
      // } elseif ($lovePercentage < 90 && $lovePercentage >= 70) {
      //   echo "You are compatable";
      // } else {
      //   echo "You both are total opposite";
      // }
      // echo "<br />";
      // $cars = array("Toyota", "Audi", "Honda");
      // echo $cars[0];
      // echo "<br />";
      // echo sort($cars);
      // echo "<br />";
      $classMarks = array("Ali" => 70, "Earej" => 90, "Alishba" => 90);
      // echo $classMarks["Alishba"];
      // echo "<br />";
      // $classMarksMulti = array(
      //   array("Sharpners", 200, 100),
      //   array("Pencils", 250, 150),
      //   array("Pens", 400, 175),
      //   array("Rubbers", 500, 450)
      // );
      // echo $classMarksMulti[3][1];
      // define("GREETING", "Welcome to W3Schools.com!", True);
      // echo GREETING;
      // $accessVal = 7;
      // // echo $accessVal;
      // // echo "<br />";
      // function testRunner()
      // {
      //   // echo "inner";
      //   // $accessVal = 8;
      //   echo $GLOBALS['accessVal'];
      // }
      // echo "<br />";
      // echo $accessVal;
      //
      // testRunner();
      // $a = 0;
      // while ($a < count($cars)) {
      //   echo $cars[$a]."<br />";
      //   $a++;
      // }
      // foreach ($cars as $car) {
      //   echo $car."<br />";
      // }
      // foreach ($classMarks as $key => $val) {
      //   echo $key." obtained ".$val."<br />";
      // }
      $favcolor = "blue";

      switch ($favcolor) {
        case "red":
          echo "Your favorite color is red!";
          break;
        case "blue":
          echo "Your favorite color is blue!";
          break;
        case "green":
          echo "Your favorite color is green!";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }
      
    ?>
  </body>
</html>
