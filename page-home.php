<?php
/*
 Template Name: Home Page
*/
get_header(); ?>

<main id="primary" class="site-main">
    <!-- Services Section -->
    <section id="services" class="section services-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Our Services', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('We offer a wide range of professional car repair and maintenance services', 'car-repair-theme'); ?></p>
            </div>
            
            <div itemscope itemtype="http://schema.org/AutoRepair">
                <meta itemprop="name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
            
            <div class="services-container">
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-oil-change.svg" alt="<?php echo esc_attr__('Oil Change Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Öljynvaihto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Regular oil changes to keep your engine running smoothly and extend its life.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Oil Change">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-tire-change.svg" alt="<?php echo esc_attr__('Tire Change Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Renkaiden vaihto + kausisäilytys', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Professional tire changing service with seasonal storage options.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Tire Change and Seasonal Storage">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-maintenance.svg" alt="<?php echo esc_attr__('Maintenance Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Määräaikaishuolto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Regular maintenance service based on your vehicle\'s odometer reading.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Regular Maintenance">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-ac.svg" alt="<?php echo esc_attr__('AC Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Ilmastointihuolto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('AC system maintenance and repair to ensure optimal cooling performance.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="AC Maintenance">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-wheel-alignment.svg" alt="<?php echo esc_attr__('Wheel Alignment Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Nelipyöräsuuntaus', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Wheel alignment service to ensure smooth handling and longer tire life.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Wheel Alignment">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-light-replacement.svg" alt="<?php echo esc_attr__('Light Replacement Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Lampunvaihto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Quick and efficient light bulb replacement service for all vehicle types.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Light Bulb Replacement">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Book Now', 'car-repair-theme'); ?></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="btn-primary"><?php echo esc_html__('Book Your Appointment', 'car-repair-theme'); ?></a>
            </div>
        </div>
        </div><!-- Close schema.org AutoRepair div -->
    </section>
    
    <!-- About Section -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="about-container">
                <div class="about-image animate-on-scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-image.svg" alt="<?php echo esc_attr__('About Our Car Repair Shop', 'car-repair-theme'); ?>">
                </div>
                
                <div class="about-content animate-on-scroll">
                    <h2><?php echo esc_html__('About Our Car Repair Shop', 'car-repair-theme'); ?></h2>
                    <p><?php echo esc_html__('Welcome to our professional car repair shop in Turku, Finland. We take pride in providing high-quality repair and maintenance services for all vehicle makes and models.', 'car-repair-theme'); ?></p>
                    <p><?php echo esc_html__('Our team of skilled mechanics has years of experience in the automotive industry, ensuring that your vehicle receives the best care possible.', 'car-repair-theme'); ?></p>
                    
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Expert Mechanics', 'car-repair-theme'); ?>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Quality Parts', 'car-repair-theme'); ?>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Modern Equipment', 'car-repair-theme'); ?>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Warranty Guarantee', 'car-repair-theme'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn-primary mt-4"><?php echo esc_html__('Learn More', 'car-repair-theme'); ?></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section id="why-choose" class="section why-choose-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Why Choose Us', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Discover the advantages of choosing our car repair services', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="reasons-container">
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3><?php echo esc_html__('Experienced Team', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Our mechanics have years of experience and ongoing training in the latest automotive technologies.', 'car-repair-theme'); ?></p>
                </div>
                
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3><?php echo esc_html__('Quality Work', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('We pride ourselves on delivering high-quality work with attention to detail and excellence.', 'car-repair-theme'); ?></p>
                </div>
                
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3><?php echo esc_html__('Modern Equipment', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Our shop is equipped with the latest diagnostic and repair equipment for all vehicle makes and models.', 'car-repair-theme'); ?></p>
                </div>
                
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <h3><?php echo esc_html__('Competitive Pricing', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('We offer fair and transparent pricing with no hidden costs for all our repair and maintenance services.', 'car-repair-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="section testimonials-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Customer Testimonials', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Read what our satisfied customers have to say about our services', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="testimonials-container">
                <div itemscope itemtype="http://schema.org/Review" class="testimonial-card animate-on-scroll">
                    <div class="testimonial-content">
                        <p itemprop="reviewBody" class="testimonial-text"><?php echo esc_html__('I\'ve been bringing my car here for years. They are always professional, honest, and do excellent work. Highly recommended for anyone in Turku looking for reliable car repair services.', 'car-repair-theme'); ?></p>
                        <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="testimonial-author">
                            <div class="author-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.svg" alt="Testimonial Author">
                            </div>
                            <div class="author-info">
                                <h4 itemprop="name">Mikko L.</h4>
                                <p><?php echo esc_html__('Loyal Customer', 'car-repair-theme'); ?></p>
                            </div>
                        </div>
                        <meta itemprop="datePublished" content="2023-10-15">
                        <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/AutoRepair">
                            <meta itemprop="name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </div>
                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                            <meta itemprop="ratingValue" content="5">
                            <meta itemprop="bestRating" content="5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php echo esc_html__('Ready to Book Your Service?', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Schedule your appointment today and experience our professional car repair services.', 'car-repair-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="cta-button-light"><?php echo esc_html__('Book Appointment', 'car-repair-theme'); ?></a>
            </div>
        </div>
    </section>
    
    <!-- Contact Info Section -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Contact Us', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Get in touch with our team for any inquiries or to schedule an appointment', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info animate-on-scroll">
                    <h3><?php echo esc_html__('Our Contact Information', 'car-repair-theme'); ?></h3>
                    
                    <div class="contact-details" itemscope itemtype="http://schema.org/AutoRepair">
                        <meta itemprop="name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?php echo esc_html__('Address', 'car-repair-theme'); ?></h4>
                                <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span itemprop="streetAddress">Korjaajankatu 123</span>, 
                                    <span itemprop="postalCode">20100</span> 
                                    <span itemprop="addressLocality">Turku</span>, 
                                    <span itemprop="addressCountry">Finland</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?php echo esc_html__('Phone', 'car-repair-theme'); ?></h4>
                                <p><a href="tel:+358123456789" itemprop="telephone">+358 12 345 6789</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?php echo esc_html__('Email', 'car-repair-theme'); ?></h4>
                                <p><a href="mailto:info@carrepairturku.fi" itemprop="email">info@carrepairturku.fi</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?php echo esc_html__('Working Hours', 'car-repair-theme'); ?></h4>
                                <div itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
                                    <meta itemprop="dayOfWeek" content="Monday Tuesday Wednesday Thursday Friday">
                                    <meta itemprop="opens" content="08:00">
                                    <meta itemprop="closes" content="17:00">
                                    <p>
                                        <?php echo esc_html__('Mon-Fri: 8:00 - 17:00', 'car-repair-theme'); ?><br>
                                        <meta itemprop="dayOfWeek" content="Saturday">
                                        <meta itemprop="opens" content="09:00">
                                        <meta itemprop="closes" content="14:00">
                                        <?php echo esc_html__('Sat: 9:00 - 14:00', 'car-repair-theme'); ?><br>
                                        <meta itemprop="dayOfWeek" content="Sunday">
                                        <meta itemprop="closes" content="00:00">
                                        <meta itemprop="opens" content="00:00">
                                        <?php echo esc_html__('Sun: Closed', 'car-repair-theme'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form animate-on-scroll">
                    <h3><?php echo esc_html__('Send Us a Message', 'car-repair-theme'); ?></h3>
                    <form id="contact-form" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="<?php echo esc_attr__('Your Name', 'car-repair-theme'); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="<?php echo esc_attr__('Your Email', 'car-repair-theme'); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" placeholder="<?php echo esc_attr__('Your Phone', 'car-repair-theme'); ?>">
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="<?php echo esc_attr__('Your Message', 'car-repair-theme'); ?>" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary"><?php echo esc_html__('Send Message', 'car-repair-theme'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php get_footer(); ?>