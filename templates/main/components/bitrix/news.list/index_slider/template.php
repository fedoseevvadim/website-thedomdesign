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

<div class="on_dekstop">   
<div id="bannerscollection_zoominout_opportune" class="index__list">
            	<!--<div class="myloader"></div>-->
                <ul class="bannerscollection_zoominout_list">
<?foreach($arResult["ITEMS"] as $k=>$arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    		 <li data-initialZoom="<?if (($k % 2) == 0)  { echo "0.77";} else{ echo 1;}?>" data-finalZoom="<?if (($k % 2) == 0)  { echo 1;} else{ echo "0.77";}?>" data-horizontalPosition="center" data-verticalPosition="center"data-bottom-thumb="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-text-id="#bannerscollection_zoominout_photoText1" data-autoPlay="10"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" width="2500" height="1570" /></li>
<?endforeach;?>
</ul>
</div>
<script type="text/javascript">
	var ua = navigator.userAgent.toLowerCase();
		if (ua.indexOf("msie") != -1 || ua.indexOf("opera") != -1) {
			jQuery('body').css('overflow','hidden');
			jQuery('html').css('overflow','hidden');
		}				

						jQuery(function() {			
			jQuery("#bannerscollection_zoominout_opportune").bannerscollection_zoominout({	
			skin:"opportune",		
			width:1920,				
			height:600,			
			width100Proc:true,	
			height100Proc:true,
			responsive:true,	
			responsiveRelativeToBrowser:true,
			setAsBg:false,	
			autoPlay:10,		
			loop:false,			
			fadeSlides:true,	
			horizontalPosition:"center",	
			verticalPosition:"center",	
			initialZoom:1,			
			finalZoom:0.8,		
			duration:20,		
			durationIEfix:30,	
			zoomEasing:"ease",	
			target:"_blank",	
			pauseOnMouseOver:false,	
			showAllControllers:true,	
			showNavArrows:false,		
			showOnInitNavArrows:false,
			autoHideNavArrows:true,		
			showBottomNav:false,		
			showOnInitBottomNav:true,
			showPreviewThumbs:false,	
			enableTouchScreen:true,	
			scrollSlideDuration:0.8,	
			scrollSlideEasing:"swing",	
			defaultEasing:"swing",		
			myloaderTime:0,			
			});					
			});		

</script>

</div>

<div class="mobile__slider on_mobile ind_slider">
	<? foreach ($arResult['ITEMS'] as $key => $arItem) {?> 
		<div class="slide rL hid">
        	<div class="rL h100 cover" style="background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
            	
        </div>
	<? } ?>
</div>