<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ResolutionAthens
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <article>
      <section>
        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'resolutionathens' ); ?></h1>
        <br><br>
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'resolutionathens' ); ?></p>
        <?php
          get_search_form();
        ?>
      </section>
    </article>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
