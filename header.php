<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start WordPress</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="hero-section" style="background: url(<?php echo header_image(); ?>) no-repeat center center/cover ">


<header class="header">
    <a href="<?php echo home_url(); ?>" class="logo">TagBurger</a>
    <nav class="navbar">
        <?php
        wp_nav_menu(array(
            "theme_location" => "header",
            "container" => false,
        ));
        ?>
    </nav>
</header>



 <?php if(is_home()){ ?>
    <h1><?php bloginfo("name") ?></h1>
 <?php } ?>

 <?php if(is_page()){ ?>
    <h1><?php the_title(); ?></h1>
 <?php } ?>
</div>