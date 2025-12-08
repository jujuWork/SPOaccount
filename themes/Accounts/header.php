<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head();?>


</head>

<body <?php body_class(); ?>>

<header>
    <nav>
        <ul>
            <li>
                <a href="#home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/sponago_logo.png" alt="logo">
                </a>
            </li>
            <li>
                <a href="#feature">Features</a>
            </li>
            <li>
                <a href="#office">Offices</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#recruit">Recruitment</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#inquire">Inquiry</a>
            </li>
        </ul>
    </nav>
</header>