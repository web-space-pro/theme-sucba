(function ($, root, undefined) {

    $(document).ready(function () {

        function btnMenu(){
            let btnMenu = $(".header__nav--btn");
            let mobileMenu = $(".mobile_menu");
            let btnMenuClose = $(".mobile_menu__close");
            let body = $('body');
            if (btnMenu.length > 0) {
                btnMenu.click(function() {
                    mobileMenu.toggleClass('is-open');
                    body.toggleClass('menu-open');
                });
            }
            if (btnMenuClose.length > 0) {
                btnMenuClose.click(function() {
                    mobileMenu.toggleClass('is-open');
                    body.toggleClass('menu-open');
                });
            }
        }
        btnMenu();


        $(".mobile_menu li.menu-item-has-children").on('click', function (e) {
            $(this).toggleClass('show');
        });
        $(".mobile_menu ul.menu a[href='#']").click(function (e) {
            e.preventDefault();
        });

        $('a[href^="#"].scroll ').on("click", function (event) {
            event.preventDefault();
            let id  = $(this).attr('href'),
                top = $(id).offset().top - 100;

            $('body,html').animate({scrollTop: top}, 1000);
        });
    });


})(jQuery);

