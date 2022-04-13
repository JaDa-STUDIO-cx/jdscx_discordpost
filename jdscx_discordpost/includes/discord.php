<?php

function post_to_discord($new_status, $old_status, $post) {
    if(get_option('discord_webhook') == null)
        return;
        
        if ( $new_status != 'publish' || $old_status == 'publish' || $post->post_type != 'post')
            return;
            
            $webhookURL = get_option('discord_webhook');
            $id = $post->ID;
            
            $author = $post->post_author;
            $authorName = get_the_author_meta('display_name', $author);
            $postTitle = $post->post_title;
            $permalink = get_permalink($id);
            $roleid = get_option('roleID');
            $message ="<@&".$roleid.">\n". str_replace('$authorName',$authorName, get_option('message_text'))."\n\n**".$postTitle."**\n\n".get_option('more_text')."\n".$permalink;
            
            $postData = array('content' => $message);
            
            $curl = curl_init($webhookURL);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            
            $response = curl_exec($curl);
            $errors = curl_error($curl);
            
            log_message($errors);
}


function log_message($log) {
    if (true === WP_DEBUG) {
        if (is_array($log) || is_object($log)) {
            error_log(print_r($log, true));
        } else {
            error_log($log);
        }
    }
}