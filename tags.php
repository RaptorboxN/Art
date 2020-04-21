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
    <div class="container">

        <hr>

        <form action="resources/aanmaken.php" method="post">
            <div class="row">
                <div class="col text-center"><h2>Tag aanmaken:</h2></div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-4">

                    <input type="text" class="form-control" id="Title" name="Title" placeholder="Tag titel">

                </div>

                <div class="col-sm-1 text-center">
                    <button class="btn btn-success text-center" type="submit" id="addButton" aria-haspopup="true" aria-expanded="false">
                        Toevoegen
                    </button>
                </div>
            </div>
        </form>

        <hr>

        <form action="resources/toewijzen.php" method="post">
            <div class="row">
                <div class="col text-center"><h2>Tag toewijzen:</h2></div>
            </div>
            <div class="row">
                <div class="col-sm-5">

                    <select class="selectpicker float-right" title="Item" name="Item" required>

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

                <div class="col-sm-5 offset-2">

                    <select class="selectpicker" title="Tag" name="Tag" required>

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
                    <button class="btn btn-success text-center" type="submit" id="toewijsButton" aria-haspopup="true" aria-expanded="false">
                        Toevoegen
                    </button>
                </div>
            </div>
        </form>

        <hr>

        <form action="resources/verwijderen.php" method="post">
            <div class="row">
                <div class="col text-center"><h2 style="color: red;">Tag verwijderen:</h2></div>
            </div>
            <div class="row">

                <div class="col-sm-3 offset-4">

                    <select class="selectpicker" title="Tag" name="Verwijder" required>

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

                <div class="col-sm-1">

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                        Verwijderen
                    </button>
                </div>

                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Weet u zeker dat u deze tag wilt verwijderen?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Controleer of de tag niet meer is toegewezen aan een project, of dat de tag nog nodig is voor een project.</p>
                        <p><b>Dit kan niet ontdaan worden gemaakt!</b></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Niet verwijderen</button>
                        <button class="btn btn-danger text-center" type="submit" id="deleteButton" aria-haspopup="true" aria-expanded="false">
                            Verwijderen
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </form>

        <hr>

    </div>
</main>

<?php
$js='
<!-- Select JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>";
';
include 'resources/foot.php';
?>
