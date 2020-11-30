$(function() {
    $("#form-login").submit(function(e) {
        if ($(e.target).attr("id") == "registerButton") {
            e.preventDefault();
        } else {
            e.preventDefault()
            var form = e.currentTarget;
            var body = new FormData();
            body.append("method", "login")
            body.append("username", form.username.value)
            body.append("password", form.password.value)
            $.ajax({
                type: "POST",
                url: "src/library/loginController.php",
                data: body,
                processData: false,
                contentType: false
            }).then((data) => {
                console.log(data)
                if (data == "valid") {
                    window.open("src/dashboard.php", "_self")
                } else if(data == "This user was not found.") {
                    $("#validationServerUserNameFeedback").remove()
                    $("#inputUserName").removeClass("is-valid").addClass("is-invalid").after(`<div id="validationServerUserNameFeedback" class="invalid-feedback">
                    ${data}
                  </div>`)
                } else if(data == "Password is wrong.") {
                    $("#validationServerPasswordFeedback").remove()
                    $("#validationServerUserNameFeedback").remove()
                    $("#inputUserName").removeClass("is-invalid").addClass("is-valid")
                    $("#inputPassword").removeClass("is-valid").addClass("is-invalid").after(`<div id="validationServerPasswordFeedback" class="invalid-feedback">
                    ${data}
                  </div>`)
                }
            })
            return false;
        }
    })
    $("#form-register").submit(function(e) {
        e.preventDefault()
        var form = e.currentTarget;
        var body = new FormData();
        body.append("method", "register")
        body.append("newUsername", form.newUsername.value)
        body.append("newPassword", form.newPassword.value)
        body.append("newEmail", form.newEmail.value)
        $.ajax({
            type: "POST",
            url: "../src/library/loginController.php",
            data: body,
            processData: false,
            contentType: false
        }).then((data) => {
            //data = JSON.parse(data)
            if (data == "User is already registered.") {
                //alerta
                $("#validationServerUserNameFeedback").remove()
                    $("#inputUserName").removeClass("is-valid").addClass("is-invalid").after(`<div id="validationServerUserNameFeedback" class="invalid-feedback">
                    ${data}
                  </div>`)
            } else if (data == "Email is already registered.") {
                //alerta
                $("#validationServerUserNameFeedback").remove()
                $("#inputUserName").removeClass("is-invalid").addClass("is-valid")
                $("#inputEmail").removeClass("is-valid").addClass("is-invalid").after(`<div id="validationServerEmailFeedback" class="invalid-feedback">
                ${data}
              </div>`)
            } else if (data == "User Successfully Registered.") {
                //alerta
                $("#validationServerUserNameFeedback").remove()
                $("#validationServerEmailFeedback").remove()
                $("#inputUserName").removeClass("is-invalid").addClass("is-valid")
                $("#inputEmail").removeClass("is-invalid").addClass("is-valid")
                window.open("../src/dashboard.php", "_self")
            }
            console.log(data)
        })
        return false;
    })
    
})