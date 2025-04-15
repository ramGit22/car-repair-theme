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
                    <h3><?php echo esc_html__('Tietoa Meistä', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Olemme ammattimainen autokorjaamo Turussa. Kokeneiden mekaanikkojen tiimimme tarjoaa korkealaatuisia palveluita pitääkseen ajoneuvosi erinomaisessa kunnossa.', 'car-repair-theme'); ?></p>
                    <div class="footer-social-links">
                        <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-widget">
                    <h3><?php echo esc_html__('Pikalinkit', 'car-repair-theme'); ?></h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/home')); ?>"><?php echo esc_html__('Etusivu', 'car-repair-theme'); ?></a></li>
                        <!-- <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php echo esc_html__('Tietoa Meistä', 'car-repair-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html__('Palvelut', 'car-repair-theme'); ?></a></li> -->
                        <li><a href="<?php echo esc_url(home_url('/book-now/')); ?>"><?php echo esc_html__('Varaa Aika', 'car-repair-theme'); ?></a></li>
                        <!-- Contact Us link removed -->
                    </ul>
                </div>
                
                <div class="footer-widget">
                    <h3><?php echo esc_html__('Palvelumme', 'car-repair-theme'); ?></h3>
                    <ul class="footer-links">
                        <li><a href="#"><?php echo esc_html__('Öljynvaihto', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Renkaiden vaihto & säilytys', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Määräaikaishuolto', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Ilmastointihuolto', 'car-repair-theme'); ?></a></li>
                        <li><a href="#"><?php echo esc_html__('Nelipyöräsuuntaus', 'car-repair-theme'); ?></a></li>
                    </ul>
                </div>
                
                <div class="footer-widget">
                    <h3><?php echo esc_html__('Yhteystiedot', 'car-repair-theme'); ?></h3>
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
                                <?php echo esc_html__('Ma-Pe: 8:00 - 17:00', 'car-repair-theme'); ?><br>
                                <meta itemprop="dayOfWeek" content="Saturday">
                                <meta itemprop="opens" content="09:00">
                                <meta itemprop="closes" content="14:00">
                                <?php echo esc_html__('La: 9:00 - 14:00', 'car-repair-theme'); ?><br>
                                <meta itemprop="dayOfWeek" content="Sunday">
                                <meta itemprop="closes" content="00:00">
                                <meta itemprop="opens" content="00:00">
                                <?php echo esc_html__('Su: Suljettu', 'car-repair-theme'); ?>
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

<script>
// Menu text translations to Finnish
document.addEventListener('DOMContentLoaded', function() {
    // Menu translations
    const menuTranslations = {
        'Home': 'Etusivu',
        'Book Now': 'Varaa Nyt',
        'Services': 'Palvelut',
        'About': 'Tietoa Meistä',
        'Contact': 'Yhteystiedot',
        'Blog': 'Blogi'
    };

    // Get all menu item links
    const menuLinks = document.querySelectorAll('.main-navigation a');
    
    // Replace text content with Finnish translations
    menuLinks.forEach(link => {
        const originalText = link.textContent.trim();
        if (menuTranslations[originalText]) {
            link.textContent = menuTranslations[originalText];
        }
    });
});
</script>

</body>
</html>
