<?php
  include "dependent/header.php";
  include "dependent/genclasses.php";

  // $shoes = new Product("Nike", 10000);
  // $shirt = new Product("Outbreak", 3000);

  // $shoes->name = "Nike";
  // $shoes->price = 10000;
  // $shirt->name = "Outbreak";
  // $shirt->price = 3000;
  // $shoes->set_name("Nike");
  // $shirt->set_name("Outbreak");

  // echo "The name of this shoe is ".$shoes->name." and it's price is ".$shoes->price."<br />";
  // echo $shirt->name;
  // echo $shoes->get_name();
  // echo "<br />".$shirt->get_name();

  // $shoes = new Shoes("Nike", 10000);
  //
  // echo $shoes->get_name()."<br />";
  // $shoes->message()."<br />";
  // $shoes->heThere();

  // echo Goodbye::LEAVING_MESSAGE;

  // $toyota = new Toyota("Toyota");
  // echo $toyota->intro();

  greeting::welcome();
  include "dependent/footer.php";
?>
