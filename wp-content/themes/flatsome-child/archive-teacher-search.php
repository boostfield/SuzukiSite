<?php
        /* Template Name: Custom Search */        
        get_header(); ?>             
        <div class="page-search-teacher">
            <div id="content" style="padding: 0 0 2em 0;">
                
                <div class="row" style="padding: 1em 0;">
                <div class="main-title">寻找铃木教师</div>
                    <div class="col medium-12" style="padding: 1em 0 0 0 ;">
                        <div style="padding: 0 2em;">
                            <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchTeacherForm" style="margin-bottom: 0;">
                                <a href="<?php echo site_url('/?s=&post_type=teacher'); ?>"><button type="button" class="primary" style="float: left;">全部教师</button></a>
                                <input type="hidden" name="post_type" value="teacher" />
                                <input type="hidden" name="s" value="" />
                                <input name="instrument" width="200" value="<?php echo $_GET['instrument']; ?>" placeholder="乐器"/>
                                </input>
                                <input name="district" width="200" value="<?php echo $_GET['district']; ?>" placeholder="地区"/>
                                </input>
                                <button type="submit" alt="Search" class="primary">搜索</button>
                            </form>
                           
                        </div>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <h3>搜索结果: <?php echo "$s"; ?>  <?php echo $_GET['district']; ?> </h3>
                </div>
                    <div class="row" style="padding: 0 2em;">
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
                        <div id="post-<?php the_ID(); ?>" class="teacher-item col medium-6 small-12">        
                            <article>
                                <img src="<?php the_field('avatar'); ?>" alt="<?php the_title(); ?>" style="float: left; height: 160px; width: 130px;"/>
                                <div><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="font-size: 24px; color: #333; margin-left: 10px;"><?php the_title(); ?></a></div>
                                <?php

                                    $values = get_field('instrument');
                                    if($values)
                                    {
                                        echo '<div>';

                                        foreach($values as $value)
                                        {
                                            echo '<span style="border: 1px solid #ec6f2d; height: 20px; border-radius: 10px;font-size: 14px; padding: 0 4px; color: #ec6f2d;margin-left: 10px;"> ' . $value . ' </span>';
                                        }

                                        echo '</div>';
                                    }

                                ?>  
                                <span style="font-size: 14px; color: #666; margin-left: 10px;">所属地区: <?php the_field('district'); ?> </span><br/>
                                <span style="font-size: 14px; color: #666; margin-left: 10px;">联系方式: <?php the_field('phone'); ?> </span><br/>
                                <span style="font-size: 14px; color: #666; margin-left: 10px;">电子邮箱: <?php the_field('email'); ?> </span><br/>
                                <div style="clear: both;"></div>
                                <div style="font-size: 14px; color: #666; margin-top: 10px;">所获证书: <?php the_field('achivement'); ?></div>
                                <div style="font-size: 14px; color: #999;">教师简介: <?php the_field('description'); ?></div>
                            </article><!-- #post -->    
                        </div>
                        <?php if ( ( $wp_query->current_post + 1 ) % 2 === 0 ) { echo '<hr style="clear: both; width: 100%; margin-bottom: 2em;"/>';} ?>
                    <?php endwhile; ?>
                    
                </div>                            
                <div class="row pagination text-right" style="padding: 2em;">
                    <div><?php echo paginate_links( array(
	'prev_text'          => __('上一页'),
	'next_text'          => __('下一页')
) ); ?></div>
                </div>   
                <?php endif; ?>
           </div><!-- content -->    
        </div><!-- contentarea -->   
        <?php get_footer(); ?>