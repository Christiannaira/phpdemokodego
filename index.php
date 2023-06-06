<?php

session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
    header('Location: home.php');
}

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
            <h1 class="fw-bold">LOGIN Form</h1>

            <?php

            if (isset($_SESSION['error'])) {
                echo '<div class="alert bg-danger text-white">' . $_SESSION['error'] . '</div>';
            }

            ?>

            <form method="POST" action="action.php">
                <input type="text" class="form-control" name="username" placeholder="username" required>
                <input type="password" class="form-control" name="password" placeholder="password" required>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>