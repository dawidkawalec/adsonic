<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
 
?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

<?php get_template_part( 'footer-widget' ); ?>
<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-lg-12 title text-lg-right">
                <span>sygnał</span>
            </div>
            <div class="data col-lg-6 offset-lg-6 text-lg-right">
                <div class="font-weight-bold">AD<span>SONIC</span> sp. z o.o.</div>
                Polska 114<br>
                61-001 Poznań
            </div>
            
        </div>
        <div class="row mt-5 align-items-lg-end">
        <div class="line col-lg-6">
              <div class="line-content">
                  <strong>HOTLINE: </strong>889 541 657<br>
                    support@adsonic.pl
              </div>
            </div>
            <div class="social col-lg-6">
              <ul class="">
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
              </ul>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->


<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>