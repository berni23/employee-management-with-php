//* grid object -> defines the features of jsGrid Object. for more information :  https://www.npmjs.com/package/gridjs


const BASE_URL = $("main").attr('data-path');
var gridObject = {
    width: "100%",
    height: "400px",
    filtering: true,
    inserting: true,
    deleting: true,
    editing: true,
    sorting: true,
    paging: true,
    autoload: true,
    pageSize: 5,
    pageButtonCount: 5,
    deleteConfirm: "Do you really want to delete data?",

    controller: {
        // Dowload data from employee.json and populate jsGrid
        loadData: function () {
            return fetch(BASE_URL + "/dashboard/getAllEmployees").then(res => res.text()).then(function (res) {
                //console.log('jeeeelou', res);
                return JSON.parse(res);
            });
        },

        // function to insert new data
        insertItem: function (item) {
            console.log('hola');
            console.log(item);
            return fetch(BASE_URL + "/dashboard/insertEmployees", {
                method: 'POST',
                body: JSON.stringify(item)
            }).then(res => res.text()).then(function (res) {
                console.log(res);
                load();
            });
        },

        // // function to update data
        updateItem: function (item) {
            return fetch("library/employeeController.php", {
                method: 'PUT',
                body: JSON.stringify(item)
            }).then(res => res.text()).then(res => load())
        },

        // function to delete data
        deleteItem: function (item) {
            return fetch(BASE_URL + "/dashboard/deleteEmployees", {
                method: 'DELETE',
                body: JSON.stringify(item)
            }).then(res => res.text()).then(function (res) {
                console.log(res);
                load();
            })
        }
    },

    // Array with name of fields and his validations
    fields: [{
            name: "id",
            type: "hidden",
            css: 'hide'
        },
        {
            name: "name",
            type: "text",
            width: 40,
            validate: "required"
        },
        {
            name: "email",
            type: "text",
            width: 70,
            validate: function validateEmail(email) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase())

            }
        },
        {
            name: "age",
            type: "text",
            width: 30,
            validate: function (value) {
                if (value > 0) {
                    return true;
                }
            }
        },
        {
            name: "streetAddress",
            type: "text",
            width: 40
        },
        {
            name: "city",
            type: "text",
            width: 40
        },
        {
            name: "state",
            type: "text",
            width: 40
        },
        {
            name: "postalCode",
            type: "text",
            width: 40
        },
        {
            name: "phoneNumber",
            type: "text",
            width: 70
        },
        {
            type: "control"
        }
    ]
}


initialize();


function initialize() {

    $('#grid_table').jsGrid(gridObject); // Initialize jsGrid

    setTimeout(() => $("#grid_table").jsGrid("loadData"), 1000);
    // To controller nav index
    document.getElementById('dashboardPage').style.color = 'blue';
    document.getElementById('dashboardPage').style.fontWeight = 'bold';

}

// Function to get Id of target row and send it to employee.php
$('#grid_table').on("click", function (event) {
    if (!$(event.target).is(":button") && !$(event.target).hasClass('jsgrid-control-field') && !$(event.target).parent().hasClass('jsgrid-control-field')) {
        var element = $('.jsgrid-selected-row');

        console.log('event');
        if (element) {
            var _id = element.find('td.hide').text();

            if (_id) {

                var formData = new FormData();
                formData.append('id', _id);

                fetch(BASE_URL + "/employee/setId", {
                        method: 'POST',
                        body: formData
                    })
                    .then(res => res.text()).then(function (res) {
                        console.log(res);

                        console.log('inside if');
                        window.location.href = BASE_URL + '/employee';


                    })
            }
        }
    }
})

// Reload jsGrid and show execution message
function load(res) {


    console.log(res);
    $("#grid_table").jsGrid("loadData")
    //res = JSON.parse(res);
    //message(res['message'], res['status']);


}

function insert() {

    var insertRow = $('.jsgrid-insert-row');

    var data = ['bernat', 'email@email.com', '26', '100', 'Barcelona', 'CAT', '8080', '123456789']

    var i = 0;
    insertRow.children('td').each(function () {
        if (!$(this).hasClass('hide') && !$(this).hasClass('jsgrid-control-field')) {
            $(this).find('input').val(data[i]);
            i++;

        }
    })
}