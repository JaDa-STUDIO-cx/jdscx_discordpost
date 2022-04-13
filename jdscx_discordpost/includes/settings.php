<?php

function jdscx_discordpost_init(){
    
    register_setting('jdscx_discordpost_op', 'discord_webhook');
    register_setting('jdscx_discordpost_op', 'roleID');
    register_setting('jdscx_discordpost_op', 'message_text');
    register_setting('jdscx_discordpost_op', 'more_text');
    
    
    add_settings_section(
        'jdscx_discordpost_section',
        '...',
        '',
        'jdscx_discordpost'
        );
    
    add_settings_field(
        'discord_webhook_field',
        'Your Discord webhook url',
        'jdscx_discordpost_webhook_field',
        'jdscx_discordpost',
        'jdscx_discordpost_section'
        );
    
    add_settings_field(
        'discord_roleID_field',
        'Role id for anouncement',
        'jdscx_discordpost_roleID_field',
        'jdscx_discordpost',
        'jdscx_discordpost_section'
        );
    
    add_settings_field(
        'discord_message_field',
        'Message text for the anouncement',
        'jdscx_discordpost_message_field',
        'jdscx_discordpost',
        'jdscx_discordpost_section'
        );
    
    add_settings_field(
        'discord_more_field',
        'More text before the permalink',
        'jdscx_discordpost_more_field',
        'jdscx_discordpost',
        'jdscx_discordpost_section'
        );
}


function jdscx_discordpost_webhook_field(){
    ?>
    <input type="text" id="discord_webhook" name="discord_webhook" size="52" value="<?php echo get_option('discord_webhook')?>">
    <?php 
}

function jdscx_discordpost_roleID_field(){
    ?>
    <input type="text" id="roleID" name="roleID" size="52" value="<?php echo get_option('roleID')?>">
    <?php 
}

function jdscx_discordpost_message_field(){
    ?>
    <input type="text" id="message_text" name="message_text" size="52" value="<?php echo get_option('message_text')?>">
    <?php 
}

function jdscx_discordpost_more_field(){
    ?>
    <input type="text" id="more_text" name="more_text" size="52" value="<?php echo get_option('more_text')?>">
    <?php 
}