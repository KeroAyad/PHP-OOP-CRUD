<?php
include "action.php";

if (isset($_POST["submit"])) {
    // print_r($_POST);
    $obj->add($_POST);
}
// if (isset($_GET["msg"])) {
//     $msg = $_GET["msg"];
//     echo "
//         <div class='container col-11 col-md-9 col-xl-8 my-3 alert alert-danger alert-dismissible fade show' role='alert'>

//          $msg
//         <!--<a href='index.php'>Go home</a>-->
//         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//       </div>";
// }
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
    <title>Add Product</title>
    <link rel="stylesheet" href="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100 m-0 p-0">



    <form class="container p-0" id="product_form" method="post" action="add_product.php">
        <div class="row my-3 pb-3 m-0 border-bottom">
            <h2 class="col-6 col-lg-7">Add Product</h2>

            <div class="col  px-0 py-1 me-3 d-flex justify-content-end">
                <button class=" btn btn-secondary me-3" type="submit" name="submit">
                    Save
                </button>
                <a class=" btn btn-danger" role="button" href="index.php">Cancel</a>

            </div>
        </div>

        <div class="shadow mx-3 mx-md-auto mb-3 p-3 col-md-8 col-lg-6 border rounded-3 ">
            <div class="mb-3">
                <label for="sku" class="form-label">SKU</label>
                <input required type="text" name="sku" class="form-control" id="sku" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input required type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input required type="number" name="price" step="0.01" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Product Type</label>
                <div id="help" class="form-text">Select the type of product to add.</div>
                <select id="productType" required name="type" onchange="formFunction(this.value)" class="form-select">

                    <option value="" disabled selected hidden>Please Choose...</option>
                    <option id="DVD" value="DVD">DVD</option>
                    <option id="Book" value="Book">Book</option>
                    <option id="Furniture" value="Furniture">Furniture</option>
                </select>

            </div>
            <div id="type" class="mb-3">

            </div>
        </div>


    </form>
    <footer class="mt-auto container d-flex align-items-center justify-content-center border-top" style="height: 100px;">
        <p class=" ">Scandiweb</p>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>