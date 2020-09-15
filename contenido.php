

                
                
                <article id="post-<?php the_ID(  ); ?>">
                        
                    <header class="entry-header"> 
                        <h1><?php the_title(); ?></h1> 
                    </header>
                    <div class="row">
                        <?php if(has_post_thumbnail()): ?>
                            <div class="col-xl-12 col-xl-4">
                                <div class="thumbnail-img"><?php the_post_thumbnail( 'thumbnail');?></div>
                            </div>
                            <div class="col-xl-12 col-xl-8">
                                <?php the_content(); ?>
                            </div>    

                        <?php else: ?>

                            <div class=" col-xl-12">
                                <?php the_content(); ?>
                            </div>

                        <?php endif; ?>
                    </div>
                
                </article>