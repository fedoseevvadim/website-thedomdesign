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
			<div class="social_net_panel_menu">
            	<? if ($arResult["DISPLAY_PROPERTIES"]['fb_link']){?>
				<a href="<?=$arResult['PROPERTIES']['fb_link']['VALUE']?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                <? } ?>
                <? if ($arResult["DISPLAY_PROPERTIES"]['inst_link']){?>
				<a href="<?=$arResult['PROPERTIES']['inst_link']['VALUE']?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                <? } ?>
                <? if ($arResult["DISPLAY_PROPERTIES"]['tw_link']){?>
				<a href="<?=$arResult['PROPERTIES']['tw_link']['VALUE']?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                <? } ?>	
			</div>
			<div class="copyright"><?=$arResult['PROPERTIES']['copy']['VALUE']?><?=date("Y")?></div>
		</div>
		<div class="right_bar">
			<div class="phone"><a href="http://THEDOM.DESIGN/#callbackhunter"><?=$arResult['PROPERTIES']['phone']['VALUE']?></a></div>		
		</div>



