<?php
/**
 * TP: Hero (Custom Image version)
 * Template part for displaying the hero on common pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

// Fetch ACF Custom Post Type (project)
$projects = get_posts(array(
    'posts_per_page'    => 50,
    'post_type'         => 'project',
    'orderby'          => 'menu_order',
    'order'            => 'ASC'
));  

/*
$the_query = new WP_Query( array('posts_per_page'=>30,
                                 'post_type'=>'project',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            );                             
*/

// Min number of logos required to show the marquee
$page_show_count = 4;

?>

<section class="section__content section__feature-showcase">
    <div class="inner">
        <div class="feature-showcase">
            <article class="fs__item">
                <a class="item__img-block" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sample-property.jpg" alt="" /></a>
                <div class="item__details">
                    <div class="item__heading-block stacked-heading">
                        <span class="item__pre-text top-line text-l-blue">Plot 1</span>
                        <h3 class="item__title bottom-line text-blue">Orchard Gardens</h3>
                    </div>
                    <p class="item__desc">Itatum fugit aut illabor erspedignam nonserro dolorrovid mi, nis rem facime volent ea dolupti usandam, quam que res expligenis restinia.<p>
                    <div class="btn-wrapper"><a class="btn btn--primary item__btn">View</a></div>
                </div>
                <span class="item__flag flag residential">Residential</span>
            </article>
            
            <article class="fs__item">
                <a class="item__img-block" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sample-property-2.jpg" alt="" /></a>
                <div class="item__details">
                    <div class="item__heading-block stacked-heading">
                        <span class="item__pre-text top-line">Plot 1</span>
                        <h3 class="item__title bottom-line">Orchard Gardens</h3>
                    </div>
                    <p class="item__desc">Itatum fugit aut illabor erspedignam nonserro dolorrovid mi, nis rem facime volent ea dolupti usandam, quam que res expligenis restinia.<p>
                    <div class="btn-wrapper"><a class="btn btn--primary item__btn">View</a></div>
                </div>
                <span class="item__flag flag commercial">Commercial</span>
            </article>

            <article class="fs__item">
                <a class="item__img-block" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sample-property.jpg" alt="" /></a>
                <div class="item__details">
                    <div class="item__heading-block stacked-heading">
                        <span class="item__pre-text top-line text-l-blue">Plot 1</span>
                        <h3 class="item__title bottom-line text-blue">Orchard Gardens</h3>
                    </div>
                    <p class="item__desc">Itatum fugit aut illabor erspedignam nonserro dolorrovid mi, nis rem facime volent ea dolupti usandam, quam que res expligenis restinia.<p>
                    <div class="btn-wrapper"><a class="btn btn--primary item__btn">View</a></div>
                </div>
                <span class="item__flag flag residential">Residential</span>
            </article>
            
            <article class="fs__item">
                <a class="item__img-block" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sample-property-2.jpg" alt="" /></a>
                <div class="item__details">
                    <div class="item__heading-block stacked-heading">
                        <span class="item__pre-text top-line">Plot 1</span>
                        <h3 class="item__title bottom-line">Orchard Gardens</h3>
                    </div>
                    <p class="item__desc">Itatum fugit aut illabor erspedignam nonserro dolorrovid mi, nis rem facime volent ea dolupti usandam, quam que res expligenis restinia.<p>
                    <div class="btn-wrapper"><a class="btn btn--primary item__btn">View</a></div>
                </div>
                <span class="item__flag flag commercial">Commercial</span>
            </article>
        </div>

    <?php $projects = null; // Delete this to get the ACF Projects working again -- ?>
    <?php if($projects): //&& (count($projects) > $show_count) ?>
        <div class="feature-showcase">
            <?php 
            //<?php while ($the_query -> have_posts()) : $the_query -> the_post();

            foreach( $projects as $project_data ): 
                // Scope postdata
                setup_postdata($project_data);

                // Retreive related ACF fields
                $project = get_fields($project_data);

                //var_dump($post);
                ?>
                    <!-- Project Item -->
                    <article class="fs__item">
                        <!-- Image -->
                        <a class="item__img-block" href="#">
                            <?php if($project['project_main_image']):
                                ?>
                                <img src="<?php echo $project['project_main_image']; ?>" alt="<?php echo the_title() ?>" />
                                <?php
                            else:
                                ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/sample-property.jpg" alt="<?php echo get_the_title($project_data) ?>" />
                                <?php
                            endif; ?>
                        </a>

                        <!-- Project Details -->
                        <div class="item__details">
                            <div class="item__heading-block stacked-heading">
                                <span class="item__pre-text top-line text-l-blue"><?php echo $project['subtitle']; ?></span>
                                <h3 class="item__title bottom-line text-blue"><?php echo (get_the_title($project_data) ? get_the_title($project_data) : 'Project'); ?></h3>
                            </div>
                            <p class="item__desc"><?php echo $project['project_summary']; ?><p>
                            <div class="btn-wrapper"><a href="<?php echo get_permalink($project_data); ?>" class="btn btn--primary item__btn">View</a></div>
                        </div>

                        <?php if($project['type_of_work'] !=''): ?> 
                            <span class="item__flag flag residential"><?php echo $project['type_of_work']; ?></span>
                        <?php endif; ?>
                    </article>
                <?php
            endforeach;

            // Reset custom post data
            wp_reset_postdata();
            ?>
        </div>
    <?php endif; ?>

    <?php
    /*
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
           'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
           'format' => '?paged=%#%',
           'current' => max( 1, get_query_var('paged') ),
           'total' => $the_query->max_num_pages
       ) );
        */
    ?>
        <div class="fs__pagination bullet-list pagination">
            <ul>
                <li class="selected"><a href="#" >1</a></li>
                <li><a href="https://www.google.com/">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>
    </div>
</section>