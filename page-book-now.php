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