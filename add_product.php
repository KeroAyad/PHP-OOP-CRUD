<?php
include "classes/action.php";

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

$title = "Add Products";
include "header.php";
?>

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
                <input required type="text" name="sku" class="form-control" id="sku" pattern="[A-Za-z0-9]{1,50}" aria-describedby=" emailHelp">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input required type="text" name="name" class="form-control" id="name" pattern="[A-Za-z0-9]{1,50}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input required type="number" name="price" step="0.01" class="form-control" id="price" min="0.01">
            </div>1
            <div class=" mb-3">
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
    <?php include "footer.php"; ?>
    <script src="js/main.js"></script>
</body>

</html>