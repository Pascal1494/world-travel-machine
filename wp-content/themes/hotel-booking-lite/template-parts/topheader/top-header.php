<?php
/**
 * Displays main header
 *
 * @package Hotel Booking Lite
 */
?>

<div class="top_header py-2 text-center text-md-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-9 align-self-center">
                <div class="navbar-brand">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <?php $blog_info = get_bloginfo( 'name' ); ?>
                        <?php if ( ! empty( $blog_info ) ) : ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-3 col-sm-3 col-3 align-self-center">
                <?php get_template_part('template-parts/navigation/nav'); ?>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-2 align-self-center text-center text-md-right">
                <?php if(get_theme_mod('hotel_booking_lite_phone') != ''){ ?>
                    <span><i class="fas fa-phone mr-3"></i><?php echo esc_html(get_theme_mod('hotel_booking_lite_phone','')); ?></span>
                <?php }?>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-2 align-self-center">
                <div class="social-link">
                    <?php if(get_theme_mod('hotel_booking_lite_facebook_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('hotel_booking_lite_facebook_url','')); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
                    <?php }?>
                    <?php if(get_theme_mod('hotel_booking_lite_twitter_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('hotel_booking_lite_twitter_url','')); ?>"><i class="fab fa-twitter mr-3"></i></a>
                    <?php }?>
                    <?php if(get_theme_mod('hotel_booking_lite_intagram_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('hotel_booking_lite_intagram_url','')); ?>"><i class="fab fa-instagram mr-3"></i></a>
                    <?php }?>
                    <?php if(get_theme_mod('hotel_booking_lite_linkedin_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('hotel_booking_lite_linkedin_url','')); ?>"><i class="fab fa-linkedin-in mr-3"></i></a>
                    <?php }?>
                    <?php if(get_theme_mod('hotel_booking_lite_youtube_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('hotel_booking_lite_youtube_url','')); ?>"><i class="fab fa-youtube"></i></a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>