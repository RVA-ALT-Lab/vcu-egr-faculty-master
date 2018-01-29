<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The main sidebar positioned on the right by default. This theme does have an
 * alternate page template to put this sidebar on the left. By default, if no widgets
 * have been added, display some as samples. However, there is a filter to allow child
 * themes to override the samples or remove them altogether.
 *
 * @package flat-bootstrap
 */
?>
  <div id="secondary" class="widget-area col-md-4" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>

    <!-- Always have a search form -->
    <aside id="search" class="widget widget_search">
      <br />
      <?php get_search_form(); ?>
    </aside>

    <!-- If EGR Sidebar (custom) is populated, add its widgets under the search form -->
    <?php // if ( ! dynamic_sidebar( 'sidebar-egr-custom' ) ) : ?>
    <?php if ( is_active_sidebar( 'sidebar-egr-custom' ) ) : ?>
      <?php dynamic_sidebar( 'sidebar-egr-custom' ) ?>
    <!-- If EGR Sidebar (custom) is not populated, add Contact section with site admin's email -->
    <?php else : ?>
      <aside id="sidebar-egr-contact" class="widget widget_contact">
        <h2 class="widget-title">Contact</h2>
        <a href="mailto:<?php echo get_bloginfo( 'admin_email' ); ?>"><?php echo get_bloginfo( 'admin_email' ); ?></a>
      </aside>
    <?php endif; // end sidebar widget area ?>
  </div><!-- #secondary -->
