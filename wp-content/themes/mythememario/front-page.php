<?php  get_header(); ?>

<main class="container">
    <?php if(have_posts()){
        while (have_posts()) {
            the_post(); ?>
            <h1 class="my-3"> <?php the_title()?>  !!!</h1>
            <?php the_content();?>
    <?php 
        }
    } ?>
    
    <div class="lista-noticias my-5">
        <h2 class="text-center"> NOTICIAS</h2>
        <div class="row">
        <?php
            $args = array(
                'post_type' => 'noticia',
                'post_per_page' => -1,
            );

            $noticias = new WP_Query($args);

            if($noticias->have_posts()){
                while ($noticias->have_posts()){
                    $noticias->the_post();
                    ?>

                    <div class="col-4">
                        <figure>
                            <?php the_post_thumbnail('large'); ?>
                        </figure>
                        <h4 class='my-3 text-center'>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title();?>
                            </a>
                        </h4>
                    
                    </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>