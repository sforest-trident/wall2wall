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

if(empty($page_hero['title'])) {
    $page_hero['title'] = get_the_title();
}

// If no page hero image is set, use the default theme root image.
if(!is_array($page_hero['img'])) {
    $page_hero['img'] = array('url' => get_template_directory_uri(). '/images/home-hero.jpg');
}

// if cta button is set, show it.
$button_cta = get_field('show_cta_button');
if($button_cta){
    $page_hero['cta'] = array('text' => get_field('button_text'), 'url' => get_field('button_link'));
}   

?>


<?php // ACF Page Intro Block --/ ?>
<!-- Page Hero Intro Block -->
<section class="section--hero hero__bg-img" style="background-image: url(<?php echo $page_hero['img']['url']; ?>);">
    <div class="inner">
        <div class="hero__content">
            <h2 class="hero__title"><?php echo $page_hero['title']; ?></h2>
            
            <?php //var_dump($page_hero['subtitle']); ?>
            <?php if($page_hero['subtitle']) { ?>
                <div class="hero__subtitle">
                    <?php echo $page_hero['subtitle']; ?>
                </div>
            <?php } ?>

            <?php if(isset($page_hero['cta'])) { ?>
                <div class="hero__cta-wrapper cta-wrapper"><a href="<?php echo $page_hero['cta']['url']; ?>" class="btn btn--primary"><?php echo $page_hero['cta']['text']; ?></a></div>
            <?php } ?>
        </div>
    </div>	
</section>
<!-- Page Hero Intro Block -->
<?php // .ACF Page Intro Block --/ ?>
