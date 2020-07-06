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


		<div class="left_bar">
			<div class="social_net_panel_footer">

            	<?php

                if ($arResult["DISPLAY_PROPERTIES"]['pinterest_link']) {
                    ?>
                    <a href="<?= $arResult['PROPERTIES']['pinterest_link']['VALUE'] ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <?
                }

                if ($arResult["DISPLAY_PROPERTIES"]['houzz_link']) {
                    ?>
                    <a href="<?= $arResult['PROPERTIES']['houzz_link']['VALUE'] ?>" target="_blank"><i class="fab fa-houzz"></i></a>
                    <?
                }

                if ($arResult["DISPLAY_PROPERTIES"]['fb_link']) {
                    ?>
                    <a href="<?= $arResult['PROPERTIES']['fb_link']['VALUE'] ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                    <?
                }

                if ($arResult["DISPLAY_PROPERTIES"]['inst_link']) {
                    ?>
                    <a href="<?= $arResult['PROPERTIES']['inst_link']['VALUE'] ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <?
                }

                if ($arResult["DISPLAY_PROPERTIES"]['tw_link']) {
                    ?>
                    <a href="<?= $arResult['PROPERTIES']['tw_link']['VALUE'] ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <?
                }
                ?>
			</div>
			<div class="copyright_common"><?=$arResult['PROPERTIES']['copy']['VALUE']?></div>	
		</div>
		<div class="right_bar">
			<div class="phone_common"><a href="http://THEDOM.DESIGN/#callbackhunter"><?=$arResult['PROPERTIES']['phone']['VALUE']?></a></div>		
		</div>



