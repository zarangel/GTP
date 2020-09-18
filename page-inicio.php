<?php get_header(); ?>


<?php 
    if(have_posts()):

        while(have_posts()): the_post(); ?>

            
            <P><?php the_content(); ?></P>

       <?php 
       endwhile;
    endif;
    ?>

<?php get_footer();