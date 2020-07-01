<?php
  // Include header and classes
  include "dependent/header.php";
  include "dependent/genclasses.php";
  include "dependent/config.php";
  $sql = "SELECT * FROM Categories";
  // $sql = "SELECT Categories.Name CName, Products.Name PName FROM Products INNER JOIN Categories ON Products.CategoryID = Categories.ID WHERE Products.isDeleted != true ";
  $result = mysqli_query($conn, $sql);

?>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <h2>Crate Category</h2>
        <form action="/index.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter category name" name="name">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     </div>
      <div class="col-md-2">
      </div>
    </div>

    <?php
    // Include footer
    include "dependent/footer.php";
    ?>
  </div>
