<?php

function jdscx_discordpost_settings_page(){
    ?>
    <h1><img src="<?php echo plugin_dir_url( __FILE__ ) . '../img/icon_discord.png';?>"/> JDSCX Discord post</h1>
    <h3>Post your blog posts automaticaly to your Discord server.</h3>
    <div style="width:50%; float: left">
    <form action="options.php" method="post">
     <?php 
     settings_fields('jdscx_discordpost_op');
     do_settings_sections('jdscx_discordpost');
     submit_button();
     ?>
    
    </form>
    <span style="font-weight: bold">!! Notice !!</span><br/>
    <span>For the message text you can use the Discord markups and the $authorName variable. </span>
    </div>
    <div style="width:46%; float: left;background-color:#242424; color:white; margin-right:10px; padding:15px">
    <img style="width:43%; height:auto" src="<?php echo plugin_dir_url( __FILE__ ) . '../img/jdscx_logo.png';?>">
    <br/><br/>
    <span>The plugin may not be modified or sold. The plugin is copyrighted by JaDa STUDIO.CX UG (haftungsbeschränkt). All rights reserved.
<br/><br/>
More information at https://jadastudio.cx.</span>
    </div>
   <?php
  
}
