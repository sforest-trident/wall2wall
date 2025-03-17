<?php 

function returnImgPanel($imgPath="") {
    //$imgPath = get_field('hero_background_image');
    
    ob_start(); ?>
    <section class="section__image-panel">
        [image]
    </section>
    
    <?php
    return ob_get_clean();
} 

?>

<section class="section__content section__image-panel">
    <div class="inner">
        [image]
    </div>
</section>

    


