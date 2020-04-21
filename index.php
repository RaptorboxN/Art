<?php
$title="Art";
$css="";
include 'resources/head.php';
?>

<div class="CouroselPage">
    <div class="CouroselMain">
<!--        banner aan de boven kant-->
        <div id="carouselExampleIndicators" class="carousel slide align-content-center" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner align-content-center">
<!--                --><?php
//                include 'resources/db.php';
//                $sql = "SELECT img
//                        FROM items";
//                $result = $conn->query($sql);
//
//                if ($result->num_rows > 0) {
//                    // output data of each row
//                    while($row = $result->fetch_assoc()) {
//                        echo '<div class="carousel-item">
//                                    <img class="d-block carouselItemImg" src="images/Art' . $row["img"] . '.jpg">
//                                </div>
//                            ';
//                    }
//                } else {
//                    echo "0 results";
//                }
//                $conn->close();
//                ?>
                <div class="carousel-item active">
                    <img class="d-block carouselItemImg" src="images/Art4.jpg" >
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/Art2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/Art3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
<!--        einde van de banner-->
<!--        begin van de inhoud van de pagina-->
        <hr>

            <?php
            include 'resources/db.php';
            $sql = "SELECT img, description
                    FROM items
                    GROUP BY img";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="row">
                            <div class="col-3">
                                <img class="card-img-top" src="images/Art' . $row["img"] . '.jpg" alt="Card image cap">
                            </div>
                            <div class="col-9 carouselInfo">
                                <p>' . $row["description"] . '</p>
                            </div>  
                        </div>
                        <hr>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>


        <hr>

        <div class="row">
            <?php
                include 'resources/db.php';
                $sql = "SELECT I.title, I.description, I.img, T.color, T.title as tag FROM items I
                        JOIN tags T ON T.id = I.tag";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" src="images/Art' . $row["img"] . '.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">' . $row["title"] . '</h5>
                                <p class="card-text">' . $row["description"] . '</p>
                                <span class="badge badge-' . $row["color"] . '">' . $row["tag"] . '</span>
                              </div>
                            </div>
                        </div>';
                }
                } else {
                echo "0 results";
                }
                $conn->close();
              ?>

        </div>
    </div><!-- .CouroselMain -->
</div><!-- .CouroselPage -->

<?php
$js='';
include 'resources/foot.php';
?>
