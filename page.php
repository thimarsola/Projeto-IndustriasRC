<?php get_header(); ?>

<!-- hero -->
<?php get_template_part('template-parts/pages/pages', 'hero'); ?>
<!-- end of hero -->

<?php

if(is_page('Sobre nós')){
    get_template_part('template-parts/pages/pages', 'about');
    get_template_part('template-parts/pages/pages', 'pillars');
    get_template_part('template-parts/home/home', 'certification');
    get_template_part('template-parts/pages/pages', 'companies');
}

?>

<?php get_footer(); ?>