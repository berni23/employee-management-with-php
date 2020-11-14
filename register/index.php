<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login.css?v=<?php echo time(); ?>">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/loginController.js?v=<?php echo time(); ?>"></script>
    <title>Register</title>
</head>
<body>
<form class="form-signin" id="form-register">
  <!--<img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
  <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
  <label for="inputUserName" class="sr-only">Username</label>
  <input name="newUsername" type="text" id="inputUserName" class="form-control" placeholder="Username" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input name="newPassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
</body>
</html>
