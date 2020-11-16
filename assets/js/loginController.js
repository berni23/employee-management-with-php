$(function() {
    $("#form-login").submit(function(e) {
        console.log(e.target, e.currentTarget)
        if ($(e.target).attr("id") == "registerButton") {
            e.preventDefault();
        } else {
            e.preventDefault()
            var form = e.currentTarget;
            var body = new FormData();
            body.append("method", "login")
            body.append("username", form.username.value)
            body.append("password", form.password.value)
            body.append("remember", form.remember.value)
            $.ajax({
                type: "POST",
                url: "src/library/loginController.php",
                data: body,
                processData: false,
                contentType: false
            }).then((data) => {
                data = JSON.parse(data)
                if (data["valid"] == "true") {
                    window.location.href = data["url"]
                        //console.log(data["wd"])
                }
                console.log(data)
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
        $.ajax({
            type: "POST",
            url: "../model/users/users.php",
            data: body,
            processData: false,
            contentType: false
        }).then((data) => {
            data = JSON.parse(data)
            if (data["valid"] == "true") {
                window.location.href = data["url"]
            }
            console.log(data)
        })
        return false;
    })
    $("#registerButton").click((e) => {
        e.preventDefault();
        console.log("llego")
        var body = new FormData()
        body.append("registerUser", "true")
        window.location.href = "register"
        return false;
    })
})