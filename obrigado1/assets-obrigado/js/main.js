(function ($) {
    /**
     * Countdown
     */
    let days    = 2;
    let hours   = 7;
    let minutes = 0;
    let seconds = 0;

    const selectDate = new Date().valueOf() + (days * 86400000) + (hours * 3600000) + (minutes * (1000 * 60)) + (seconds * 1000);
    $('.countdown').countdown(selectDate.toString(), function (event) {
        $('.countdown__item .dia').html(event.strftime('%-D'));
        $('.countdown__item .hora').html(event.strftime('%-H'));
        $('.countdown__item .minutos').html(event.strftime('%M'));
        $('.countdown__item .segundos').html(event.strftime('%S'));
    });
})(jQuery);