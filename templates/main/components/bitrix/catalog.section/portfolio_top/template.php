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
          <div class="content abs w100 portfolio_logo content-log">
          	<div class="inner box" style="width:100%; max-width:100%; padding:0 41px 0 31px;">
				<div class="left_bar fleft rL">
					<div class="logo">
						<a href="/">
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
							</span>
						</a>
					</div>
				</div>
				<div class="right_bar fright rL">
					<div class="menu cover">
						<p><span class="text">Меню</span></p>
					</div>
				</div>
				<div class="clear"> </div>
                </div>

			</div>
			  <section class="center slider_slik">			
					<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
						<?if(!empty($arItem['PROPERTIES']['in_top']['VALUE'])):?>
							<?if(!empty($arItem['PROPERTIES']['top_pic_detail']['VALUE'])):?>
								<?$file=CFile::ResizeImageGet($arItem['PROPERTIES']['top_pic_detail']['VALUE'], array('width'=>1048, 'height'=>624), BX_RESIZE_IMAGE_EXACT, true);?>
								<?if($file['width']==1048 and $file['height']==624):?>
									<div>				
										<img src="<?=$file['src'];?>" alt="<?=$arItem['NAME']?>">
									</div>
								<?endif;?>
							<?endif;?>	
						<?endif;?>		
					<?endforeach;?>
			  </section>
<div class="inner">
		<div class="media_articles_list_inline">
<?
foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	?>
	
    
    
    		<div class="item" id="<? echo $strMainID; ?>">
            	<div class="inn_item">
                	<div class="image_block">
                    	<a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>" style="background-image: url(<? echo $arItem['PREVIEW_PICTURE']['SRC']; ?>);" class="cover"></a>
                    </div>
                    <div class="description">
                   
                    	<div class="date" style="display:none;">
                        	<p>
                            	от <?
$arParams["DATE_CREATE"]="j F Y";
echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));
?> г
                            </p>
                        </div>
                        <div class="title">
                            <p><a class="title_portfolio" href="<? echo $arItem['DETAIL_PAGE_URL']; ?>"><? echo $arItem['NAME']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div><!--end item-->
    
    <? } ?>
			</div>
    	</div>