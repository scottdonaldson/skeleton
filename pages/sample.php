<?php 
/*
Template Name: Sample Template
*/
function helper_css() { ?>

<?php } add_action('wp_head','helper_css');

function helper_js() { ?>
	<script>
		jQuery(document).ready(function($){

		});
	</script>
<?php } add_action('wp_footer','helper_js');

get_header(); 
the_post(); ?>

<article <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>

</article>

<?php get_footer(); ?>