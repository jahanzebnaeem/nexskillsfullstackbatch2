<?php
  class Product {
    // public $name;
    // public $price;
    private $name;
    private $price;

    function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    // function __destruct() {
    //   echo "The product is {$this->name} and the price is {$this->price}.";
    // }
    //
    // // function set_name($name) {
    //   $this->name = $name;
    // }

    function get_name() {
      return $this->name;
    }

    // function set_price($price) {
    //   $this->price = $price;
    // }

    function get_price() {
      return $this->price;
    }

    function heThere() {
      echo "I am from product class";
    }
  }

  class Shoes extends Product {
    public $category;

    function message() {
      echo "Sports shoes";
    }
  }

  // Constant
  class Goodbye {
    const LEAVING_MESSAGE = "Thank you for attending the class.";
  }

  // Abstract Example
  abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }

  class Toyota extends Car {
    public function intro() : string {
      return "This is a car for life";
    }
  }

  class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
?>
