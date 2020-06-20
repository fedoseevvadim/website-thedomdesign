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
<div class="content-log">  
	<div class="article__logo">
		<h4 class="article__logo-h4">Интерьерные решения</h4>
		<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_new.png"></a><h4 class="article__logo-name-h4">Алёны Царёвой</h4>
	</div>
	<div class="content">
		<div class="right_bar">
			<div class="menu cover">
				<p><span class="text">Меню</span></p>
			</div>
		</div>
		<div class="clear"> </div>
	</div>
</div>
<header id="header">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<div class="photos_block blog">
				<div class="big_photo" style="max-width:100%;">
					<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="">
				</div>	
		</div>      
	<?else:?>
	<?/*<div class="content abs w100" style="z-index:999; top:150px;">
		   <div class="content">
					<div class="right_bar" style="float:right; margin-right: 5%">
						<div class="menu cover">
							<p><span class="text">Меню</span></p>
						</div>
					</div>
					<div class="clear">
					</div>
			</div>
	</div> */?>
			<section class="center slider_slik">	
				<?foreach($arResult["PROPERTIES"]["detail_gallery"]["VALUE"] as $PHOTO => $val):?>
						<?
						$rsFile = CFile::GetByID($val);
						$arFile = $rsFile->Fetch();
					if(intval($arFile['WIDTH'])>1047){
						$file=CFile::ResizeImageGet($arFile, array('width'=>1048, 'height'=>620), BX_RESIZE_IMAGE_EXACT, true);?>
					<div><img src="<?=$file['src']; ?>"  alt="<?=$arResult['NAME'];?>"></div>
					<?}?>
					<?endforeach?>
				</section>	
	<?endif?>
</header>
<main id="main">

		<div class="aticle__tilte__block">
			<div class='aticle__nav'><?if(!empty($arResult['nav']['prev']['DETAIL_PAGE_URL'])):?><a href="<?=$arResult['nav']['prev']['DETAIL_PAGE_URL']?>"><span>&#8592;</span> Предыдущий проект</a><?endif;?></div>
			<div class="article__title">
				<h1><?=$arResult['NAME'];?></h1>
				<?if(!empty($arResult['PROPERTIES']['descript']['VALUE'])):?><p><?=$arResult['PROPERTIES']['descript']['VALUE'];?></p><?endif;?>
			</div>
			<div class='aticle__nav'><?if(!empty($arResult['nav']['next']['DETAIL_PAGE_URL'])):?><a href="<?=$arResult['nav']['next']['DETAIL_PAGE_URL']?>">Следующий проект <span>&#8594;</span></a><?endif;?></div>
		</div>	
		

	<div class="decor"><img src="<?=SITE_TEMPLATE_PATH?>/img/decor_down.png"/></div>
		<div class="article__text">
			<div class='article__text__scroll'>
				<p>
					<?=$arResult['PREVIEW_TEXT'];?>
				</p>

				<p>
					<?=$arResult['DETAIL_TEXT'];?>
				</p>
			</div>
		</div>    
	<div class="decor"><img src="<?=SITE_TEMPLATE_PATH?>/img/decor_up.png"/></div>
	
	<div class="soc_link">
		<script type="text/javascript">(function() {
		  if (window.pluso)if (typeof window.pluso.start == "function") return;
		  if (window.ifpluso==undefined) { window.ifpluso = 1;
			var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
			s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
			s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
			var h=d[g]('body')[0];
			h.appendChild(s);
		  }})();</script>
		<div class="pluso" data-background="#ebebeb" data-options="small,square,line,horizontal,nocounter,theme=04" data-services="facebook,pinterest,instapaper,twitter"></div>
	</div>
    <div class="clear"></div>
    </div>
</main>

