<?php
        /* Template Name: Custom Search */        
        get_header(); ?>             
        <div class="page-search-teacher">
            <div id="content">  
                     <h3>Search Result for : <?php echo "$s"; ?> </h3>
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
                    <div id="post-<?php the_ID(); ?>" class="teacher-item">        
                     <article>        
                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        <?php

                            $values = get_field('instrument');
                            if($values)
                            {
                              echo '<h5>';

                              foreach($values as $value)
                              {
                                echo '<span> ' . $value . ' </span>';
                              }

                              echo '</h5>';
                            }

                            ?>  
                        <span class="gender"><?php the_field('gender'); ?> 

                    </article><!-- #post -->    
                </div>
        <?php endwhile; ?>
    <?php endif; ?>
           </div><!-- content -->    
        </div><!-- contentarea -->   
        <?php get_footer(); ?>