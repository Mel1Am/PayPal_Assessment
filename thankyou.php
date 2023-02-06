<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" height="50px" width="50px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.html">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="height: 80vh;">
        <div class="d-flex align-items-center justify-center"
            style="height: 100%; display: flex;align-items: center; justify-content: center;">
            <div class="thank"
                style="height: 400px; width: 400px;display: flex; align-items: center;justify-content: center;">
                <h1 class="fw-bold">
                    Thank You For Purchasing My Product!
                </h1>
            </div>
            <div>
                <h3>Purchasing ID: </h3>
                <body>
                    <?php
                        echo(rand() . "<br>");
                    ?>
                </body>
                
            </div>
        </div>
    </div>
    <footer class="p-3 mt-4 bg-dark">
        <h5 class="text-center text-white"> &copy; All Rights Reserved. Created and Published by Luis Andres Medina</h5>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.3.min.js"></script>
</body>

</html>