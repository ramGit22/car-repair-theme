<?php
/**
 * Custom search form
 *
 * @package Car_Repair_Theme
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="search-field"><?php echo esc_html_x( 'Search for:', 'label', 'car-repair-theme' ); ?></label>
	<input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'car-repair-theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit">
		<i class="fas fa-search"></i> <?php echo esc_html_x( 'Search', 'submit button', 'car-repair-theme' ); ?>
	</button>
</form>
