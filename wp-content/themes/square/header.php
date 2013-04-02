        <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Square Te - Virum</title>
        <meta name="description" content="Square i Virum - Te, Kaffe, Chokolade & Gaver">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper">
            <section id="top">
                <section id="header">
                    <a href="<?php echo get_bloginfo('url') ?>" class="clearfix">
                        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.notext.png" alt="logo" />
                        <h1 id="title"><?php echo get_bloginfo("name"); ?></h1>
                        <h2 id="tagline"><?php echo get_bloginfo("description"); ?></h2>
                    </a>
                </section>
                
                <?php echo do_shortcode('[cycloneslider id="forside-slider"]') ?>

            </section>