<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package ClubFashion
 */

get_header(); ?>

<section id="content" class="content content-404 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php esc_html_e( 'We are very sorry for the inconvenience.', 'clubfashion' ); ?></h2>
				<p><?php esc_html_e( 'Perhaps, Try using the search box below.', 'clubfashion' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
