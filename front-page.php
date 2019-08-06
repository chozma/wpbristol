<?php /* Template Name: Home */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package custom-theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container container-home">
                <section>
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'page' );
                        endwhile;
                    ?>

                    <?php 
                        $image_one = get_field('image_one');
                        $url_one = $image_one['url'];
                        $title_one = $image_one['title'];

                        $image_two = get_field('image_two');
                        $url_two = $image_two['url'];
                        $title_two = $image_two['title'];
                    ?>

                    <div class="home-images">
                        <img src="<?php echo $url_one; ?>" alt="<?php echo $title_one; ?>">
                        <img src="<?php echo $url_two; ?>" alt="<?php echo $title_two; ?>">
                    </div>

                    <h2>Next Meetup</h2>

                    <?php require_once 'next-meetup.php'; ?>
                </section>

                <?php get_sidebar('home'); ?>
            </div>
            <div class="sponsors">
                <span class="sponsors-title">Sponsored by</span>
                <div class="sponsor-content">
                    <div class="sponsor">
                        <a href="https://www.34sp.com/wordpress-hosting" target="_blank"><img class="sponsor-logo" src="<?php bloginfo('template_url'); ?>/images/34sp.svg" alt="34sp.com"></a>
                        <p>34SP provide excellent WordPress hosting and amazing support. On top of that our members receive a discount code which gives them three months of free hosting, which you can cancel at any time (no getting sucked into a twelve month contract if you don’t want). The code is WPBRUG.</p>
                    </div>
                    <div class="sponsor atomicsmash">
                        <a href="https://www.atomicsmash.co.uk/" target="_blank"><img class="sponsor-logo" src="<?php bloginfo('template_url'); ?>/images/Atomic-Smash-logo.jpg" alt="Atomic Smash logo"></a>
                        <p>Atomic Smash focus on delivering enterprise level WordPress & WooCommerce solutions for an array of businesses and organisations. Working on a range of projects, across the spectrum of UX, Design & Development.</p>
                    </div>
					<div class="sponsor stickermule">
                        <a href="https://www.stickermule.com/uk?utm_source=sponsorship&utm_medium=referral&utm_campaign=WPMBristol" target="_blank"><img class="sponsor-logo" src="<?php bloginfo('template_url'); ?>/images/stickermule.png" alt="Sticker Mule"></a>
                        <p>Sticker Mule is the fastest and easiest way to buy custom printed products. Thousands of people trust us to make kick-ass stickers, labels, magnets, badges & more. Order in seconds and get free online proofs, free shipping, and super fast turnaround!</p>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
