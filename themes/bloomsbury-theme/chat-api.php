<?php

function post_message ( $response ) {
    echo $response['channelId'];
    echo $response['content'];

    return save_message_db ();
}

function save_message_db () {
  global $wpdb; //whats this and how does it work?? Everyone has this.
  $posts = $wpdb->insert( 're11ac_chat_messages', array("content"=>"string content", "message_author_id"=>1, "channel_id"=>2), array("%s", "%d", "%d"));

   return $posts;
}

function get_message_db () {
  global $wpdb; //whats this and how does it work?? Everyone has this.
  $posts = $wpdb->get_results("SELECT * FROM re11ac_users");

   return $posts;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'bloomsbury/v1', '/send-message', array(
      'methods' => 'POST',
      'callback' => 'post_message',
    ) );
  } );


?>
