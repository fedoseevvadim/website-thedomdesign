<?if(stristr( $APPLICATION->GetCurPage(), "contacts/" )){?>
<div id="subfooter_contacts"> </div>
<?}elseif($APPLICATION->getCurPage()!='/'){?>
<div id="subfooter"> </div>
<?}?>
</div><!--end wrapper-->


<?
if($APPLICATION->getCurPage()=='/'){?>
    <footer class="home_page_footer hide">
        <?
        $APPLICATION->IncludeFile("/include/footer2.php", Array(), Array(
            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
        ));
        ?>
        <div class="clear"> </div>
    </footer> <!-- end footer -->

    <div id="first_page">
        <div class="company_info">
            <div class="logo cover">
                <div class="left_text">
                    <p>Интерьерные решения</p>
                </div>
                <div class="right_text">
                    <p>Алёны Царевой</p>
                </div>
            </div>
        </div>
        <div class="company__info">
            <div class="company__info-logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_first_screen.png" />
            </div>
            <div class="company__info-left">
                <p>Интерьерные решения</p>
            </div>
            <div class="company__info-right">
                <p>Алёны Царевой</p>
            </div>
        </div>
        <div class="menu_footer">
            <?
            $APPLICATION->IncludeFile("/include/footer2.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
    </div>
    <div class="main_menu_screen hide">
        <div class="menu_items">
            <?
            $APPLICATION->IncludeFile("/include/menu.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
        <div class="close">
            <a>Закрыть</a>
        </div>
        <div class="logo">
            <a href="/" class="cover"></a>
        </div>
        <div class="menu_footer">
            <?
            $APPLICATION->IncludeFile("/include/footer2.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
    </div>

<?}elseif(stristr( $APPLICATION->GetCurPage(), "contacts/" )){?>

    <footer id="footer" style=" height:85px; margin-top:-75px;">
        <div class="inner">

            <div class="footer_container" style="padding-top:0;">

                <?
                $APPLICATION->IncludeFile("/include/footer.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>

            </div>
            <div class="clear"> </div>

            <div class ="footer_menu">
                <?
                $APPLICATION->IncludeFile("/include/menu.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </div>

            <div class="clear"></div>
        </div>
    </footer> <!-- end footer -->
    <div class="main_menu_screen hide">
        <div class="menu_items">
            <?
            $APPLICATION->IncludeFile("/include/menu.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
        <div class="close">
            <a>Закрыть</a>
        </div>
        <div class="logo">
            <a href="/" class="cover"></a>
        </div>
        <div class="menu_footer">
            <?
            $APPLICATION->IncludeFile("/include/footer2.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
    </div>

<?}else{?>

    <?
    if ( $APPLICATION->GetCurPage() === "/how_we_work/" )  {

    } else {
    ?>

    <footer id="footer">
        <div class="inner">
            <div class="consulting cover">
                <div class="text">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "EDIT_TEMPLATE" => "standard.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH" => "/include/about_left.php"
                        ),
                        false
                    );?>
                </div>
                <div class="consulting_form">
                    <?$APPLICATION->IncludeComponent(
                        "altasib:feedback.form",
                        "footer_form",
                        Array(
                            "ACTIVE_ELEMENT" => "Y",
                            "ADD_HREF_LINK" => "Y",
                            "ALX_LINK_POPUP" => "N",
                            "BBC_MAIL" => "",
                            "CATEGORY_SELECT_NAME" => "Выберите категорию",
                            "CHECKBOX_TYPE" => "CHECKBOX",
                            "CHECK_ERROR" => "Y",
                            "COLOR_OTHER" => "#009688",
                            "COLOR_SCHEME" => "BRIGHT",
                            "COLOR_THEME" => "",
                            "COMPONENT_TEMPLATE" => "footer_form",
                            "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
                            "FB_TEXT_NAME" => "",
                            "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                            "FORM_ID" => "1",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "altasib_feedback",
                            "INPUT_APPEARENCE" => array(0=>"DEFAULT",),
                            "JQUERY_EN" => "N",
                            "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                            "LOCAL_REDIRECT_ENABLE" => "N",
                            "MASKED_INPUT_PHONE" => array(0=>"PHONE",),
                            "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
                            "NAME_ELEMENT" => "ALX_DATE",
                            "PROPERTY_FIELDS" => array(0=>"FIO",1=>"EMAIL",),
                            "PROPERTY_FIELDS_REQUIRED" => array(0=>"FIO",1=>"EMAIL",),
                            "PROPS_AUTOCOMPLETE_EMAIL" => array(0=>"EMAIL",),
                            "PROPS_AUTOCOMPLETE_NAME" => array(0=>"FIO",),
                            "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(0=>"PHONE",),
                            "PROPS_AUTOCOMPLETE_VETO" => "N",
                            "SECTION_FIELDS_ENABLE" => "N",
                            "SECTION_MAIL_ALL" => "thedomdesign@gmail.com, fildiz@mail.ru",
                            "SEND_IMMEDIATE" => "Y",
                            "SEND_MAIL" => "N",
                            "SHOW_LINK_TO_SEND_MORE" => "Y",
                            "SHOW_MESSAGE_LINK" => "Y",
                            "USERMAIL_FROM" => "N",
                            "USE_CAPTCHA" => "N",
                            "WIDTH_FORM" => "100%"
                        )
                    );?>
                </div>
            </div>
            <div class="footer_container">
                <?
                $APPLICATION->IncludeFile("/include/footer.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </div>
            <div class="clear"></div>
        </div>
    </footer> <!-- end footer -->

    <?
    }
    ?>
    <div class="main_menu_screen hide">
        <div class="menu_items">
            <?
            $APPLICATION->IncludeFile("/include/menu.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
        <div class="close">
            <a>Закрыть</a>
        </div>
        <div class="logo">
            <a href="/" class="cover"></a>
        </div>
        <div class="menu_footer">
            <?
            $APPLICATION->IncludeFile("/include/footer2.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
    </div>

<?}

if ( $APPLICATION->GetCurPage() === "/how_we_work/" )  {

?>
<footer id="footer" class="footer" style="padding-bottom: 2rem; padding-left: 1rem; padding-right: 1rem;">

    <div class="row" style="padding-top: 2rem;">

        <div class="col-md-2">

        </div>

        <div class="col-md-8">

            <div class="row vertical-divider">

                <div class="col-md-6">
                    <?
                    $APPLICATION->IncludeFile("/include/footer_text.php", Array(), Array(
                        "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                        "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                    ));

                    ?>

                    <?$APPLICATION->IncludeComponent(
                        "sbrus:content",
                        "feedback_short",
                        Array(
                            "IBLOCK_ID" => "feedBackForm",
                            "IBLOCK_TYPE" => "work",
                        )
                    );?>
                </div>

                <div class="col-md-6 d-flex align-items-end">

                    <div class="footer_phone">
                        <?
                        $APPLICATION->IncludeFile("/include/phone_number.php", Array(), Array(
                            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                        ));

                        ?>

                        <br>

                        <?
                        $APPLICATION->IncludeFile("/include/social.php", Array(), Array(
                            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                        ));

                        ?>
                    </div>


                </div>

            </div>

        </div>

        <div class="col-md-2 align-self-center">

        </div>


    </div>


    <div class="row" style="padding-top: 2rem;">

        <div class="col-md-3">

        </div>

        <div class="col-md-6">

            <div class="row">

                <div class="col-md-6">

                </div>

                <div class="col-md-6 text-right">

                    <?
                    $APPLICATION->IncludeFile("/include/rights.php", Array(), Array(
                        "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                        "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                    ));

                    ?>

                </div>

            </div>

        </div>

        <div class="col-md-3 align-self-center">

        </div>


    </div>

</footer>

<?
}

// Эта часть нарушает работу страницы /portfolio/
// поскольку использует bootstrap
// поэтому модальное окно вынесено сюда
if ( $APPLICATION->GetCurPage() === "/how_we_work/" )  {
?>
    <!-- Modal -->
    <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?$APPLICATION->IncludeComponent(
                        "sbrus:content",
                        "feedback",
                        Array(
                            "IBLOCK_ID" => "feedBackForm",
                            "IBLOCK_TYPE" => "work",
                        )
                    );?>
                </div>

            </div>
        </div>
    </div>

<?

}
?>



</body>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bannerscollection_zoominout.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/form_script.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/owl.carousel.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/tiltfx.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/script.js" type="text/javascript"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    $(document).on('ready', function() {
        $(".slider_slik").slick({
            centerMode: true,
            centerPadding: '400px',
            slidesToShow: 1,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '200px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '100px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '10px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '5px',
                        slidesToShow: 1
                    }
                }
            ]
        });

    });
</script>
</html>