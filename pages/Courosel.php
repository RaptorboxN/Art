<?php
include '../head.php';
include '../nav.php';
?>

<link rel="stylesheet" type="text/css" href="../CSS/couroselStyle.css">

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
                <div class="carousel-item active">
                    <img class="d-block carouselItemImg" src="../IMG/Art4.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="../IMG/Art2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="../IMG/Art3.jpg" alt="Third slide">
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
        <div class="row carouselInfo">
            <div class="col-3">
                <img class="imgStyle" src="../IMG/Art4.jpg">
            </div>
            <div class="col-9">
                <p>
                    Alteration literature to or an sympathize mr imprudence.
                    Of is ferrars subject as enjoyed or tedious cottage.
                    Procuring as in resembled by in agreeable.
                    Next long no gave mr eyes.
                    Admiration advantages no he celebrated so pianoforte unreserved.
                    Not its herself forming charmed amiable.
                    Him why feebly expect future now.
                </p>
            </div>

        </div>
        <hr>

        <div class="row">
            <?php
                include 'db.php';
                $sql = "SELECT * FROM items";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" src="../img/art2.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">' . $row["title"] . '</h5>
                                <p class="card-text">' . $row["description"] . '</p>
                                <span class="badge badge-danger">' . $row["tag"] . '</span>
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
    </div>


</div>



posotion absolute
right 0
bottom 0
left 0


