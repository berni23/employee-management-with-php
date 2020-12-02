<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .error404 {

            background-image: url('<?php echo BASE_URL ?>/assets/img/error404.jpg');
            background-size: contain;
            background-attachment: fixed;
            background-repeat: no-repeat
        }

        .error500 {
            background-image: url('<?php echo BASE_URL ?>/assets/img/error500.png');
            background-size: contain;
            background-attachment: fixed;
            background-repeat: no-repeat
        }
    </style>

</head>

<body class=<?php echo $error ?>>

</body>

</html>