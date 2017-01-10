<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ResolutionAthens
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-logo-and-address">
      <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/resolution-gray.svg" alt="Resolution" class="footer-logo">
      </div>
      <div class="footer-address">
        <p>Resolution <br>
          706.351.1774 <br>
          PO Box 352 <br>
          Athens, Georgia 30603
        </p>
      </div>
    </div>
		<div class="footer-copyright">
      &copy; 2017 Resolution
			<span class="sep"> | </span>
      All rights reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://use.typekit.net/mee6pby.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>
