(function () {
    var msg = $('title').attr('data-message');
    var status = $('title').attr('data-status');
    if (msg && status) message(msg, status);

    $('#employeePage').css({
        'color': 'blue',
        'fontWeight': 'bold'
    });


    $('#avatar-chosen').on('click', function () {
        $(this).addClass('hide');
        $('#avatar-container').removeClass('hide');
    })

    if ($('#avatar-chosen img').attr('src')) $('#avatar-chosen').removeClass('hide');
    else {
        $('#avatar-container').removeClass('hide');
        $('.spinner-wrapper').removeClass('hide');

    }

    getImages();

    /** 
     * @description fetches the available images from the api 'uifaces' and append it to avatar container as images
     */
    function getImages() {
        fetch('https://uifaces.co/api', {
                method: 'GET',
                headers: {
                    'X-API-KEY': [ $_ENV['UIFACES_API_KEY'] ],
                    'Accept': 'application/json',
                    'Cache-Control': 'no-cache'
                }
            })
            .then(res => res.json())
            .then(function (res) {
                res.forEach(element => $('#avatar-container').append(`<img src=${element.photo}></img>`))

                $('.spinner-wrapper').addClass('hide');
                $('#avatar-container').on('click', function (e) {
                    if ($(e.target).is('img')) {
                        var src = $(e.target).attr('src');
                        $('#avatar-container').addClass('hide');
                        $('#avatar-chosen').removeClass('hide');
                        $('#avatar-chosen img').attr('src', src);
                        $('#profileImgInput').val(src);


                    }
                })

            })
    }


})