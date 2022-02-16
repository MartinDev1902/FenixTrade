<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-2">
                    <!-- TODO Integrate Logo -->
                    <div class="header__logo">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Fenix Trade">
                        </a>
                    </div>
                </div>

                <div class="d-md-none col-10 d-flex justify-content-end">
                    <div class="burger-button" id="burgerButton">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-9 d-lg-block d-none d-md-block">
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'main-menu',
                            'container'       => 'nav',
                            'container_class' => 'header__navigation',
                            'menu_class'      => 'd-flex justify-content-between',
                        ]);
                    ?>
                </div>
                <div class="offset-xxl-2 col-xxl-2 col-lg-3 col-md-1 d-md-block d-none">
                    <div class="header__buttons-group d-flex align-items-center justify-content-end justify-content-xxl-between">
                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'language-switcher-desktop',
                                'container'       => 'div',
                                'container_class' => 'language-switcher-desktop position-relative',
                            ]);
                        ?>
                        <!-- TODO Integrate button  -->
                        <div class="button--primary button d-none d-lg-block"><a href="#">Start trading</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-navigation position-absolute d-md-none align-items-center justify-content-center" id="mobileNavigation">
            <?php
                wp_nav_menu([
                    'theme_location'  => 'main-menu',
                    'container'       => 'div',
                    'container_class' => 'mobile-navigation__menu-list position-relative h-100 text-center',
                ]);
            ?>
           
            <?php
                wp_nav_menu([
                    'theme_location'  => 'language-switcher-mobile',
                    'container'       => 'div',
                    'container_class' => 'mobile-language-switcher w-100 position-absolute text-center',
                ]);
            ?>   
        </div>
    </header>