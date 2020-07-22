$(document).ready(function ($) {
    STATICS.navigationIcon();
    SITE.menuHead();
});

STATICS = {
    navigationIcon:function () {
        $('.navigationIcon, .backdropNav').click(function () {
            var backdrop = $('.backdropNav');
            var navigation = $('.navigation');
            $('.logo-web').toggleClass('open-logo');
            $('.navigation').toggleClass('nav-open');
            if (!(navigation).hasClass('nav-open')){
                backdrop.hide();
            }
            else{
                backdrop.show();
            }
        })
    },
    menuHead: function () {
        $('.mbButtonMenuL').click(function () {
            $('.menuTop').removeClass('on');
            $('.mbButtonMenuL').fadeOut();
            $('.mbButtonMenu').fadeIn();
        });
    },
};