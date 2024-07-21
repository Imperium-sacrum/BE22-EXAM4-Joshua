<?php
require_once "db_connect.php";
require_once "file_upload.php";
$error = false;
$errormstitel = $errormsName = $errormsDescription = "";

if (isset($_POST["create"])) {
    $titel = $_POST["titel"];
    $img = fileUpload($_FILES["img"]);
    $ISBN = $_POST["ISBN"];
    $description = $_POST["description"];
    $type = $_POST["type"];
    $autorfn = $_POST["autorfn"];
    $autorln = $_POST["autorln"];
    $publisher = $_POST["Publisher"];
    $publisher_address = $_POST["address"];
    $publisher_date = $_POST["date"];

    if (empty($titel)) {
        $errormstitel =  "<div class='alert alert-danger' role='alert'>
                you can not leave Titel empty!
            </div>";
        $error = true;
    }
    if (empty($autorfn && $autorln)) {
        $errormsName = "<div class='alert alert-danger' role='alert'>
                you can not leave the Autor FirstName and LastName empty!
            </div>";
        $error = true;
    }
    if (empty($description)) {
        $errormsDescription = "<div class='alert alert-danger' role='alert'>
               you can not leave the description empty!
            </div>";
        $error = true;
    }

    if (!$error) {
        $sql = "INSERT INTO `book_cd_dvd`(`titel`, `img`, `ISBN_code`, `short_decription`, `type`, `autor_first_name`, `autor_last_name`, `publisher_name`, `publisher_address`, `publisher_date`) VALUES ('$titel','{$img["0"]}','$ISBN','$description','$type','$autorfn','$autorln','$publisher','$publisher_address','$publisher_date')";

        if (mysqli_query($connect, $sql)) {
            echo "<div class='alert alert-success' role='alert'>
               New record has been created, {$img["1"]}
             </div>";
            header("refresh: 3; url= index.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>
               error found, {$img["1"]}
             </div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
                        <a class="nav-link active" aria-current="page">Contact</a>
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
    <div class="container mt-5">
        <h2>Create a new Book, CD or DVD</h2>
        <!-- formular to create a new dishes and send to database -->
        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3 mt-3">
                <!-- input for the Titel -->
                <label for="titel" class="form-label">Titel:</label>
                <input type="text" class="form-control" id="titel" aria-describedby="titel" name="titel">
                <p><?= $errormstitel ?></p>
            </div>

            <div class="mb-3 mt-3">
                <!-- input for the type -->
                <label for="type" class="form-label">Type:</label>
                <br>
                <!-- <input type="text" class="form-control" id="type" aria-describedby="type" name="type"> -->
                <input type="radio" id="book" name="type" value="Book">
                <label for="book">Book</label><br>
                <input type="radio" id="css" name="type" value="CD">
                <label for="css">CD</label><br>
                <input type="radio" id="dvd" name="type" value="DVD">
                <label for="dvd">DVD</label>
            </div>

            <div class="mb-3">
                <!-- input for the FirstName and LastName -->
                <label for="autorfn" class="form-label">Autor FirstName:</label>
                <input type="text" step="0.1" class="form-control" id="autorfn" aria-describedby="autorfn" name="autorfn">
                <p><?= $errormsName ?></p>
                <label for="autorln" class="form-label">Autor LastName:</label>
                <input type="text" step="0.1" class="form-control" id="autorln" aria-describedby="autorln" name="autorln">
                <p><?= $errormsName ?></p>
            </div>

            <div class="mb-3">
                <!-- input for the images -->
                <label for="img" class="form-label">picture:</label>
                <input type="file" class="form-control" id="img" aria-describedby="img" name="img">
            </div>

            <div class="mb-3 mt-3">
                <!-- input for the Publisher -->
                <label for="Publisher" class="form-label">Publisher:</label>
                <input type="text" class="form-control" id="Publisher" aria-describedby="Publisher" name="Publisher">
            </div>

            <div class="mb-3 mt-3">
                <!-- input for the Publisher address -->
                <label for="address" class="form-label">Publisher Address:</label>
                <input type="text" class="form-control" id="address" aria-describedby="address" name="address">
            </div>

            <div class="mb-3 mt-3">
                <!-- input for the Publisher address -->
                <label for="date" class="form-label">Publish Date:</label>
                <input type="text" class="form-control" id="date" aria-describedby="date" name="date">
            </div>

            <div class="mb-3 mt-3">
                <!-- ISBN -->
                <label for="ISBN" class="form-label">ISBN:</label>
                <input type="number" class="form-control" id="ISBN" aria-describedby="ISBN" name="ISBN">
            </div>

            <div class="mb-3">
                <!-- input for the Description -->
                <label for="Descrition" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="picture" aria-describedby="description" name="description"></textarea>
                <p><?= $errormsDescription ?></p>
            </div>

            <button name="create" type="submit" class="btn btn-primary">Create</button>
            <a href="index.php" class="btn btn-warning">Back to home page</a>
        </form>
    </div>
</body>

</html>