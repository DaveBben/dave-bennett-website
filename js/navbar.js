jQuery(document).ready(function($) {
    $(window).on('scroll', function (event) {
        var scrollValue = $(window).scrollTop();
        if (scrollValue > 60) {
            $('.navbar').removeClass('navbar-dark');
            $('.navbar').removeClass('bg-dark');       
            $('.navbar').addClass('affix');
            $('.navbar').addClass('navbar-light');
        } else{
            $('.navbar').removeClass('affix');
            $('.navbar').removeClass('navbar-light');
            $('.navbar').addClass('navbar-dark');
            $('.navbar').addClass('bg-dark');

        }
    });
});