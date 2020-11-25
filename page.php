<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loltheme
 */

get_header();
?>

	<main id="primary" class="site-main">


    <?php
      if ( is_front_page() ) : //hard-coded banner for front page only
				?>
				<div class="homepage-div">
          <div class="banner-carousel">
            <span class="banner-headline banner-headline-1">DISRUPTING</span>
            <br>
            <span class="banner-headline banner-headline-2">CANCER HEAD-ON</span>
            <p class="banner-headline-text">Lymphoma is the most common cancer in young people and it’s our mission to educate, empower and ensure everyone knows the signs and symptoms!</p>
          </div>
          <div class="banner-megaphone-woman">
            <img class="megaphone-woman" src="<?php echo get_template_directory_uri() ?>/images/megaphone_woman.png">
          </div>
        </div>
				<?php
			endif;
    ?>


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
