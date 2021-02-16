jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function() {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('header#hamburger').addClass('sticky');
            } else {
                $('header#hamburger').removeClass('sticky');
            }
        });


        $('.hamburger').on('click', function() {
            $('.navbar').toggle();
            $(this).toggleClass('rotate');
        })



    });

    // Run the script once the window finishes loading
    $(window).load(function() {

    });

});