<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <title>Scandiweb</title>
    <link rel="stylesheet" href="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100 m-0 p-0">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <form class="container" method="post" action="#">
        <div class="row my-3 p-0 m-0">
            <h2 class="col-6 col-md-8 col-lg-8 col-xl-8">Product List</h2>
            <a class="col-2 col-md-1 btn btn-secondary text-light me-2" href="#" style="text-decoration: none;">Add</a>
            <button class="col-3 col-md-2  btn btn-danger ms-2 " type="submit">Delete</button>
        </div>

        <div class="row gy-3 my-3">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card m-2">
                    <div class="card-header">
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="card-body">

                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
            </div>

        </div>


    </form>
    <footer class="mt-auto d-flex align-items-center justify-content-center bg-dark" style="height: 100px;">
        <p class=" text-light ">all rights</p>
    </footer>
</body>

</html>