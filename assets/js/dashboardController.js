$(function() {

    var employeesList;

    function getEmployees() {
        var body = new FormData();
        //body.append("method", "getEmployees");
        $.ajax({
            type: "GET",
            url: "library/employeeController.php",
            data: body,
            processData: false,
            contentType: false
        }).then((data) => {
            console.log(data);
            data = JSON.parse(data)
            employeesList = data;
            refreshEmployeesGrid();
        })
    }

    function getEmployee(id) {
        var body = new FormData();
        body.append("id", id);
        $.ajax({
            type: "GET",
            url: "library/employeeController.php",
            data: body,
            processData: false,
            contentType: false
        }).then((data) => {
            console.log(data);
            data = JSON.parse(data)
                //employeesList = data;
                //refreshEmployeesGrid();
        })
    }

    function refreshEmployeesGrid() {

        $("#jsGrid").jsGrid({
            width: "100%",

            inserting: true,
            editing: false,
            sorting: true,
            paging: true,

            rowClick: function(item, i, e) {
                window.open("employee.php?id=" + item["item"]["id"], "_self")
            },

            data: employeesList,

            controller: {
                loadData: function(filter) {
                    $.ajax({
                        type: "GET",
                        url: "library/employeeController.php",
                        data: filter
                    }).then((data) => {
                        console.log(data)
                    });
                },
                insertItem: function(item) {
                    $.ajax({
                        type: "POST",
                        url: "library/employeeController.php",
                        data: item
                    }).then((data) => {
                        console.log(data)
                        getEmployees()
                        $("#msgWrapper").empty().append(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p id="msg">Employee Successfully Created.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`)
                    });
                },
                updateItem: function(item) {
                    $.ajax({
                        type: "PUT",
                        url: "library/employeeController.php",
                        data: item
                    }).then((data) => {
                        console.log(data)
                    });
                },
                deleteItem: function(item) {
                    $.ajax({
                        type: "DELETE",
                        url: "library/employeeController.php",
                        data: item
                    }).then((data) => {
                        console.log(data)
                        $("#msgWrapper").empty().append(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p id="msg">Employee Successfully Removed.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`)
                    });
                }
            },

            fields: [
                { name: "name", type: "text", width: 100, validate: "required" },
                { name: "lastName", type: "text", width: 100 },
                { name: "email", type: "text", width: 200 },
                { name: "gender", type: "text", width: 80 },
                { name: "age", type: "number" },
                { type: "control", editButton: false }
            ]
        });
    }

    function load() {
        getEmployees()
    }

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

    load()
    $("ul.navbar-nav").children().first().addClass("active")
    $("#registerButton").click((e) => {
        e.preventDefault();
        console.log("llego")
        var body = new FormData()
        body.append("registerUser", "true")
        window.location.href = "../register"
        return false;
    })
})