<?php

include "classes/action.php";

if (isset($_POST['delete']) && isset($_POST['sku'])) {
    $obj->remove($_POST['sku']);
}



$title = "Product List";
include "header.php";
?>


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
    <?php include "footer.php"; ?>

</body>

</html>