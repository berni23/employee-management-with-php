<!DOCTYPE html>
<html lang="en">

<head>

    <script src="<?php echo BASE_URL ?>/node_modules/jquery/dist/jquery.min.js"> </script>
    <script src="<?php echo BASE_URL ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/main.css">

    <!-- js local scripts -->

    <script defer src="<?php echo BASE_URL ?>/assets/js/employee.js"></script>
    <script defer src="<?php echo BASE_URL ?>/assets/js/utils.js"></script>

    <title>Employee</title>
</head>

<body>
    <?php require_once  "views/headerView.php"; ?>
    <div class="container">
        <div id="avatar"></div>
        <form id="updateEmployeeForm">
            <div class="form-row" id="imageWrapper">
            </div>
            <input type="text" class="hide" id="profileImgInput" name="profileImg">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" value=<?php echo $employee['name'] ?> name="name" class="form-control" id="inputName">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLName">Last name</label>
                    <input type="text" name="lname" value=<?php echo $employee['lastName'] ?> class="form-control" id="inputLName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email address</label>
                    <input type="email" name="email" value=<?php echo $employee['email'] ?> class="form-control" id="inputEmail">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputGender">Gender</label>
                    <select name="gender" id="inputGender" class="form-control">
                        <option selected>Choose...</option>
                        <?php

                        if ($employee['gender'] == 'M') echo ' <option selected value="M">M</option> <option value="F">F</option> ';
                        else  echo ' <option selected value="M">M</option><option  selected value="F">F</option>';
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="city" value=<?php echo $employee['city'] ?> class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Street address</label>
                    <input type="text" name="address" value=<?php echo $employee['streetAddress'] ?> class="form-control" id="inputAddress">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" name="state" value=<?php echo $employee['state'] ?> class="form-control" id="inputState">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="number" name="age" value=<?php echo $employee['age'] ?> class="form-control" id="inputAge">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPC">Postal code</label>
                    <input type="number" name="pc" value=<?php echo $employee['postalCode'] ?> class="form-control" id="inputPC">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone number</label>
                    <input type="number" name="phone" class="form-control" value=<?php echo $employee['phoneNumber'] ?> id="inputPhone">
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
    <?php require_once   "views/footerView.php"; ?>

</body>

</html>