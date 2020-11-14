<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php

session_start();
if (!isset($_SESSION["userName"]) && !isset($_SESSION["uid"]) && !isset($_SESSION["email"])) {
    header("Location: ..");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css?v=<?php echo time(); ?>">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--    <script src="../assets/js/loginController.js"></script> -->
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Employees Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employee.php">Employee</a>
                </li>
            </ul>
            <form method="post" action="library/loginController.php">
                <button type="submit" class="btn btn-primary">Logout</button>
                <input type="text" value="logout" name="method" class="hidden">
            </form>
        </div>
    </nav>
</body>

</html>