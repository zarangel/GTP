<!doctype html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Grupo Táctico Publicitario</title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>


        <div class="container">
            <div class="row">
                
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg navbar-light xx">
                        <a  href="<?php echo home_url();?>">
                        <?php if(has_custom_logo()): ?>
                            <?php 
                                // Get Custom Logo URL
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                $custom_logo_url = $custom_logo_data[0];
                                ?>
                                <img src="<?php echo esc_url( $custom_logo_url ); ?>" height="60" width="60"
                                alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                            
                        <?php endif;

                            echo bloginfo( 'name' ); ?> 
                        </a>

                        <button class="navbar-toggler bg-light" type="button" 
                                data-toggle="collapse" 
                                data-target="#navbarSupportedContent" 
                                aria-controls="navbarSupportedContent" 
                                aria-expanded="false" 
                                aria-label="Toggle navigation">
                            
                            <span class="navbar-toggler-icon"></span>
                        
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                            <?php wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_class' =>'navbar-nav '
                                )); ?>
                            </ul>
                            <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form> -->
                        </div>
                    </nav>

                </div>
            </div>
            <!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width=" <?php echo get_custom_header()->width; ?>" alt="" /> -->
        

        