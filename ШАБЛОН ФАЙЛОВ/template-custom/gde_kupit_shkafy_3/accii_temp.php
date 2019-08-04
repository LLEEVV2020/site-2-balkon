   <div class="contact-wrap template contact-wrap-balcon">
            <div class="container">
                <h2>РАБОТАЕМ <?php echo get_option('my_city_po'); ?>:</h2>

                <div class="flex-container vcard">
                    
                    <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/contact-tel2.png" alt="">
                        </div>
                        <div class="item item-main">
                                                      
                            
                        <div class="tel"> <abbr class="value" title="8 (917) 122-28-80"><?php if(empty(get_option('my_phone')) ){
                                  echo "8 (917) 122-28-80";
                              }
                              else{
                                  echo get_option('my_phone'); 
                              } ?></abbr></div>
                            <p class="email"><?php if(empty(get_option('my_mail')) ){
                                  echo "avoshnikov@yandex.ru";
                              }
                              else{
                                  echo get_option('my_mail'); 
                              } ?></p>
                        </div>
                    </div>
                  
                    
                    <div class="block-item" >
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/rekvizits.png" alt="">
                        </div>
                        <div class="item item-main">
                           
                           <div>Звоните ежедневно <br>с 8:00 до 23:00</div>


                            <!--<div class="head">Реквизиты</div>
                            <p class="email">ООО “Надежный выбор”<br>
                            ИНН 7726370558 <br>
                            ОГРН 1167746224095 <br>
                            Р/С 40702810038000019853</p>-->


                        </div>
                    </div>

                    <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/ykazatel.png" alt="">
                        </div>
                        
                        <div class="item" >
                        <?php
                        if(empty(get_option('my_adress_1'))){
                            echo "<div class='head'>Центральный офис</div>
                            <p class='workhours'>Тольятти, Автозаводское шоссе 21, офис 404</p>";
                        }
                        else{
                            $adress_array=array(
                                "адрес 1"=>"my_adress_1",
                                "адрес 2"=>"my_adress_2");
    
                            foreach($adress_array as $adress_item) {
                                echo "<p class='workhours'>";
                                echo get_option($adress_item);
                                echo "</p>";
                            }
                        }

                        ?>

                        </div>

                    </div>

                </div>


            </div>
        </div>