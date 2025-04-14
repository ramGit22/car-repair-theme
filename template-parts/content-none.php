<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Car_Repair_Theme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'car-repair-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_search() ) :
			?>

			<div class="search-no-results-message">
				<div class="search-icon">
					<i class="fas fa-search"></i>
				</div>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'car-repair-theme' ); ?></p>
			</div>

			<div class="search-suggestions">
				<h3><?php esc_html_e( 'Search Tips:', 'car-repair-theme' ); ?></h3>
				<ul>
					<li><?php esc_html_e( 'Check your spelling', 'car-repair-theme' ); ?></li>
					<li><?php esc_html_e( 'Try more general keywords', 'car-repair-theme' ); ?></li>
					<li><?php esc_html_e( 'Try different keywords', 'car-repair-theme' ); ?></li>
					<li><?php esc_html_e( 'Try fewer keywords', 'car-repair-theme' ); ?></li>
				</ul>
			</div>
			
			<div class="search-form-container">
				<?php get_search_form(); ?>
			</div>

		<?php elseif ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'car-repair-theme' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_home() ) : ?>

			<p><?php esc_html_e( 'No posts published yet. Check back soon!', 'car-repair-theme' ); ?></p>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'car-repair-theme' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

<style>
.no-results {
	text-align: center;
	padding: 40px 0;
}

.page-title {
	font-size: 2rem;
	margin-bottom: 30px;
	color: var(--primary-color);
}

.search-no-results-message {
	margin-bottom: 30px;
}

.search-icon {
	font-size: 3rem;
	color: var(--secondary-color);
	margin-bottom: 20px;
}

.search-suggestions {
	max-width: 600px;
	margin: 0 auto 30px;
	text-align: left;
	background-color: var(--light-gray);
	padding: 20px;
	border-radius: var(--border-radius);
}

.search-suggestions h3 {
	margin-bottom: 10px;
	color: var(--primary-color);
}

.search-suggestions ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

.search-suggestions li {
	margin-bottom: 5px;
	padding-left: 20px;
	position: relative;
}

.search-suggestions li:before {
	content: "→";
	position: absolute;
	left: 0;
	color: var(--secondary-color);
}

.search-form-container {
	max-width: 600px;
	margin: 30px auto 0;
}
</style>
