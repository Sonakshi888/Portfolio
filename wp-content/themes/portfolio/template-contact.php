<?php

/**
 * 
 * 
 * Template Name:Contact Template
 * 
 */
get_header();
?>
<div class="container contact-wrapper">
    <div class="row">
        <div class="col-md-12 text-center contact">
            <h1 class="intro-title"><?php esc_html_e('Contact', 'portfolio'); ?></h1>
        </div>
        <div class="col-md-12 form-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="55" title="Contact Form2"]'); ?>
        </div>
    </div>
</div>
<?php
get_footer();
