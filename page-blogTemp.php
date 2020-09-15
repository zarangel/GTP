<?php 

/*
    Template Name: Blog Layout
*/

get_header(); ?>



<h1>Prueba de Page BLOG</h1>
<?php 
    if(have_posts()):

        while(have_posts()): the_post(); ?>
            <hr>
            <h3><?php the_title(); ?> </h3>
            <P><?php the_content(); ?></P>
            <hr>
       <?php 
       endwhile;
    endif;
    ?>

<?php get_footer();