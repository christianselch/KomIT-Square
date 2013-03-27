<?php
/*
Template Name: Forside
*/
?>
<?php get_header();
   while (have_posts()) : the_post(); ?>
            <section id="middle" class="clearfix">
                <section id="main">
                    <?php
                        the_content('', false);
                    ?>
                </section>

                <aside id="contactSidebar">
                    <?php $meta= get_post_custom($post->id); ?>
                    <span class="contactLine contactHeader">Åbningstider</span>
                    <span class="contactLine">Mandag: <?=$meta['Åbningstider'][0] ?></span>
                    <span class="contactLine">Tirsdag: <?=$meta['Åbningstider'][1] ?></span>
                    <span class="contactLine">Onsdag: <?=$meta['Åbningstider'][2] ?></span>
                    <span class="contactLine">Torsdag: <?=$meta['Åbningstider'][3] ?></span>
                    <span class="contactLine">Fredag: <?=$meta['Åbningstider'][4] ?></span>
                    <span class="contactLine">Lørdag: <?=$meta['Åbningstider'][5] ?></span>
                    <span class="contactLine">Søndag: <?=$meta['Åbningstider'][6] ?></span>

                    <span class="contactLine contactHeader">Kontaktoplysninger</span>
                    <?php
                        $contactLines = explode("\n", $meta["Kontakt"][0]);

                        foreach($contactLines as $contactLine){
                            echo '<span class="contactLine">'.$contactLine.'</span>';
                        }
                    ?>
                </aside>
            </section>
<?php endwhile;
  get_footer();
?>