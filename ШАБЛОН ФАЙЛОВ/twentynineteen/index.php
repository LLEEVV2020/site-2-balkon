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
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div style="display: none;" id="content" class="site-content">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

</div><!-- #page -->

<?php

get_template_part( 'template-custom/header' ); 
get_template_part( 'template-custom/top-menu' ); 


get_template_part( 'template-custom/main/es1' ); 
get_template_part( 'template-custom/main/es2' ); 
get_template_part( 'template-custom/main/es3_balcons__3' ); /*СМС-СКИДКА*/
get_template_part( 'template-custom/main/es4_balcons_slider__4' ); /*ОСТЕКЛИТЕ БАЛКОН ПО НИЗКОЙ ЦЕНЕ*/
get_template_part( 'template-custom/main/es5_balcons__5' ); 
get_template_part( 'template-custom/main/es6_balcons__6' ); 
get_template_part( 'template-custom/main/es7_balcons__7' ); 
get_template_part( 'template-custom/main/es8_balcons__8' ); 
get_template_part( 'template-custom/main/es9_correct_balcony__9' ); 
get_template_part( 'template-custom/main/es10_repairs_balcony__10' ); /*РЕМОНТ БАЛКОНОВ И ЛОДЖИЙ  -- с ценами*/
get_template_part( 'template-custom/main/es7__11s' ); /*БЕСПЛАТНЫЙ ЗАМЕР  --- РАССРОЧКА 0%*/
get_template_part( 'template-custom/main/es13_bg__12' ); /*счётчик*/
get_template_part( 'template-custom/main/giving__13' ); /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
get_template_part( 'template-custom/main/map19' ); 
get_template_part( 'template-custom/main/es16_bg20__16' ); 
get_template_part( 'template-custom/main/es20_balcony__17' ); 
get_template_part( 'template-custom/main/es21_balcony__18' ); 


get_template_part( 'template-custom/footer-main' ); 



get_footer();
