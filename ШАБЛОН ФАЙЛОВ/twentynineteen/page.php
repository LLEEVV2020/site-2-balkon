<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php 
            
            /*
            ПУТИ
            rassrochka
            otzyvy-o-kompanii
            adresa-i-telefony
            akczii-i-skidki
            
            Разрабатывая, основу взял отсюда
            https://wp-kama.ru/function/get_pages
            https://wp-kama.ru/function/get_the_id
            */
            
            // Получаем  id текущей странницы
            $post_id = get_the_ID();
            // получаем ярлык пути, без доменного имени и слэшей
            $page_url =  get_page_uri( $post_id );
            
            
            
            // РАССОЧКА
            if($page_url == "rassrochka"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/rassrochki_na_shkafy_1/rassr_balcons' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/rast_windownow_bg_gerl__2' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/b_rassr' ); 

                get_template_part( 'template-custom/main/es13_bg__12' ); /*счётчик*/
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/price_2018' );  /*Временная картинка. Раздел "ЦЕНЫ НА БАЛКОНЫ В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА"*/
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/main/map19' );  /*карта*/
                get_template_part( 'template-custom/main/es16_bg20__16' ); /*БАЛКОНЫ, ОСТЕКЛЕННЫЕ В 2019 ГОДУ*/
                
                
                get_template_part( 'template-custom/main/es17_bg21' ); 
                get_template_part( 'template-custom/main/es18_bg22' ); 


                get_template_part( 'template-custom/footer-main' ); 

            }
            // ОТЗЫВЫ О КОМПАНИИ 
            if($page_url == "otzyvy-o-kompanii"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 


                get_template_part( 'template-custom/shkafy_otzyvy_2/es1_otzivy_bg' ); /*Развёрнутые отзывы*/
                get_template_part( 'template-custom/shkafy_otzyvy_2/d_otziv_form' ); /*Форма оставить отзыв*/
                get_template_part( 'template-custom/main/es18_bg22' );  /*Нижнее небольшое меню*/
?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/shkafy_otzyvy_2/es12_bg' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
?></div><?php 
                get_template_part( 'template-custom/main/es13_bg__12' );  /*счётчик*/
                get_template_part( 'template-custom/main/map19' );  /*карта*/


                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/main/es18_bg22' ); /*Нижнее небольшое меню*/


                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }   
            if($page_url == "adresa-i-telefony"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/gde_kupit_shkafy_3/accii_temp' ); 
                get_template_part( 'template-custom/main/map19' ); 
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_contact' ); 
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_radar' ); 
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_contact_ceo_bg' ); 

                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/main/map19' );
                get_template_part( 'template-custom/main/es16_bg20__16' ); /*БАЛКОНЫ, ОСТЕКЛЕННЫЕ В 2019 ГОДУ*/

                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/main/es18_bg22' ); /*Нижнее небольшое меню*/


                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }   
            if($page_url == "akczii-i-skidki"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 


                get_template_part( 'template-custom/aktsii_i_skidki_4/accii-temp' ); 
                get_template_part( 'template-custom/aktsii_i_skidki_4/aktsii-wrap' ); 
                
                get_template_part( 'template-custom/main/es3_balcons__3' ); /*СМС СКИДКА*/
                get_template_part( 'template-custom/main/es18_bg22' );  /*Нижнее небольшое меню*/
?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/shkafy_otzyvy_2/es12_bg' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
?></div><?php 
                get_template_part( 'template-custom/main/es13_bg__12' );  /*счётчик*/
                get_template_part( 'template-custom/main/map19' );
                get_template_part( 'template-custom/main/es16_bg20__16' ); /*БАЛКОНЫ, ОСТЕКЛЕННЫЕ В 2019 ГОДУ*/


                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/main/es18_bg22' ); /*Нижнее небольшое меню*/


                get_template_part( 'template-custom/footer-main' ); /*footer*/
            }

            if($page_url == "otdelka-balkonov"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/sabmenu__1__otdelka-balkonov/finishing_balconies__1' );
                get_template_part( 'template-custom/sabmenu__1__otdelka-balkonov/finishing_balconies_calc' );

                get_template_part( 'template-custom/main/es10_repairs_balcony__10' ); /*РЕМОНТ БАЛКОНОВ И ЛОДЖИЙ  -- с ценами*/
                get_template_part( 'template-custom/main/es7__11' ); /*БЕСПЛАТНЫЙ ЗАМЕР  --- РАССРОЧКА 0%*/
                get_template_part( 'template-custom/shkafy_otzyvy_2/es12_bg' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                get_template_part( 'template-custom/main/es13_bg__12' ); /*счётчик*/
                get_template_part( 'template-custom/main/giving__13' ); /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/main/map19' ); 
                get_template_part( 'template-custom/main/es16_bg20__16' ); /*БАЛКОНЫ, ОСТЕКЛЕННЫЕ В 2019 ГОДУ*/

                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/main/es18_bg22' ); /*Нижнее небольшое меню*/


                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }
            if($page_url == "czeny-na-balkony"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/sabmenu__2__czeny-na-balkony/calc_block' );
                get_template_part( 'template-custom/main/es7_balcons__dybl__7' ); 
                get_template_part( 'template-custom/sabmenu__2__czeny-na-balkony/b_windownow_bg' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/price_2018' );  /*Временная картинка. Раздел "ЦЕНЫ НА БАЛКОНЫ В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА"*/
                get_template_part( 'template-custom/main/es6_balcons__6' ); /*КОМПАНИЯ “БАЛКОНЫ ЦЕНЫ” 100% ДЕШЕВЛЕ!*/
                get_template_part( 'template-custom/main/es3_balcons__3' ); /*СМС СКИДКА*/
                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/shkafy_otzyvy_2/es12_bg' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
?></div><?php 
                get_template_part( 'template-custom/main/es13_bg__12' ); /*счётчик*/
                get_template_part( 'template-custom/main/giving__13' ); /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/main/map19' ); 


                get_template_part( 'template-custom/main/es16_bg20__16' ); /*БАЛКОНЫ, ОСТЕКЛЕННЫЕ В 2019 ГОДУ*/

                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/main/es18_bg22' ); /*Нижнее небольшое меню*/


                get_template_part( 'template-custom/footer-main' ); /*footer*/
            }
            

            if($page_url == "none"){

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                endwhile; // End of the loop.
            }

            ?>
            
			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
