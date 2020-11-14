$(function(){

    var employeesList;
    
    function getEmployees() {
        var body = new FormData();
        body.append("method", "getEmployees");
        $.ajax({
            type: "POST",
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
    function refreshEmployeesGrid() {
     
        $("#jsGrid").jsGrid({
            width: "100%",
     
            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
     
            data: employeesList,
     
            fields: [
                { name: "name", type: "text", width: 100, validate: "required" },
                { name: "lastName", type: "text", width: 100 },
                { name: "email", type: "text", width: 200 },
                { name: "gender", type: "text", width: 80 },
                { name: "email", type: "text", width: 200 },
                { name: "age", type: "number"},
                { type: "control" }
            ]
        });
    }

    getEmployees()
    
    
})