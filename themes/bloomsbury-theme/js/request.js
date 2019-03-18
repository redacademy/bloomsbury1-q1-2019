/* --------------------------------------------

	jQuery onClick function for Contact Form

-------------------------------------------- */
// For Opening of the Contact Form
jQuery(document).ready(function($) {
    $('.request-info-btn').on('click', function(event) {
    	event.preventDefault();
        $('.request-container').css('display', 'flex');
    });
});
// For Closing the Contact Form
jQuery(document).ready(function($) {
    $('.close').on('click', function(event) {
    	event.preventDefault();
        $('.request-container').css('display', 'none');
    });
});