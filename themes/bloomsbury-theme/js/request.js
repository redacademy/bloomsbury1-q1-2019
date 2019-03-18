jQuery(document).ready(function($) {
    $('.request-info-btn').on('click', function(event) {
    	event.preventDefault();
        $('.request-container').css('display', 'flex');
    });
});

jQuery(document).ready(function($) {
    $('.close').on('click', function(event) {
    	event.preventDefault();
        $('.request-container').css('display', 'none');
    });
});