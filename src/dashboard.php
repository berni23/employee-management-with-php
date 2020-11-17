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
    <link type="text/css" rel="stylesheet" href="../node_modules/jsgrid/dist/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="../node_modules/jsgrid/dist/jsgrid-theme.min.css" />
    <script type="text/javascript" src="../node_modules/jsgrid/dist/jsgrid.min.js"></script>
    <script src="../assets/js/dashboardController.js?v=<?php echo time(); ?>"></script>
    <title>Dashboard</title>
</head>

<body>
    <?php include "../assets/header.html";?>
    <main class="container">
        <div id="jsGrid"></div>
    </main>
    <div id="msgWrapper"></div>
    <?php include "../assets/footer.html"; ?>

</body>

</html>