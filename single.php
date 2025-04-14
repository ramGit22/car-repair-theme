<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                        the_post_navigation(
                            array(
                                'prev_text' => '<span class="nav-subtitle"><i class="fas fa-arrow-left"></i> ' . esc_html__( 'Previous:', 'car-repair-theme' ) . '</span> <span class="nav-title">%title</span>',
                                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'car-repair-theme' ) . ' <i class="fas fa-arrow-right"></i></span> <span class="nav-title">%title</span>',
                            )
                        );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>
                
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
	</main><!-- #main -->

<style>
.site-main {
    padding: 40px 0 80px;
}

.single .entry-title {
    font-size: 2.2rem;
    margin-bottom: 20px;
    color: var(--primary-color);
}

.single .entry-meta {
    margin-bottom: 20px;
    color: var(--dark-gray);
    font-size: 0.9rem;
}

.single .entry-meta a {
    color: var(--accent-color);
}

.single .entry-meta a:hover {
    color: var(--secondary-color);
}

.single .entry-meta .posted-on {
    margin-right: 15px;
}

.single .entry-content {
    margin-top: 30px;
}

.single .entry-footer {
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid var(--medium-gray);
    font-size: 0.9rem;
}

.cat-links, .tags-links, .comments-link {
    display: block;
    margin-bottom: 10px;
}

.post-navigation {
    margin: 40px 0;
    padding: 20px 0;
    border-top: 1px solid var(--medium-gray);
    border-bottom: 1px solid var(--medium-gray);
}

.post-navigation .nav-links {
    display: flex;
    justify-content: space-between;
}

.post-navigation .nav-previous,
.post-navigation .nav-next {
    max-width: 48%;
}

.post-navigation a {
    display: block;
    padding: 15px;
    background-color: var(--light-gray);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.post-navigation a:hover {
    background-color: var(--medium-gray);
}

.post-navigation .nav-subtitle {
    display: block;
    font-size: 0.8rem;
    color: var(--dark-gray);
    margin-bottom: 5px;
}

.post-navigation .nav-title {
    font-weight: 500;
    color: var(--primary-color);
}

.comments-area {
    margin-top: 60px;
}

.comments-title {
    font-size: 1.5rem;
    margin-bottom: 30px;
    color: var(--primary-color);
}

.comment-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment-body {
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid var(--medium-gray);
}

.comment-meta {
    margin-bottom: 15px;
}

.comment-author {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
}

.comment-author .avatar {
    margin-right: 15px;
    border-radius: 50%;
}

.comment-author .fn {
    font-weight: 500;
    color: var(--primary-color);
}

.comment-metadata {
    font-size: 0.8rem;
    color: var(--dark-gray);
}

.comment-content {
    margin-top: 15px;
}

.comment-respond {
    margin-top: 40px;
}

.comment-reply-title {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: var(--primary-color);
}

.comment-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
}

.comment-form .comment-form-comment,
.comment-form .comment-form-author,
.comment-form .comment-form-email,
.comment-form .comment-form-url {
    margin-bottom: 20px;
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"],
.comment-form textarea {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid var(--medium-gray);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.comment-form input[type="text"]:focus,
.comment-form input[type="email"]:focus,
.comment-form input[type="url"]:focus,
.comment-form textarea:focus {
    border-color: var(--accent-color);
    outline: none;
}

.comment-form .submit {
    background-color: var(--secondary-color);
    color: var(--white);
    padding: 12px 25px;
    border: none;
    border-radius: var(--border-radius);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: var(--transition);
}

.comment-form .submit:hover {
    background-color: var(--primary-color);
    transform: translateY(-2px);
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-lg-8 {
    width: 66.666667%;
    padding-right: 15px;
    padding-left: 15px;
}

.col-lg-4 {
    width: 33.333333%;
    padding-right: 15px;
    padding-left: 15px;
}

@media screen and (max-width: 991px) {
    .col-lg-8, .col-lg-4 {
        width: 100%;
    }
    
    .col-lg-4 {
        margin-top: 40px;
    }
}

@media screen and (max-width: 768px) {
    .single .entry-title {
        font-size: 1.8rem;
    }
    
    .post-navigation .nav-links {
        flex-direction: column;
    }
    
    .post-navigation .nav-previous,
    .post-navigation .nav-next {
        max-width: 100%;
        margin-bottom: 15px;
    }
}
</style>

<?php
get_footer();
