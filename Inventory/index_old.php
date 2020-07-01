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

  // greeting::welcome();

  // Procedural DB Connection
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  // $conn = mysqli_connect($servername, $username, $password);
  //
  // // Check connection
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // }
  // echo "Connected successfully";
  // mysqli_close($conn);

  // Select Data
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "nexskillfullstackb2php";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // $sql = "SELECT * FROM Products";
  $sql = "SELECT Categories.Name CName, Products.Name PName FROM Products INNER JOIN Categories ON Products.CategoryID = Categories.ID WHERE Products.isDeleted != true ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      // echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. "<br>";
      echo "Category Name: " . $row["CName"]. " - Product Name: " . $row["PName"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);

  // OOP DB Connection
  // $servername = "localhost";
  // $username = "root";
  // $password = "";
  //
  // // Create connection
  // $conn = new mysqli($servername, $username, $password);
  //
  // // Check connection
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }
  // echo "Connected successfully with OOP";
  // $conn->close();

  include "dependent/footer.php";
?>
