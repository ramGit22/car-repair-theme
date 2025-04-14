<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Car_Repair_Theme
 */

?>
    </div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
            <div class="footer-container">
                <div class="footer-widget">
                    <h3><?php echo esc_html__('About Us', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('We are a professional car repair shop located in Turku, Finland. Our team of experienced mechanics provides high-quality services to keep your vehicle in excellent condition.', 'car-repair-theme'); ?></p>
                    <div class="footer-social-links">
                        <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-widget">
                    <h3><?php echo esc_html__('Quick Links', 'car-repair-theme'); ?></h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home', 'car-repair-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php echo esc_html__('About Us', 'car-repair-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html__('Services', 'car-repair-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/book-now/')); ?>"><?php echo esc_html__('Book Appointment', 'car-repair-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php echo esc_html__('Contact Us', 'car-repair-theme'); ?></a></li>
                    </ul>
                </div>
                
                <div class="footer-widget">
                    <h3><?php echo esc_html__('Our Services', 'car-repair-theme'); ?></h3>
                    <ul class="footer-links">
                        <li><a href="#"><?php echo esc_html__('Oil Change', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Tire Change & Storage', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Regular Maintenance', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('AC Service', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Wheel Alignment', 'car-repair-theme'); ?></a></li>
                    </ul>
                </div>
                
                <div class="footer-widget">
                    <h3><?php echo esc_html__('Contact Info', 'car-repair-theme'); ?></h3>
                    <div itemscope itemtype="http://schema.org/AutoRepair">
                        <meta itemprop="name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <span itemprop="streetAddress">Korjaajankatu 123</span>, 
                                <span itemprop="postalCode">20100</span> 
                                <span itemprop="addressLocality">Turku</span>, 
                                <span itemprop="addressCountry">Finland</span>
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <a href="tel:+358123456789" itemprop="telephone">+358 12 345 6789</a>
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <a href="mailto:info@carrepairturku.fi" itemprop="email">info@carrepairturku.fi</a>
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
                                <meta itemprop="dayOfWeek" content="Monday Tuesday Wednesday Thursday Friday">
                                <meta itemprop="opens" content="08:00">
                                <meta itemprop="closes" content="17:00">
                                <?php echo esc_html__('Mon-Fri: 8:00 - 17:00', 'car-repair-theme'); ?><br>
                                <meta itemprop="dayOfWeek" content="Saturday">
                                <meta itemprop="opens" content="09:00">
                                <meta itemprop="closes" content="14:00">
                                <?php echo esc_html__('Sat: 9:00 - 14:00', 'car-repair-theme'); ?><br>
                                <meta itemprop="dayOfWeek" content="Sunday">
                                <meta itemprop="closes" content="00:00">
                                <meta itemprop="opens" content="00:00">
                                <?php echo esc_html__('Sun: Closed', 'car-repair-theme'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright">
            <div class="container">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                    <?php echo esc_html__('All Rights Reserved.', 'car-repair-theme'); ?>
                </p>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
