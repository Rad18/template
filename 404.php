<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mill
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
  				<div class="container">
   				 	<div class="row text-center">
						<header class="page-header">
							<h1 class="page-title">404</h1>
						</header><!-- .page-header -->

						<div class="page-content">
						 <h2>Запрашиваемая страница не найдена. </h2>
						 <h4>Попробуйте перейти на <a href="<?php echo home_url(); ?>/">главную страницу</a>  студии Мельница.</h4>
						</div>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
