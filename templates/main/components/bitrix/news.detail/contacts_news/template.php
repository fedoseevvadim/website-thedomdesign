<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<header id="header">
		<div class="photos_block contacts">
			<img class="tilt-effect" data-tilt-options='{ "opacity" : 0.6, "movement": { "perspective" : 1500, "translateX" : 10, "translateY" : 10, "translateZ" : 2, "rotateX" : 3, "rotateY" : 3 } }' src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
			<div class="content">
				<div class="left_bar">
					<div class="logo">
						<a href="/">
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
							</span>
						</a>
					</div>
				</div>
				<div class="right_bar">
					<div class="menu cover">
						<p><span class="text">Меню</span></p>
					</div>
				</div>
				<div class="clear"> </div>

			</div>
		</div>
		<div class="inner">
			<div class="header_content contacts">
				<div class="title">
					<p>
						<?=$arResult["NAME"]?>
					</p>
				</div>
				<div class="text">
					<?echo $arResult["DETAIL_TEXT"];?>
				</div>			
			</div>
		</div>
	</header> <!-- end header -->
    
    <main id="main">
		<div class="inner">
			<div class="all_contacts">
				<div class="address_phone">
					<div class="phone">
						<p><?=$arResult['PROPERTIES']['phone']['VALUE']?></p>
					</div>
					<div class="address">
						<p>Адрес: <?=htmlspecialcharsBack($arResult["PROPERTIES"]["addr"]["VALUE"]["TEXT"])?></p>
					</div>
					<div class="map">
						<?=htmlspecialcharsBack($arResult["PROPERTIES"]["map"]["VALUE"]["TEXT"])?>
					</div>
				</div>
                
                <div class="email_form">
				<?$APPLICATION->IncludeComponent(
                    "altasib:feedback.form", 
                    "contacts_form", 
                    array(
                        "ACTIVE_ELEMENT" => "Y",
                        "ADD_HREF_LINK" => "Y",
                        "ALX_LINK_POPUP" => "N",
                        "BBC_MAIL" => "",
                        "CAPTCHA_TYPE" => "default",
                        "CATEGORY_SELECT_NAME" => "Выберите категорию",
                        "CHANGE_CAPTCHA" => "N",
                        "CHECKBOX_TYPE" => "CHECKBOX",
                        "CHECK_ERROR" => "Y",
                        "COLOR_OTHER" => "#009688",
                        "COLOR_SCHEME" => "BRIGHT",
                        "COLOR_THEME" => "",
                        "COMPONENT_TEMPLATE" => "contacts_form",
                        "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
                        "FB_TEXT_NAME" => "",
                        "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                        "FORM_ID" => "2",
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "altasib_feedback",
                        "INPUT_APPEARENCE" => array(
                            0 => "DEFAULT",
                        ),
                        "JQUERY_EN" => "N",
                        "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                        "LOCAL_REDIRECT_ENABLE" => "N",
                        "MASKED_INPUT_PHONE" => array(
                            0 => "PHONE",
                        ),
                        "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
                        "NAME_ELEMENT" => "ALX_DATE",
                        "NOT_CAPTCHA_AUTH" => "Y",
                        "PROPERTY_FIELDS" => array(
                            0 => "FIO",
                            1 => "EMAIL",
                            2 => "FEEDBACK_TEXT",
                        ),
                        "PROPERTY_FIELDS_REQUIRED" => array(
                            0 => "FIO",
                            1 => "EMAIL",
                            2 => "FEEDBACK_TEXT",
                        ),
                        "PROPS_AUTOCOMPLETE_EMAIL" => array(
                            0 => "EMAIL",
                        ),
                        "PROPS_AUTOCOMPLETE_NAME" => array(
                            0 => "FIO",
                        ),
                        "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
                            0 => "PHONE",
                        ),
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
                    ),
                    false
                );?>
			</div>
			<div class="clear"> </div>
		</div>
	</main> <!-- end main -->




