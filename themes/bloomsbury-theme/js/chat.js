(function($) {
    $(document).ready(function() {
        $("#submit-message").click(function() {
          
            let message = $('input[name=message-input]').val();
            $.ajax({
                method: 'POST',
                url: bb_vars.rest_url + 'bloomsbury/v1/send-message',
                contentType: 'application/json',
                data: JSON.stringify({
                    channelId: '1',
                    content: message,
                }),
                // beforeSend: function (xhr) {
                //   xhr.setRequestHeader('X-WP-Nonce', bb_vars.wpapi_nonce); // insert security stuff before sending request
                // }
              })
                .done(function (data) {
                    console.log(data)
                })
                .fail(function (jqXHR, textStatus) {
                    console.error(textStatus);
                })
          });
      });
    
})(jQuery);
