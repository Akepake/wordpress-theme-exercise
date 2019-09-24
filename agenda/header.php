<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<div class="header">
        <div class="logo"><h1><a class="test" href="<?php echo site_url();?>">wedo</a></h1></div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
            );?>
    </div>
    
