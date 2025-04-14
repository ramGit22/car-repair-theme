<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Car_Repair_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="container page-container">
				<div class="error-content">
					<h1 class="page-title"><?php echo esc_html__('Oops! Page Not Found', 'car-repair-theme'); ?></h1>
					
					<div class="error-description">
						<p><?php echo esc_html__('It looks like the page you\'re looking for doesn\'t exist or has been moved.', 'car-repair-theme'); ?></p>
					</div>
					
					<div class="error-image">
						<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200">
						  <circle cx="100" cy="100" r="90" fill="none" stroke="#E74C3C" stroke-width="8" />
						  <text x="100" y="130" font-family="Arial, sans-serif" font-size="80" font-weight="bold" text-anchor="middle" fill="#2C3E50">404</text>
						  <path d="M60,60 L140,140 M140,60 L60,140" stroke="#E74C3C" stroke-width="8" stroke-linecap="round" />
						</svg>
					</div>
					
					<div class="error-actions">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary"><?php echo esc_html__('Go to Home Page', 'car-repair-theme'); ?></a>
					</div>
					
					<div class="error-search">
						<p><?php echo esc_html__('You can also search for what you\'re looking for:', 'car-repair-theme'); ?></p>
						<?php get_search_form(); ?>
					</div>
					
					<div class="error-suggestions">
						<h3><?php echo esc_html__('Popular Services', 'car-repair-theme'); ?></h3>
						<ul>
							<li><a href="<?php echo esc_url(home_url('/book-now/')); ?>"><?php echo esc_html__('Book an Appointment', 'car-repair-theme'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/#services')); ?>"><?php echo esc_html__('Our Services', 'car-repair-theme'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/#contact')); ?>"><?php echo esc_html__('Contact Us', 'car-repair-theme'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
	
<style>
.error-404 {
	padding: 120px 0 80px;
	text-align: center;
}

.error-content {
	max-width: 600px;
	margin: 0 auto;
}

.page-title {
	font-size: 2.5rem;
	margin-bottom: 20px;
	color: #2C3E50;
}

.error-description {
	margin-bottom: 30px;
	font-size: 1.1rem;
}

.error-image {
	margin: 30px auto;
	max-width: 200px;
}

.error-actions {
	margin: 30px 0;
}

.error-search {
	margin: 30px 0;
}

.error-search .search-form {
	display: flex;
	max-width: 400px;
	margin: 0 auto;
}

.error-search .search-field {
	flex: 1;
	padding: 10px 15px;
	border: 1px solid #e0e0e0;
	border-radius: 4px 0 0 4px;
	font-size: 1rem;
}

.error-search .search-submit {
	padding: 10px 20px;
	background-color: #E74C3C;
	color: white;
	border: none;
	border-radius: 0 4px 4px 0;
	cursor: pointer;
	transition: all 0.3s ease;
}

.error-search .search-submit:hover {
	background-color: #2C3E50;
}

.error-suggestions {
	margin-top: 40px;
	text-align: left;
}

.error-suggestions h3 {
	margin-bottom: 15px;
	font-size: 1.4rem;
	color: #2C3E50;
	text-align: center;
}

.error-suggestions ul {
	list-style: none;
	padding: 0;
	margin: 0;
	display: flex;
	justify-content: center;
	gap: 20px;
	flex-wrap: wrap;
}

.error-suggestions li a {
	display: inline-block;
	padding: 10px 20px;
	background-color: #f5f5f5;
	border-radius: 4px;
	color: #2C3E50;
	text-decoration: none;
	transition: all 0.3s ease;
}

.error-suggestions li a:hover {
	background-color: #E74C3C;
	color: white;
	transform: translateY(-3px);
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

@media screen and (max-width: 768px) {
	.error-404 {
		padding: 100px 0 60px;
	}
	
	.page-title {
		font-size: 2rem;
	}
	
	.error-description {
		font-size: 1rem;
	}
}
</style>

<?php
get_footer();
