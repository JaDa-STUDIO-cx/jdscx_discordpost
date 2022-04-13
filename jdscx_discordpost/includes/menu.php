<?php

function jdscx_discordpost_menu() {
    add_menu_page(
        'JDSCX Discord post settings',
        'JDSCX Discord post','manage_options',
        'jdscx_discordpost',
        'jdscx_discordpost_settings_page',
        plugins_url('jdscx_discordpost/img/icon_discord.png'),
        100
        );
    
}