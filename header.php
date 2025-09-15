<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="header-content">
            <div>
                <div class="logo">
                    <?php 
                    if (get_theme_mod('custom_logo')) {
                        the_custom_logo();
                    } else {
                        echo get_theme_mod('site_title', 'Stack Eaters');
                    }
                    ?>
                </div>
                <div class="tagline"><?php echo get_theme_mod('site_tagline', '"Mindre snack, mer stack"'); ?></div>
            </div>
        </div>
    </div>
</header>

<nav>
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => '',
            'container' => false,
            'fallback_cb' => 'stack_eaters_fallback_menu'
        ));
        ?>
    </div>
</nav>

<?php
// Fallback menu if no menu is set
function stack_eaters_fallback_menu() {
    echo '<ul>
        <li><a href="#hem">Hem</a></li>
        <li><a href="#tjanster">Tjänster</a></li>
        <li><a href="#om-oss">Om oss</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>';
}
?>