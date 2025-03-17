<?php
/**
 * TP: Client Logos
 * Template part for displaying the client logos on a page as a scrolling marquee.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */



// Get ACF custom post data 
$logos = get_posts(array(
    'posts_per_page'    => 50,
    'post_type'         => 'client-logos',
    'orderby'          => 'menu_order',
    'order'            => 'ASC'
));

// Min number of logos required to show the marquee
$show_count = 4;
?>

<?php if($logos && (count($logos) > $show_count)): ?>
<section class="section--client-grid image-grid sm-mb-2 md-mb-4">
    <div class="inner">
    <div class="marquee">
        <ul class="mq__group">
            <?php 
                foreach( $logos as $logo ): 
                    // Scope postdata
                    setup_postdata($logo);

                    // Retreive related ACF fields
                    $acf_field_data = get_fields($logo);
                    ?>
                        <li class="mq__item image-block__item"><img src="<?php echo $acf_field_data['logo_image']; ?>" alt="<?php echo the_title() ?>" /></li>
                    <?php
                endforeach;

                // Reset custom post data
                wp_reset_postdata();
            ?>
        </ul>

        <script>
            (function() {
                // -- Duplicate the marquee group to create a seamless loop, then append to the marquee container.
                // Find marquee elements
                var elems = document.querySelectorAll('.mq__group');
                // Loop through the selected elements and clone them.
                for (var i = 0 ; i < elems.length; i++) {
                    elem = elems[i];
                    var clone = elem.cloneNode(true);
                    elem.after(clone);
                }
            })();
        </script>
    </div>
</section>
<?php endif; ?>