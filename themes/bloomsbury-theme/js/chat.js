(function ($) {
    $(document).ready(function () {
        $("#submit-message").click(function () {

            let message = $('input[name=message-input]').val();
            $.ajax({
                method: 'POST',
                url: bb_vars.rest_url + 'bloomsbury/v1/send-message',
                contentType: 'application/json',
                data: JSON.stringify({
                    channelId: '1',
                    content: message,
                }),
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', bb_vars.wpapi_nonce); // insert security stuff before sending request
                }
            })
                .done(function (data) {
                    console.log(data)
                })
                .fail(function (response) {
                    console.error(response.responseText);
                })
        });
    });

})(jQuery);




(function ($) {
    $(document).ready(function () {
        // setInterval(get_messages,1000);
        function get_messages() {
            $.ajax({
                method: 'GET',
                url: bb_vars.rest_url + 'bloomsbury/v1/get-messages',
                dataType: "json",
    
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', bb_vars.wpapi_nonce);
                }
            })          
                .done(function (messages) {
                    console.log(messages);

                    debugger;

                    var messageList = '';
                    messages.forEach((message) => {
                        messageList += '<li>' + message.content + '</li>';
                        messageList += '<li>' + message.message_author_id + '</li>';
                        messageList += '<li>' + message.created_timestamp + '</li>';
                    });

                    $("#listMessages").append(messageList);
                })
                .fail(function (response) {
                    console.error(response.responseText);
                });
                
        }

        get_messages();
        
    });
       
})(jQuery);

