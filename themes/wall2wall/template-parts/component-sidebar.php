<?php
/*
    $data = array(
        'title' => 'Contact Details',
        'features' => array(
            array(
                'title' => 'Phone:',
                'linkPrefix': 'tel:',
                'linkUrl' => '07830 344610', // Fetch from WP -> Site Settings?
                'linkText' => '07830 344610' // Fetch from WP -> Site Settings?
            ),
            array(
                'title' => 'Email:',
                'linkPrefix': 'mailto:',
                'linkUrl' => 'info@wall2wallplastering.co.uk' // Fetch from WP -> Site Settings?
                'linkText' => 'info@wall2wallplastering.co.uk' // Fetch from WP -> Site Settings?
            )
        ),
    );
    */
    
    // php: sidebar_contact-details(title="Contact Details");
    // shortcode: [sidebar_contact-details title="Contact Details"]
?>

<div class="content-sidebar bg-l-blue text-white item__details">
    <span class="sb__heading">Contact Details</span>
    <div class="sb__feature-list">
        <dl class="fl__row">
            <dt class="fl__col fl_title text-blue text-bold">Phone:</dt>
            <dd class="fl__col fl_desc"><a href="tel:07830 344610">07830 344610</a></dd>
        </dl>
        <dl class="fl__row">
            <dt class="fl__col fl_title text-blue text-bold">Email:</dt>
            <dd class="fl__col fl_desc"><a href="mailto:info@wall2wallplastering.co.uk">info@wall2wallplastering.co.uk</a></dd>
        </dl>
    </div>

    <div class="sb__map">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sample-map-placeholder.png" alt="Map" />
    </div>  
</div>