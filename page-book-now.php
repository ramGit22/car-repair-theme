<?php
/*
 Template Name: Book Now
*/
get_header(); ?>

<main id="primary" class="site-main">
    <section class="booking-page">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Schedule Your Service', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Book your car service appointment online. Choose from our range of professional services.', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="booking-form">
                <div class="service-info">
                    <h3><?php echo esc_html__('Our Services', 'car-repair-theme'); ?></h3>
                    <div class="service-list">
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-oil-can"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Öljynvaihto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Regular oil changes to keep your engine running smoothly', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-cog"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Renkaiden vaihto + kausisäilytys', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Tire change and seasonal storage services', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-car"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Määräaikaishuolto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Regular maintenance based on your vehicle mileage', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-snowflake"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Ilmastointihuolto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('AC system maintenance and repair services', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-balance-scale"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Nelipyöräsuuntaus', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Wheel alignment services for smoother driving', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                            <div class="service-text">
                                <h4><?php echo esc_html__('Lampunvaihto', 'car-repair-theme'); ?></h4>
                                <p><?php echo esc_html__('Quick light bulb replacement service', 'car-repair-theme'); ?></p>
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
                    <h4><?php echo esc_html__('Important Information', 'car-repair-theme'); ?></h4>
                    <p><?php echo esc_html__('Please arrive 10 minutes before your scheduled appointment. If you need to reschedule or cancel, please contact us at least 24 hours in advance.', 'car-repair-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php get_footer(); ?>