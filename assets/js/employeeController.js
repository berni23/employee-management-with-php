$(function() {
    var id;

    function getEmployee() {
        var url_string = window.location.href; //window.location.href
        var url = new URL(url_string);
        var c = url.searchParams.get("id");
        console.log(c);
        $.ajax({
            type: "GET",
            url: "library/employeeController.php?id=" + c,
            data: "body",
            processData: false,
            contentType: false
        }).then((data) => {
            data = JSON.parse(data)
            console.log(data)
            var inputName = $("#inputName")
            var inputLName = $("#inputLName")
            var inputEmail = $("#inputEmail")
            var inputGender = $("#inputGender")
            var inputCity = $("#inputCity")
            var inputAddress = $("#inputAddress")
            var inputState = $("#inputState")
            var inputAge = $("#inputAge")
            var inputPC = $("#inputPC")
            var inputPhone = $("#inputPhone")
            id = data["id"];
            inputName.val(data["name"]);
            inputLName.val(data["lastName"]);
            inputEmail.val(data["email"]);
            inputGender.val(data["gender"]);
            inputCity.val(data["city"]);
            inputAddress.val(data["streetAddress"]);
            inputState.val(data["state"]);
            inputAge.val(data["age"]);
            inputPC.val(data["postalCode"]);
            inputPhone.val(data["phoneNumber"]);


        });
    }
    getEmployee();
    $("#updateEmployeeForm").on("submit", (e) => {
        e.preventDefault()
        console.log("banana")

        var body = new FormData(e.currentTarget);
        body.append("id", id);
        body.append("method", "updateEmployee")
        $.ajax({
            type: "POST",
            url: "library/employeeController.php",
            data: body,
            processData: false,
            contentType: false
        }).then((data) => {
            console.log(data)
            $("#msgWrapper").empty().append(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p id="msg">Employee Successfully Saved.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`)


        });
    })
    document.getElementById("return").addEventListener("click", (e) => {
        console.log("something")
        e.preventDefault();
        e.stopPropagation();
        window.open("dashboard.php", "_self");
    })
    function getCountSession() {
        let time;
        setInterval (()=> {
            if(time <= 600 || time == undefined) {
                $.ajax({
                    type: "GET",
                    url: "library/sessionHelper.php?method=getTimeLogged",
                    processData: false,
                    contentType: false
                }).then((data) => {
                    time = data;
                    console.log(time);
                })
            } else if(time > 600) {
                $.ajax({
                    type: "GET",
                    url: "library/sessionHelper.php?method=closeSession",
                    processData: false,
                    contentType: false
                }).then((data) => {
                    console.log(data);
                    window.location.reload();
                    return
                })
            }
            
        }, 1000)
    }
    getCountSession();
    $("ul.navbar-nav").children().last().addClass("active")
})