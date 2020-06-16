<?if(stristr( $APPLICATION->GetCurPage(), "contacts/" )){?>
<div id="subfooter_contacts"> </div>
<?}elseif($APPLICATION->getCurPage()!='/'){?>
<div id="subfooter"> </div>
<?}?>
</div><!--end wrapper-->

<?if($APPLICATION->getCurPage()=='/'){?>
<footer class="home_page_footer hide">
	<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer2",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
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
			<img src="/bitrix/templates/main/img/logo_first_screen.png" />
		</div>
		<div class="company__info-left">
			<p>Интерьерные решения</p>
		</div>
		<div class="company__info-right">
			<p>Алёны Царевой</p>
		</div>
	</div> 
	<div class="menu_footer">
		<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer2",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
	</div>
</div>
<div class="main_menu_screen hide">
	<div class="menu_items">
		<?$APPLICATION->IncludeComponent(
                "bitrix:menu", 
                "main", 
                array(
                    "ROOT_MENU_TYPE" => "main",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left_child",
                    "USE_EXT" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "main",
                    "DELAY" => "N"
                ),
                false
            );?>
	</div>
	<div class="close">
		<a>Закрыть</a>
	</div>
	<div class="logo">
		<a href="/" class="cover"></a>
	</div>
	<div class="menu_footer">
		<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer2",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
	</div>
</div>

<?}elseif(stristr( $APPLICATION->GetCurPage(), "contacts/" )){?>

<footer id="footer" style=" height:85px; margin-top:-75px;">
	<div class="inner">
		
		<div class="footer_container" style="padding-top:0;">
			<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
		</div>
		<div class="clear"> </div>

 		<div class ="footer_menu">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "main", array(
	"ROOT_MENU_TYPE" => "main",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => "",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left_child",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "main",
		"DELAY" => "N"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
		</div>

		<div class="clear"></div>
	</div>
</footer> <!-- end footer -->
<div class="main_menu_screen hide">
	<div class="menu_items">
		<?$APPLICATION->IncludeComponent(
                "bitrix:menu", 
                "main", 
                array(
                    "ROOT_MENU_TYPE" => "main",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left_child",
                    "USE_EXT" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "main",
                    "DELAY" => "N"
                ),
                false
            );?>
	</div>
	<div class="close">
		<a>Закрыть</a>
	</div>
	<div class="logo">
		<a href="/" class="cover"></a>
	</div>
	<div class="menu_footer">
		<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer2",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
	</div>
</div>

<?}else{?>

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
			<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
		</div>
		<div class="clear"></div>
	</div>
</footer> <!-- end footer -->

<div class="main_menu_screen hide">
	<div class="menu_items">
			<?$APPLICATION->IncludeComponent(
                "bitrix:menu", 
                "main", 
                array(
                    "ROOT_MENU_TYPE" => "main",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left_child",
                    "USE_EXT" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "main",
                    "DELAY" => "N"
                ),
                false
            );?>
	</div>
	<div class="close">
		<a>Закрыть</a>
	</div>
	<div class="logo">
		<a href="/" class="cover"></a>
	</div>
	<div class="menu_footer">
		<?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer2",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "footer",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => "3",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "footer",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Подвал",
                    "PROPERTY_CODE" => array(0=>"fb_link",1=>"inst_link",2=>"tw_link",3=>"phone",4=>"copy",5=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N"
                )
            );?>
	</div>
</div>

<?}?>



</body>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bannerscollection_zoominout.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/form_script.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/owl.carousel.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/tiltfx.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/script.js"></script>

<script src="/bitrix/templates/main/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

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