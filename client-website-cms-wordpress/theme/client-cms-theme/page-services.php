<?php get_header(); ?>
<h1>Services</h1>
<?php if (have_rows('services')): while (have_rows('services')): the_row(); ?>
<h2><?php the_sub_field('service_title'); ?></h2>
<p><?php the_sub_field('service_description'); ?></p>
<?php endwhile; endif; ?>
<?php get_footer(); ?>