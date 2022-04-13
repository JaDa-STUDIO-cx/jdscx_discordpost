<?php
/*
 * Plugin Name: JDSCX Discord post
 * Plugin URI: https://jadastudio.cx
 * Description: Announces new WordPress posts to your Discord server. Please setup a webhook on your Discord server.
 * Version: 1.5
 * Author: Daniel Burger
 * Author URI: https://jadastudio.cx
 */

require_once 'setup.php';



add_action('admin_menu', 'jdscx_discordpost_menu');


add_action('admin_init', 'jdscx_discordpost_init');


add_action('transition_post_status', 'post_to_discord', 10, 3);








