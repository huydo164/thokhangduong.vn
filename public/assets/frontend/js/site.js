$(document).ready(function ($) {
    SITE.menuHead();
    SITE.btnBox();
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

    btnBox: function () {
        $('.btnBox').click(function () {
            var name = $('#name');
            var phone = $('#phone');
            var contentBox = $('#contentBox');
            var valid = true;

            if (name.val() == ''){
                name.addClass('error');
                valid = false;
            }else {
                name.removeClass('error');
            }
            if (phone.val() == ''){
                phone.addClass('error');
                valid = false;
            }else{
                phone.removeClass('error');
            }
            if (contentBox.val() == ''){
                contentBox.addClass('error');
                valid = false;
            }else{
                contentBox.removeClass('error');
            }
            if (valid){
                $('#formBox').submit();
            }
        })
    }
};