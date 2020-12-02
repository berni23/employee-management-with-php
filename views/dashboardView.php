<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--node modules -->

    <script src="<?php echo BASE_URL ?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo BASE_URL ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.min.js"></script>

    <link rel="stylesheet" href="<?php echo BASE_URL ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/node_modules/jsgrid/dist/jsgrid-theme.min.css" />


    <!-- css local stylesheets-->

    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/utils.css">

    <!-- js local scripts -->

    <script defer src="<?php echo BASE_URL ?>/assets/js/dashboard.js"></script>
    <script defer src="<?php echo BASE_URL ?>/assets/js/utils.js"></script>

    <title>Dashboard</title>
</head>

<body>

    <div class="info-window hide"></div>
    <?php require_once  "views/headerView.php"; ?>
    <main class="container" data-path=<?php echo BASE_URL ?>>
        <div class="jsGrid" id='grid_table'></div>
    </main>
    <div id="msgWrapper"></div>
    <?php require_once "views/footerView.php"; ?>
</body>

</html>