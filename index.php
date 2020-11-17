<!-- TODO Application entry point. Login view -->
<?php
session_start();
if (isset($_SESSION["userName"]) && isset($_SESSION["uid"]) && isset($_SESSION["email"])) {
    header("Location: src/dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/loginController.js"></script>
    <title>Login - Foo</title>
</head>

<body>
    <form class="form-signin" id="form-login">
        <!--<img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputUserName" class="sr-only">Username</label>
        <input name="username" type="text" id="inputUserName" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3">
            <label>
                <input name="remember" type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="mb-3">
            <button class="btn" type="button" id="registerButton">Not Registered?</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <input type="text" value="login" name="method" class="hidden">
    </form>

</body>

</html>