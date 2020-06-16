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
$templateLibrary = array('popup');
$currencyList = '';
if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}
$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BASIS_PRICE' => $strMainID.'_basis_price',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'BASKET_ACTIONS' => $strMainID.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
?>



<header id="header">
	<div class="photos_block blog">
    	<? if ($arResult["DISPLAY_PROPERTIES"]['top_pic_detail']){?>
        <img class="tilt-effect" data-tilt-options='{ "opacity" : 0.6, "movement": { "perspective" : 1500, "translateX" : 10, "translateY" : 10, "translateZ" : 2, "rotateX" : 3, "rotateY" : 3 } }' src="<? echo CFile::GetPath($arResult["PROPERTIES"]["top_pic_detail"]["VALUE"]) ?>" alt="">
        <? } else { ?>
        <img class="tilt-effect" data-tilt-options='{ "opacity" : 0.6, "movement": { "perspective" : 1500, "translateX" : 10, "translateY" : 10, "translateZ" : 2, "rotateX" : 3, "rotateY" : 3 } }' src="<? echo CFile::GetPath($arResult["PROPERTIES"]["top_pic_catalog"]["VALUE"]) ?>" alt="">
        <? } ?>
        
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
				<div class="clear"> </div
        ></div>
    </div>
    
    
    <div class="inner">
			<div class="header_content blog">
				<div class="title">
					<p>
						<?=$arResult['NAME'];?>
					</p>
				</div>
                <? if ($arResult["DISPLAY_PROPERTIES"]['top_pic_text']){?>
				<div class="text">
					<p><?=htmlspecialcharsBack($arResult["PROPERTIES"]["top_pic_text"]["VALUE"]["TEXT"])?></p>
				</div>	
                <? } ?>		
			</div>
		</div>
</header>




<main id="main">
	<div class="inner">
    	<div class="blog_article_text">
        	<?=$arResult['PREVIEW_TEXT'];?>
        </div>
        
        <div class="image_text_block" <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?> <?;else:?> style=" width:90%; max-width:800px;" <?endif?>>
        	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
        	<? if ($arResult["DISPLAY_PROPERTIES"]['detail_txt']){?>
        	<div class="image_block rL fleft">
            <? } else { ?>
            <div class="image_block rL" style="width:100%; margin-right:0;">
            <? } ?>
            	<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="">
            </div>
            <?endif?>
            <? if ($arResult["DISPLAY_PROPERTIES"]['detail_txt']){?>
            <div class="text_block rL">
            	<div class="title">
                	<p><?=$arResult['PROPERTIES']['detail_subtitle']['VALUE']?></p>
                </div>
                <div class="text">
                	<?=htmlspecialcharsBack($arResult["PROPERTIES"]["detail_txt"]["VALUE"]["TEXT"])?>
                </div>
            </div>
            <? } ?>
        	<div class="clear"></div>
        </div>
        
        <div class="blog_article_text last_paragraph">
        	<?=$arResult['DETAIL_TEXT'];?>
        </div>
        
  <div class="share_with_friends">
				<p>Поделиться с друзьями</p>
                <div class="icon_panel">      
       <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,counter,theme=01" data-services="facebook,twitter"></div>
</div>
</div>
    
    
    <? if ($arResult["DISPLAY_PROPERTIES"]['related']){?>
    		<div class="similar_articles blog">
				<p>Похожие статьи</p>
			</div>    
        <div class="media_articles_list blog detailed_article">
        	<div class="row">
         <?$related_arr = $arResult["PROPERTIES"]["related"]["VALUE"]?> 	
                        <?
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_CREATE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PAGE_URL", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $related_arr);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()):?>
  
  
 
<?
$arFields = $ob->GetFields();  
//print_r($arFields);
$arProps = $ob->GetProperties();
//print_r($arProps);
?>  

			<div class="item">
            	<div class="inn_item">
                	<div class="image_block">
                    	<a href="<?=$arFields["DETAIL_PAGE_URL"]?>" style="background-image: url(<?=CFile::getPath($arFields["PREVIEW_PICTURE"])?>);" class="cover"></a>
                    </div>
                    <div class="description">
                   
                    	<div class="date">
                        	<p>
                            	от <?
$arParams["DATE_CREATE"]="j F Y";
echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arFields["DATE_CREATE"], CSite::GetDateFormat()));
?> г
                            </p>
                        </div>
                        <div class="title">
                        	<p><?=$arFields["NAME"]?></p>
                        </div>
                        <div class="read_all">
                        	<a href="<?=$arFields["DETAIL_PAGE_URL"]?>">Читать далее</a>
                        </div>
                    </div>
                </div>
            </div><!--end item-->


<?endwhile?> 
					<div class="clear"></div>
				</div>
			</div>
            <? } ?>
        
        <div class="clear"></div>
    </div>
</main>








