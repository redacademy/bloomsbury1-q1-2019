<?php




function post_message ( $data ) {

    $channelId = $data['channelId'];
    $content = $data['content'];

    $get_current_user_id = wp_get_current_user();
    $message_author_id = $get_current_user_id->ID;
  
    // if 
    // && (isset($data))
    // && (is_numeric($data['channelId']))
    

    // else {

    //   exit('bad request');

    // Need to valid the incomming values
    // - Check channelId is a number and not null
    // - Check content contains vales (i.e. not null)

    // - Get logged in user

    return save_message_db ( $channelId, $content, $message_author_id );
}

function get_all_messages_for_channel () {


}


    // $get_current_user_id = wp_get_current_user();
    // /*
    //  * @example Safe usage:
    //  * $current_user = wp_get_current_user();
    //  * if ( ! $current_user->exists() ) {
    //  *     return;
    //  * }
    //  */
    // $author = $current_user->ID;
    // echo $author;

function save_message_db ( $channelId, $content, $author ) {
  global $wpdb; //whats this and how does it work?? Everyone has this.
  $posts = $wpdb->insert( 're11ac_chat_messages', array("content"=>$content, "message_author_id"=>$author, "channel_id"=>$channelId), array("%s", "%d", "%d"));

   return $posts;
}

function get_message_db () {
  global $wpdb; //whats this and how does it work?? Everyone has this.
  $messages = $wpdb->get_results("SELECT * FROM re11ac_chat_messages");

  return $messages;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'bloomsbury/v1', '/send-message', array(
      'methods' => 'POST',
      'callback' => 'post_message',
    ) );

    register_rest_route( 'bloomsbury/v1', '/get-messages', array(
      'methods' => 'GET',
      'callback' => 'get_message_db',
    ) );
  } );


?>
