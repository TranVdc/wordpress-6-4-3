
<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'primary-1' ) ) : ?>
        <?php dynamic_sidebar( 'primary-1' ); ?>
    <?php else : ?>
       this is default sidebar
    <?php endif; ?>
</div>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php dynamic_sidebar( 'primary' ); ?>
