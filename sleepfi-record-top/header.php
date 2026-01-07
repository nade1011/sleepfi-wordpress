<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-base="content" data-menu="close">

     <header data-space="header">
        <div data-frame="header" data-space="wrapperLR">
            <div id="logo" data-img="logo"><h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="SleepFiRecord" width="217" height="86"></h1></div>
            <nav id="header-nav">
                <ul data-frame="nav">
                    <li><a href="<?php echo esc_url( home_url('/') ); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url( home_url('/about') ); ?>">ABOUT</a></li>
                    <li><a href="<?php echo esc_url( home_url('/artist') ); ?>">ARTIST</a></li>
                    <li><a href="<?php echo esc_url( home_url('/goods') ); ?>">GOODS</a></li>
                </ul>
            </nav>
            <button id="open-btn" class="open-btn"><span class="line"></span><span class="line"></span><span class="line"></span></button>
             <nav id="sp-nav" data-frame="sp-nav" data-status="close">
                
                <ul data-frame="sp-ul">
                    <li data-frame="sp-nav-header"><div class="logo" data-img="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="SleepFiRecord" width="217" height="86">
                </div><button id="close-btn" class="close-btn">×</button></li>
                    <li><a href="<?php echo esc_url( home_url('/') ); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url( home_url('/about') ); ?>">ABOUT</a></li>
                    <li><a href="<?php echo esc_url( home_url('/artist') ); ?>">ARTIST</a></li>
                    <li><a href="<?php echo esc_url( home_url('/goods') ); ?>">GOODS</a></li>
                    <li><p><small>&copy;2025 SleepFi Records. All rights reserved.</small></p></li>
                </ul>
            </nav>
            
        </div>
        
    </header>
    
