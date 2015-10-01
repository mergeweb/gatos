<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package upnup
 */

get_header(); ?>

<div class="page-container">
	<div class="main-wrap">
        <div class="row title">
        	<h1><?= the_title(); ?></h1>
        </div><!--end title-->
        <div class="page-content">
     		<?= the_content(); ?>
     	</div>
	</div><!--end main-wrap-->
</div><!--end sitemap-container -->

<?php get_footer(); ?>
