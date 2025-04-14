<?php
/*
 Template Name: Book Now
*/
get_header(); ?>

<main id="primary" class="site-main">
    <section class="booking-page">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Varaa Huolto', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Varaa autohuoltoaikasi verkossa. Valitse ammattitaitoisista palveluistamme.', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="booking-form">
                <div class="service-info">
                    <h3><?php echo esc_html__('Palvelumme', 'car-repair-theme'); ?></h3>
                    <div class="service-list">
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-oil-can"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Öljynvaihto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Säännölliset öljynvaihdot pitävät moottorisi kunnossa', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-cog"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Renkaiden vaihto + kausisäilytys', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Renkaanvaihto- ja kausisäilytyspalvelut', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-car"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Määräaikaishuolto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Säännöllinen huolto ajoneuvosi kilometrilukeman perusteella', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-snowflake"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Ilmastointihuolto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Ilmastointijärjestelmän huolto- ja korjauspalvelut', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-balance-scale"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Nelipyöräsuuntaus', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Pyöränsuuntauspalvelut tasaisempaa ajoa varten', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Lampunvaihto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Nopea polttimonvaihtopalvelu', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="booking-system">
                    <?php the_content(); ?>
                </div>
            </div>
            
            <div class="booking-notice">
                <div class="notice-icon"><i class="fas fa-info-circle"></i></div>
                <div class="notice-text">
                    <h4><?php echo esc_html__('Tärkeää Tietoa', 'car-repair-theme'); ?></h4>
                    <p><?php echo esc_html__('Saavu paikalle 10 minuuttia ennen varattua aikaasi. Jos sinun täytyy siirtää tai perua aika, ota meihin yhteyttä vähintään 24 tuntia etukäteen.', 'car-repair-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php get_footer(); ?>