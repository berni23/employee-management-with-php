$(function () {



    var msg = $('title').attr('data-message');
    var status = $('title').attr('data-status');
    if (msg && status) message(msg, status);



})