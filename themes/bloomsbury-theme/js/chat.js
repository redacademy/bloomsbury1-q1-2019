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
    
        let lastMessageId = null;
        let didLastMessageHaveAvatar = false;
        setInterval(get_messages, 3000);
        
        function get_messages() {
            // console.log('The current message ID is: ' + lastMessageId);
            var url = bb_vars.rest_url + 'bloomsbury/v1/get-messages';
            if (lastMessageId != null) {
                url += '/' + lastMessageId;
            }
            $.ajax({
                method: 'GET',
                url: url,
                dataType: "json",
    
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', bb_vars.wpapi_nonce);
                }
            })          
                .done(function (messages) {
                    var messageTemplate = '';

                    messages.sort(function(a, b){
                        return new Date(a.created_timestamp).getTime() - new Date(b.created_timestamp).getTime()
                    });
                    
                    messages.forEach((message, index) => {

                        // Check to see if this message should show an avatar
                        if ((index + 1) < messages.length) {
                            var nextMessage = messages[index + 1];
                            if (index === 0 && message.owner !== true) {
                                message.showAvatar = true;
                            } else if (nextMessage.owner !== message.owner && nextMessage.owner !== true) {
                                nextMessage.showAvatar = true;
                            }
                        }

                        // Message Wrapper
                        messageTemplate += '<div class="message-wrapper">';    

                        // Avatar
                        if (message.showAvatar === true) {
                            didLastMessageHaveAvatar = true;
                            messageTemplate += '<div class="message-avatar"></div>';    
                        } else {
                            messageTemplate += '<div class="no-message-avatar"></div>';    
                            didLastMessageHaveAvatar = false;
                        }

                        // Container
                        messageTemplate += '<div class="message-container '
                        + (message.owner === true ? 'owner' : '') + '">';
                        
                        // Content
                        messageTemplate += '<div class="content">' + message.content + '</div>';

                        // Timestamp
                        // var datestring = ("0" + date.getUTCDate()).slice(-2) + "-" + ("0"+(date.getUTCMonth()+1)).slice(-2) + "-" +
                        // d.getUTCFullYear() + " " + ("0" + date.getHours()).slice(-2) + ":" + ("0" + date.getMinutes()).slice(-2);
                        var date = new Date(message.created_timestamp);
                        var datestring = ("0" + date.getUTCHours()).slice(-2) + ":" + ("0" + date.getUTCMinutes()).slice(-2);
                        messageTemplate += '<div class="timestamp">' + datestring + '</div>';

                        // Closing out
                        messageTemplate += '</div></div>';

                        if (lastMessageId == null || lastMessageId < message.message_id) {
                            lastMessageId = parseInt(message.message_id, 10);
                        }

                        // message.message_author_id

                        // messageTemplate += '<div id="message_author_id">' + message.message_author_id + '</div>';
                        // messageTemplate += '<div id="created_timestamp">' + message.created_timestamp + '</div>';
                        // messageTemplate += '<div id="message_id">' + message.message_id + '</div>';
                    });

                    $("#listMessages").append(messageTemplate);
                    console.log('Last Message Id: ' + lastMessageId);
                })
                .fail(function (response) {
                    console.error(response.responseText);
                });
                
        }

        get_messages();
        
    });
       
})(jQuery);

