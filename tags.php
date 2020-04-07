<?php
$title="Tag toevoegen | Art";
$css='
    <!-- Select css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <!-- Contact child-theme -->
    <link rel="stylesheet" type="text/css" href="css/tags.css">
';
include 'resources/head.php';
?>

<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
        <form action="resources/update.php" method="post">
        <div class="row">
            <div class="col-sm-5">

                <select class="selectpicker float-right" data-style="btn-primary" title="Item" name="Item" required>

                      <?php
                        include 'resources/db.php';
                        $sql = "SELECT * FROM items";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id"] . '">' . $row["title"] . '</option>';
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                      ?>
                  </select>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">

                <select class="selectpicker" data-style="btn-danger" title="Tag" name="Tag" required>

                      <?php
                        include 'resources/db.php';
                        $sql = "SELECT * FROM tags";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id"] . '">' . $row["title"] . '</option>';
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                      ?>
                </select>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-4"></div>

                <div class="col-sm-4 text-center">
                    <button class="btn btn-success text-center" type="submit" id="addButton" aria-haspopup="true" aria-expanded="false">
                        Add
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
</div>
</div>

</main>

<?php
$js='
<!-- Select JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>";
';
include 'resources/foot.php';
?>
