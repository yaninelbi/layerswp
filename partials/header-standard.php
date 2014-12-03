<?php get_template_part( 'partials/header' , 'logo' ); ?>

<nav class="nav nav-horizontal">
    <?php do_action( 'hatch_before_header_nav' ); ?>
    <?php wp_nav_menu( array( 'theme_location' => HATCH_THEME_SLUG . '-primary' ,'container' => FALSE, 'fallback_cb' => false )); ?>
    <a href="" class="responsive-nav"  data-toggle="#off-canvas-right" data-toggle-class="open">
        <span class="h-menu"></span>
    </a>
    <?php do_action( 'hatch_after_header_nav' ); ?>
</nav>