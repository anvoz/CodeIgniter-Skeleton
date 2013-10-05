$(function() {
    $('body').scrollspy({ target: '#welcome-sidebar' });
    $('#welcome-sidebar').on('activate.bs.scrollspy', function (e) {
        switch($(e.target).children('a').attr('href')) {
            case '#javascript':
                $('#theme-nav').removeClass('show');
                break;
            case '#welcome':
            case '#theme':
                $('#theme-nav').addClass('show');
                break;
        }
    });
});