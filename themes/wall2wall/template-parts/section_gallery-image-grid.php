<section class="section--image-grid sm-mb-2 md-mb-4">
    <div class="inner image-grid row-grid flexible-grid">
        <?php
        // Image Grid
        // Cycles through images in the theme's /images/gallery folder, using filename and php count as the file reference (n.b fails if an image is missing)
        $num_of_images = 6;
        $i=0;
        while($i < $num_of_images) {
            ?>
            <div class="ig__item grid__item">
                <img class="fpg__img" src="<?php echo get_template_directory_uri(). '/images/gallery/gallery-'.($i+1). '.jpg';?>" alt="" />
            </div>
            <?php
            $i++;
        }
        ?>
    </div>
</section>