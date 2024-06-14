<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}

wp_nav_menu(
    array(
        'theme_location' => 'header-menu',
        'container_class' => 'my_extra_menu_class'
    )
);

?>
<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">

<?php
wp_nav_menu(
    array(
        'theme_location' => 'extra-menu',
        'container_class' => 'my_extra_menu_class'
    )
);