/* -----------------------------------------------------------
	This Script is designed too check whether the 
	page is 'Login' or 'Register' and hide the opposing form
	accordingly.
------------------------------------------------------------*/

jQuery(document).ready(function($) {
    var url = window.location.href;
    url = url.split("/");
    if (url[4] == "log-in") // You can set url[] according to slash parameter wise
    {
        $("#customer_login .u-column2").remove(); //Remove Registration Div
    }
    if (url[4] == "register") {
        $("#customer_login .u-column1").remove(); // Remove Login Div
    }
    console.log(url);
});