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

            rowDoubleClick: function(item, i, e) {
                //console.log(item["item"])
                window.open("employee.php?id=" + item["item"]["id"], "_self")
                    /* $.ajax({
                         type: "GET",
                         url: "library/employeeController.php?id="+item["item"]["id"],
                         data: "body",
                         processData: false,
                         contentType: false
                     }).then((data)=>{
                         console.log(data)
                     });*/
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
                    });
                }
            },

            fields: [
                { name: "name", type: "text", width: 100, validate: "required" },
                { name: "lastName", type: "text", width: 100 },
                { name: "email", type: "text", width: 200 },
                { name: "gender", type: "text", width: 80 },
                { name: "age", type: "number" },
                { type: "control" }
            ]
        });
    }

    function load() {
        getEmployees()
    }


    load()
})