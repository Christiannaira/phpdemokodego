<?php

session_start();

if ($_SESSION['isLoggedIn'] != true) {
    $_SESSION['error'] = "Unauthorized Access!";
    header('Location: index.php');
}

echo 'This is a home page';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="container m-5 p-5">
        <div class="border rounded p-5 my-3">
            <h1 class="fw-bold">HOME</h1>
            <h3>You have logged in</h3>
            <a href="logout.php" class="btn btn-secondary">Logout</a>


        </div>
    </div>
</body>

</html>