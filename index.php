<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="contain-main">
				<section class="box">
					<div class="wrapper-main">
						<div class="item-main_one"><h2>plan crecer</h2></div>
						<div class="item-main_two"><h2>plan emprender</h2></div>
						<div class="item-main_three"><h2>plan empresarial</h2></div>
					</div>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
