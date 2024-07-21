<!-- php script -->
<?php
// all imports
require_once  "db_connect.php";
// require_once "file_upload.php";
// all imports ends
$Pub = $_GET['p'];
// querry to bring the date of the database
$sql2 = "SELECT * FROM book_cd_dvd where publisher_name LIKE '$Pub'";

$result = mysqli_query($connect, $sql2);
// var_dump($result);
$layout = "";
// if to know if no data was found within the database
if (mysqli_num_rows($result) == 0) {
    $layout .= "<p> No results found</p>";
} else {
    # fetching data to ASOCIATIVE ARRAY
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
// foreach to choose what data we want to show in the browser
foreach ($rows as $key => $row) {
    $layout .= "<div class='container p-2 d-flex justify-content-center'>
    <div class='card border-success border-2' style='width: 18rem;'>
  <img src='images/{$row["img"]}' class='card-img-top imgCard' alt='...'>
  <div class='card-body border' >
    <h5 class='card-title text-center'>{$row["titel"]}</h5>
    <p>publisher: <a class='link-offset-1' href='publisher.php?p={$row["publisher_name"]}'>{$row["publisher_name"]}</a></p>
    <div class=''>
    <a href='details.php?v={$row["id"]}' class='btn btn-dark d-flex justify-content-center my-2'>details</a>
    <a href='edit.php?={$row["id"]}' class='btn btn-warning d-flex justify-content-center my-2'>edit</a>
    </div>
  </div>
</div>
</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-dark">
    <!-- main Navbar for the main page -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="create.php" aria-current="page">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" aria-current="page">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->

    <!-- banner -->
    <img src="./images/book.jpg" class="imgBanner" alt="...">
    <!-- banner ends -->
    <div class="d-flex justify-content-center">
        <h1 class="text-white bg-dark p-2">Book, CD and DVD Publish by <?= $row["publisher_name"] ?></h1>
    </div>
    <!-- books,CDs and DVDs -->
    <div class="row row-cols-5">
        <?= $layout ?>
    </div>

    <div class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #000000">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="index.php" class="text-white">About us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="index.php" class="text-white">Library</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="index.php" class="text-white">Awards</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="index.php" class="text-white">Help</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="index.php" class="text-white">Contact</a>
                            </h6>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                distinctio earum repellat quaerat voluptatibus placeat nam,
                                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                                aliquam sequi voluptate quas.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2024 Copyright:
                <a class="text-white">Rauchwerger</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>