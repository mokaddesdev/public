jQuery(document).ready(function($) {

    function setCookie(name, value, days){
        var expires = "";
        if(days){
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function cookieExists(name){
        return document.cookie.split(';').some(function(c) {
            return c.trim().indexOf(name + '=') === 0;
        });
    }

    function hideBanner(){
        $('#cookie-banner')
            .addClass('opacity-0 translate-y-5 pointer-events-none')
            .delay(300)
            .slideUp(200);
    }

    if(!cookieExists('cookie_accepted')){
        $('#cookie-banner').fadeIn(200);
    }

    // Accept button
    $('#cookie-accept').on('click', function(e) {
        e.preventDefault();
        var days = parseInt(cookieData.expire_days) || 365;

        // Browser cookie
        setCookie('cookie_accepted', '1', days);

        // Server cookie via AJAX
        $.post(cookieData.ajax_url, {
            action: 'set_cookie',
            nonce: cookieData.nonce,
            days: days
        });

        hideBanner();
    });

    // Close button
    $('#cookie-close').on('click', function(e) {
        e.preventDefault();
        hideBanner();
    });

});
