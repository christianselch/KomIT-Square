<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header();
   while (have_posts()) : the_post(); ?>
            <section id="middle" class="clearfix">
                <section id="main">
                    <div class="backLink">
                        <a href="<?php echo get_bloginfo('url') ?>">&#8592; Tryk her for at komme tilbage</a>
                    </div>

                    <?php
                        the_content('', false);
                    ?>

                    <div class="backLink">
                        <a href="<?php echo get_bloginfo('url') ?>">&#8592; Tryk her for at komme tilbage</a>
                    </div>
                </section>
            </section>
<?php endwhile;
  get_footer();
?>