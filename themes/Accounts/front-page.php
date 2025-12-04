
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    
    <?php wp_head();?>


</head>
<body <?php body_class(); ?>>
    <div class="main-container">
        <div class="left-side-container">left</div>
        <div class="right-side-container">right</div>
    </div>