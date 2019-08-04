<div class="b_windownow_bg b_windownow_bg_temp2"  >

        <div class="container">

            <div class="flex-container">
                <div class="b_windownow_man"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/b_windownow_man.png" alt=""></div>
                <div class="b_windownow_block">
                    <h4 style="     text-align: center; margin-bottom: 12px; ">ОТДЕЛКа БАЛКОНов СЕЙЧАС - ДЕНЬГИ ПОТОМ</h4>
                    <div class="flex-block">
                        <div class="b_windownow_proc"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/b_windownow_proc.png" alt=""></div>

                        <div class="b_windownow_text">
                            <p>Рассрочка <br> без предоплаты</p>

                            <a class="rasrocha-link b_windownow__btn" href="remont-kvartir-rassrochka/index.html">Узнать
                                подробности</a>

                        </div>
                    </div>

                </div>

            </div>



        </div><!-- /.container -->

    </div>
<script>
    Array.prototype.forEach.call(document.querySelectorAll('a'), function(e){
    
    var strHref = e.href;
    if(strHref.indexOf('rassrochka') !== -1) {
        var rasrocha_link = document.querySelector('.rasrocha-link');
        rasrocha_link.href = e.href;
    }
    /**
    Использовал
    https://www.searchengines.ru/all-about-js-links.html
    http://w3pro.ru/book/spravochnik-jquery-api/poisk-ssylok-na-stranitse-s-ee-izvestnymi-atributami
    https://html5book.ru/hyperlinks-in-html/
    http://qaru.site/questions/14/how-to-check-whether-a-string-contains-a-substring-in-javascript
    https://learn.javascript.ru/string
     */
        
    });
</script>