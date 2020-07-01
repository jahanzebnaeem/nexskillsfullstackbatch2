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
          <div class="page-header clearfix">
              <a href="create.php" class="btn btn-success pull-right">Add New Employee</a>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    // echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. "<br>";
                    echo "<tr>
                      <td>".$row["ID"]."</td>
                      <td>".$row["Name"]."</td>
                      <td>
                        <a href='read.php?id=". $row['ID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                        <a href='update.php?id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                        <a href='delete.php?id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                      </td>
                    </tr> ";
                  }
                } else {
                  echo "0 results";
                }

                mysqli_close($conn);
              ?>
            </tbody>
          </table>
       </div>
        <div class="col-md-2">
        </div>
      </div>
      <?php
      // Include footer
      include "dependent/footer.php";
      ?>
    </div>
