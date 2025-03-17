<?php
$data = array(
    'project' => array(
        'title' => 'Orchard Gardens',
        'image' => '[url]',
        'link' => '#'
    ),
);

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