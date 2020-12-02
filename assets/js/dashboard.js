//* grid object -> defines the features of jsGrid Object. for more information :  https://www.npmjs.com/package/gridjs

const BASE_URL = $("main").attr('data-path');
var gridObject = {
    width: "100%",
    height: "400px",
    filtering: true,
    inserting: true,
    deleting: true,
    editing: false,
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
            }).then(res => res.text()).then((res) => load(res));
        },

        // function to delete data
        deleteItem: function (item) {
            return fetch(BASE_URL + "/dashboard/deleteEmployees", {
                method: 'DELETE',
                body: JSON.stringify(item)
            }).then(res => res.text()).then((res) => load(res));
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

    // Initialize jsGrid
    $('#grid_table').jsGrid(gridObject);
    setTimeout(() => $("#grid_table").jsGrid("loadData"), 1000);
    // To controller nav index
    $('#dashboardPage').css({
        'color': 'blue',
        'fontWeight': 'bold'
    });



}

// Function to get Id of target row and send it to employee.php

$('#grid_table').on("click", function (event) {
    if (!$(event.target).is(":button") && !$(event.target).hasClass('jsgrid-control-field') && !$(event.target).parent().hasClass('jsgrid-control-field')) {
        var element = $('.jsgrid-selected-row');
        if (element) {
            var _id = element.find('td.hide').text();
            if (_id) {
                var formData = new FormData();
                formData.append('id', _id);
                fetch(BASE_URL + "/employee/setId", {
                        method: 'POST',
                        body: formData
                    })
                    .then(() => window.location.href = BASE_URL + '/employee')
            }
        }
    }
})

// Reload jsGrid and show execution message

function load(res) {
    $("#grid_table").jsGrid("loadData")


    res = JSON.parse(res);

    console.log(res);
    message(res['message'], res['status']);
}


// debug function. to be executed on the console for a auto-filling of the fields to be inserted

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