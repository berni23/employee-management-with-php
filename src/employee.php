<!-- TODO Employee view -->
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
    <script src="../assets/js/employeeController.js"></script>
    <title>Employee</title>
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
                    <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Employee</a>
                </li>
            </ul>
            <form method="post" action="library/loginController.php">
                <button type="submit" class="btn btn-primary">Logout</button>
                <input type="text" value="logout" name="method" class="hidden">
            </form>
        </div>
    </nav>
    <div class="container">
        <form id="updateEmployeeForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="name" class="form-control" id="inputName">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLName">Last name</label>
                    <input type="text" name="lname" class="form-control" id="inputLName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email address</label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputGender">Gender</label>
                    <select name="gender" id="inputGender" class="form-control">
                        <option selected>Choose...</option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Street address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" name="state" class="form-control" id="inputState">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="number" name="age" class="form-control" id="inputAge">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPC">Postal code</label>
                    <input type="number" name="pc" class="form-control" id="inputPC">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone number</label>
                    <input type="number" name="phone" class="form-control" id="inputPhone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="submitEmployee">Submit</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-secondary" id="return">Return</button>
                </div>
            </div>

        </form>
    </div>
    <div id="msgWrapper"></div>
</body>

</html>