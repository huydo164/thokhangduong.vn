$(document).ready(function ($) {
    SITE.menuHead();
});

SITE = {
    menuHead: function () {
        $('.mbButtonMenu').click(function () {
            $('.menuTop').addClass('on');
            $('.mbButtonMenu').fadeOut();
            $('.mbButtonMenuL').fadeIn();
        });
        $('.mbButtonMenuL').click(function () {
            $('.menuTop').removeClass('on');
            $('.mbButtonMenuL').fadeOut();
            $('.mbButtonMenu').fadeIn();
        });
    },
};