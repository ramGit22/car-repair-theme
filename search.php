<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Car_Repair_Theme
 */

get_header();
?>

    <div class="breadcrumbs-container">
        <div class="container">
            <?php car_repair_breadcrumbs(); ?>
        </div>
    </div>
    
	<main id="primary" class="site-main">
		<div class="container page-container">
			<section class="search-results-section">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'car-repair-theme' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
						<div class="search-results-count">
							<?php
							global $wp_query;
							printf(
								esc_html( _n( 'Found %d result', 'Found %d results', $wp_query->found_posts, 'car-repair-theme' ) ),
								$wp_query->found_posts
							);
							?>
						</div>
					</header><!-- .page-header -->
					
					<div class="search-form-container">
						<?php get_search_form(); ?>
					</div>

					<div class="search-results-list">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation(array(
							'prev_text' => '<i class="fas fa-arrow-left"></i> ' . esc_html__('Previous', 'car-repair-theme'),
							'next_text' => esc_html__('Next', 'car-repair-theme') . ' <i class="fas fa-arrow-right"></i>',
							'screen_reader_text' => esc_html__('Posts navigation', 'car-repair-theme'),
							'aria_label' => esc_html__('Posts', 'car-repair-theme'),
							'class' => 'pagination',
						));

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</section>
			
			<section class="search-suggestions">
				<h2><?php echo esc_html__('Popular Pages', 'car-repair-theme'); ?></h2>
				<div class="popular-pages">
					<div class="popular-page">
						<h3><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home', 'car-repair-theme'); ?></a></h3>
						<p><?php echo esc_html__('Visit our homepage to learn about our services.', 'car-repair-theme'); ?></p>
					</div>
					
					<div class="popular-page">
						<h3><a href="<?php echo esc_url(home_url('/book-now/')); ?>"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a></h3>
						<p><?php echo esc_html__('Schedule your car service appointment online.', 'car-repair-theme'); ?></p>
					</div>
					
					<div class="popular-page">
						<h3><a href="<?php echo esc_url(home_url('/#services')); ?>"><?php echo esc_html__('Services', 'car-repair-theme'); ?></a></h3>
						<p><?php echo esc_html__('Browse our range of car repair and maintenance services.', 'car-repair-theme'); ?></p>
					</div>
					
					<div class="popular-page">
						<h3><a href="<?php echo esc_url(home_url('/#contact')); ?>"><?php echo esc_html__('Contact', 'car-repair-theme'); ?></a></h3>
						<p><?php echo esc_html__('Get in touch with our team for inquiries.', 'car-repair-theme'); ?></p>
					</div>
				</div>
			</section>
		</div>
	</main><!-- #main -->

<style>
/* Search results page styling */
.search-results-section {
	padding: 120px 0 40px;
}

.page-header {
	margin-bottom: 30px;
	padding-bottom: 20px;
	border-bottom: 1px solid var(--medium-gray);
}

.page-title {
	color: var(--primary-color);
	font-size: 2.2rem;
	margin-bottom: 10px;
}

.page-title span {
	color: var(--secondary-color);
}

.search-results-count {
	color: var(--dark-gray);
	font-size: 1.1rem;
}

.search-form-container {
	margin-bottom: 40px;
}

.search-form {
	display: flex;
	max-width: 600px;
}

.search-field {
	flex: 1;
	padding: 12px 15px;
	border: 1px solid var(--medium-gray);
	border-radius: var(--border-radius) 0 0 var(--border-radius);
	font-size: 1rem;
}

.search-submit {
	padding: 12px 25px;
	background-color: var(--secondary-color);
	color: var(--white);
	border: none;
	border-radius: 0 var(--border-radius) var(--border-radius) 0;
	font-weight: 500;
	cursor: pointer;
	transition: var(--transition);
}

.search-submit:hover {
	background-color: var(--primary-color);
}

.search-results-list {
	margin-bottom: 60px;
}

.search-results-list article {
	margin-bottom: 30px;
	padding-bottom: 30px;
	border-bottom: 1px solid var(--medium-gray);
}

.entry-title {
	font-size: 1.5rem;
	margin-bottom: 10px;
}

.entry-title a {
	color: var(--primary-color);
	transition: var(--transition);
}

.entry-title a:hover {
	color: var(--secondary-color);
}

.entry-summary {
	margin-top: 10px;
}

.entry-meta {
	color: var(--dark-gray);
	font-size: 0.9rem;
	margin-bottom: 10px;
}

.pagination {
	display: flex;
	justify-content: space-between;
	margin-top: 40px;
}

.pagination a {
	display: inline-block;
	padding: 10px 20px;
	background-color: var(--light-gray);
	color: var(--primary-color);
	border-radius: var(--border-radius);
	transition: var(--transition);
}

.pagination a:hover {
	background-color: var(--secondary-color);
	color: var(--white);
}

.search-suggestions {
	padding: 40px 0 80px;
	border-top: 1px solid var(--medium-gray);
}

.search-suggestions h2 {
	margin-bottom: 30px;
	font-size: 1.8rem;
	color: var(--primary-color);
	text-align: center;
}

.popular-pages {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
	gap: 30px;
}

.popular-page {
	background-color: var(--light-gray);
	padding: 20px;
	border-radius: var(--border-radius);
	transition: var(--transition);
}

.popular-page:hover {
	transform: translateY(-5px);
	box-shadow: var(--box-shadow);
}

.popular-page h3 {
	margin-bottom: 10px;
	font-size: 1.3rem;
}

.popular-page h3 a {
	color: var(--primary-color);
}

.popular-page h3 a:hover {
	color: var(--secondary-color);
}

.popular-page p {
	color: var(--dark-gray);
	margin-bottom: 0;
}

@media screen and (max-width: 768px) {
	.search-results-section {
		padding: 100px 0 40px;
	}
	
	.popular-pages {
		grid-template-columns: 1fr;
	}
	
	.page-title {
		font-size: 1.8rem;
	}
}
</style>

<?php
get_footer();
