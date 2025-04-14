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
                <h2><?php echo esc_html__('Palvelumme', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Tarjoamme laajan valikoiman ammattimaisia autonkorjaus- ja huoltopalveluita', 'car-repair-theme'); ?></p>
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
                        <p itemprop="description"><?php echo esc_html__('Säännölliset öljynvaihdot pitävät moottorisi käynnissä tasaisesti ja pidentävät sen käyttöikää.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Oil Change">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Varaa Nyt', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-tire-change.svg" alt="<?php echo esc_attr__('Tire Change Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Renkaiden vaihto + kausisäilytys', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Ammattimainen renkaanvaihtopalvelu kausisäilytysmahdollisuudella.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Tire Change and Seasonal Storage">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Varaa Nyt', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-maintenance.svg" alt="<?php echo esc_attr__('Maintenance Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Määräaikaishuolto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Säännöllinen huoltopalvelu ajoneuvosi matkamittarilukeman perusteella.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Regular Maintenance">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Varaa Nyt', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-ac.svg" alt="<?php echo esc_attr__('AC Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Ilmastointihuolto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Ilmastointijärjestelmän huolto ja korjaus optimaalisen jäähdytystehon varmistamiseksi.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="AC Maintenance">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Varaa Nyt', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-wheel-alignment.svg" alt="<?php echo esc_attr__('Wheel Alignment Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Nelipyöräsuuntaus', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Pyörien suuntauspalvelu tasaisen käsittelyn ja pidemmän rengasiän varmistamiseksi.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Wheel Alignment">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Varaa Nyt', 'car-repair-theme'); ?></a>
                    </div>
                </div>
                
                <div itemscope itemtype="http://schema.org/Service" class="service-card animate-on-scroll">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-light-replacement.svg" alt="<?php echo esc_attr__('Light Replacement Service', 'car-repair-theme'); ?>">
                    </div>
                    <div class="service-content">
                        <h3 itemprop="name"><?php echo esc_html__('Lampunvaihto', 'car-repair-theme'); ?></h3>
                        <p itemprop="description"><?php echo esc_html__('Nopea ja tehokas polttimoidenvaihtopalvelu kaikille ajoneuvotyypeille.', 'car-repair-theme'); ?></p>
                        <meta itemprop="serviceType" content="Light Bulb Replacement">
                        <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="read-more"><?php echo esc_html__('Varaa Nyt', 'car-repair-theme'); ?></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="btn-primary"><?php echo esc_html__('Varaa Aikasi', 'car-repair-theme'); ?></a>
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
                    <h2><?php echo esc_html__('Tietoa Autokorjaamostamme', 'car-repair-theme'); ?></h2>
                    <p><?php echo esc_html__('Tervetuloa ammattimaiseen autokorjaamoomme Turussa. Olemme ylpeitä tarjotessamme korkealaatuisia korjaus- ja huoltopalveluita kaikille automerkeille ja -malleille.', 'car-repair-theme'); ?></p>
                    <p><?php echo esc_html__('Ammattitaitoisella mekaanikkojen tiimillämme on vuosien kokemus autoalalta, mikä takaa, että ajoneuvosi saa parasta mahdollista hoitoa.', 'car-repair-theme'); ?></p>
                    
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Asiantuntevat Mekaanikot', 'car-repair-theme'); ?>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Laadukkaat Varaosat', 'car-repair-theme'); ?>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Nykyaikaiset Laitteet', 'car-repair-theme'); ?>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">
                                <?php echo esc_html__('Takuuturva', 'car-repair-theme'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn-primary mt-4"><?php echo esc_html__('Lue Lisää', 'car-repair-theme'); ?></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section id="why-choose" class="section why-choose-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Miksi Valita Meidät', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Tutustu autokorjauspalveluidemme etuihin', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="reasons-container">
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3><?php echo esc_html__('Kokenut Tiimi', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Mekaanikoillamme on vuosien kokemus ja jatkuva koulutus uusimpiin autoteknologioihin.', 'car-repair-theme'); ?></p>
                </div>
                
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3><?php echo esc_html__('Laadukas Työ', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Olemme ylpeitä tarjotessamme korkealaatuista työtä tarkalla ja erinomaisella otteella.', 'car-repair-theme'); ?></p>
                </div>
                
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3><?php echo esc_html__('Nykyaikaiset Laitteet', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Korjaamomme on varustettu uusimmilla diagnostiikka- ja korjauslaitteilla kaikkia automerkkejä ja -malleja varten.', 'car-repair-theme'); ?></p>
                </div>
                
                <div class="reason-card animate-on-scroll">
                    <div class="reason-icon">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <h3><?php echo esc_html__('Kilpailukykyiset Hinnat', 'car-repair-theme'); ?></h3>
                    <p><?php echo esc_html__('Tarjoamme reilua ja läpinäkyvää hinnoittelua ilman piilokustannuksia kaikille korjaus- ja huoltopalveluillemme.', 'car-repair-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="section testimonials-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html__('Asiakkaiden Palautteet', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Lue mitä tyytyväiset asiakkaamme sanovat palveluistamme', 'car-repair-theme'); ?></p>
            </div>
            
            <div class="testimonials-container">
                <div itemscope itemtype="http://schema.org/Review" class="testimonial-card animate-on-scroll">
                    <div class="testimonial-content">
                        <p itemprop="reviewBody" class="testimonial-text"><?php echo esc_html__('Olen tuonut autoni tänne vuosien ajan. He ovat aina ammattimaisia, rehellisiä ja tekevät erinomaista työtä. Suosittelen lämpimästi kaikille, jotka etsivät luotettavaa autokorjaamopalvelua Turussa.', 'car-repair-theme'); ?></p>
                        <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="testimonial-author">
                            <div class="author-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.svg" alt="Testimonial Author">
                            </div>
                            <div class="author-info">
                                <h4 itemprop="name">Mikko L.</h4>
                                <p><?php echo esc_html__('Kanta-asiakas', 'car-repair-theme'); ?></p>
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
                <h2><?php echo esc_html__('Valmis Varaamaan Huollon?', 'car-repair-theme'); ?></h2>
                <p><?php echo esc_html__('Varaa aikasi tänään ja koe ammattitaitoiset autokorjauspalvelumme.', 'car-repair-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="cta-button-light"><?php echo esc_html__('Varaa Aika', 'car-repair-theme'); ?></a>
            </div>
        </div>
    </section>
    
    <!-- Contact section removed as requested -->
</main><!-- #main -->

<?php get_footer(); ?>