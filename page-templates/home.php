<?php
/**
 * Template Name: Home
 *
 * Francisco's home page template based on full-width-page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">
				<img src="<?php echo get_template_directory_uri(); ?>/img/francisco-wide.jpg" alt="">

				<div class="jumbotron">
					<div class="container landing">
						<h1>The best news only.</h1>
						<span>Welcome to my website, where you will find all things bitchass. I love music, journalism, and pro-wrestling.</span>
					</div>
				</div>

				</main><!-- #main <?php echo get_template_directory_uri(); ?>/img/francisco-wide.jpg-->

			</div><!-- #primary -->

			<?php get_sidebar( 'right' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
