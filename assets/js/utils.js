/**
 * @param {string} msg message to be displayed
 * @param {string} tag (optional), tag to be added to the message possible tags: success, error,200,400
 * @description  displays a user-friendly message during 1.5 seconds
 */

function message(msg, tag = false) {
    if (tag == 200) tag = 'success';
    else if (tag == 400) tag = 'error';
    var infoWindow = $(".info-window");
    if (tag) infoWindow.addClass(tag);
    infoWindow.text(msg);
    infoWindow.addClass("show-info");
    infoWindow.removeClass("hide");
    setTimeout(function () {
        infoWindow.removeClass("show-info");
        setTimeout(() => {
            infoWindow.addClass("hide");
            if (tag) infoWindow.removeClass(tag);
        }, 1000);
    }, 1500);
}