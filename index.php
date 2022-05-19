<?php

include "action.php";

if (isset($_POST['delete']) && isset($_POST['sku'])) {
    $obj->remove($_POST['sku']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <title>List Products</title>
    <link rel="stylesheet" href="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100 m-0 p-0">



    <form class="container p-0" method="post" action="index.php">
        <div class="row my-3 pb-3 m-0 border-bottom">
            <div class="col-5 col-sm-6 col-lg-7 pt-2 pt-md-0 ">
                <h2>Product List</h2>
            </div>
            <div class="col  px-0 py-1 me-3 d-flex justify-content-end">
                <a class=" btn btn-secondary me-3" role="button" href="add_product.php">ADD</a>
                <!-- <button class=" btn btn-secondary me-3" onclick="window.location.href='add_product.php'">ADD</button> -->
                <button class=" btn btn-danger" name="delete" type="submit">
                    MASS DELETE
                </button>
            </div>
        </div>

        <div class="row gy-3 my-3 m-sm-3">
            <?php
            $myRow = $obj->show();
            foreach ($myRow as $row) {
            ?>
                <!--mx-auto col-8 col-sm-6 col-md-6 col-lg-3 mx-sm-3-->
                <div class=" col-8 col-sm-5 col-md-5 col-lg-3 mx-auto mx-sm-3">
                    <div class="shadow card my-2 ms-2">
                        <div class="card-header">
                            <div class="form-check m-0">
                                <input class="form-check-input delete-checkbox" type="checkbox" name="sku[]" value="<?= $row["sku"] ?>" id="flexCheckDefault">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text"><?= $row["sku"] ?></p>
                            <p class="card-text"><?= $row["name"] ?></p>
                            <p class="card-text"><?= $row["price"] ?></p>
                            <p class="card-text"><?= $row["attribute"] ?></p>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>
        </div>



    </form>
    <footer class="mt-auto container d-flex align-items-center justify-content-center border-top" style="height: 100px;">
        <p class=" ">Scandiweb</p>
    </footer>
</body>

</html>