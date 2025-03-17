<?php
/**
 * TP: Hero (Custom Image version)
 * Template part for displaying the hero on common pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

// Fetch ACF HERO
$page_hero = array(
	'img' => get_field('hero_background_image'),
    'title' => get_field('main_hero_title_heading'),
    'subtitle' => get_field('hero_subtitle')
);

$data = array(
    'project' => array(
        'title' => 'Orchard Gardens',
        'image' => '[url]',
        'link' => '#'
    ),
); 

// Get ACF custom post data 
$logos = get_posts(array(
    'posts_per_page'    => 50,
    'post_type'         => 'client-logos',
    'orderby'          => 'menu_order',
    'order'            => 'ASC'
));

?>


<section class="section--featured-projects sm-mb-2 md-mb-4">
    <div class="inner">
        <ul class="features-grid image-grid">
            <?php
            // Image Grid
            // Cycles through images in the theme's /images/gallery folder, using filename and php count as the file reference (n.b fails if an image is missing)
            $num_of_images = 6;
            $i=0;
            while($i < $num_of_images) {
                ?>
                <li class="fpg__item grid-item">
                    <a href="#" class="fpg__wrapper">
                        <span class="fpg__title">Orchard Gardens</span>
                        <img class="fpg__img" src="<?php echo get_template_directory_uri(). '/images/projects/project-'.($i+1). '.jpg';?>" alt="" />
                    </a>
                </li>
                <?php
                $i++;
            }
            ?>
        </ul>
    </div>
</section>