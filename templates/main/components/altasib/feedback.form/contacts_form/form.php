<div class="afbf_feedback_poles">
	<script type="text/javascript">
		$(document).ready(function(){
			if(typeof $.dropdown!='undefined'){
				$(".afbf_item_pole .afbf_select").dropdown({
					"dropdownClass": "feedback_dropdown"
				});
			}
		});
	</script>
	<form id="f_feedback_<?=$ALX?>" name="f_feedback_<?=$ALX?>" action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
    <div class="title">
							<p>ЗАДАЙТЕ ВОПРОС</p>
						</div>
			<input type="hidden" name="FEEDBACK_FORM_<?=$ALX?>" value="Y" />
<?		if($arParams["ADD_HREF_LINK"] != "N"):?>
			<input type="hidden" name="HREF_LINK_<?=$ALX?>" value="<?=POST_FORM_ACTION_URI?>" />
<?		endif?>
<?			if(count($arResult["TYPE_QUESTION"]) >= 1):?>
<?					/* TYPE_QUESTION */?>
					<div class="afbf_item_pole is_filled required">
						<p><?=$arParams["CATEGORY_SELECT_NAME"]?></p>
						<div class="input_block">
							<input type="hidden" id="type_question_name_<?=$ALX?>" name="type_question_name_<?=$ALX?>" value="<?=$arResult["TYPE_QUESTION"][0]["NAME"]?>">
							<select id="type_question_<?=$ALX?>" class="afbf_select" name="type_question_<?=$ALX?>" onchange="ALX_SetNameQuestion(this,'<?=$ALX?>');">
								<option value=""><?if(!in_array("FLOATING_LABELS", $arParams['INPUT_APPEARENCE'])): echo GetMessage("ALX_CATEGORY_NO"); endif;?></option>
<?								foreach($arResult["TYPE_QUESTION"] as $arField):?>
<?									if(trim(htmlspecialcharsEx($_POST["type_question_".$ALX])) == $arField["ID"]):?>
								<option value="<?=$arField["ID"]?>" selected><?=$arField["NAME"]?></option>
<?									else:?>
								<option value="<?=$arField["ID"]?>"><?=$arField["NAME"]?></option>
<?									endif?>
<?								endforeach?>
							</select>
						</div>
					</div>
<?			endif?>
<?			$k = 0;?>
<?
			$countArr = count($arResult["FIELDS"]);
			$bFBtext = false;
			$strFBtext = '';
?>
<?			if((is_array($arParams["PROPERTY_FIELDS"]) && in_array("FEEDBACK_TEXT", $arParams["PROPERTY_FIELDS"]))
				|| (
					$arParams["SECTION_FIELDS_ENABLE"] == "Y" && !empty($arResult["CURSECT_FIELDS"])
					&& is_array($arResult["CURSECT_FIELDS"]) && in_array("FEEDBACK_TEXT", $arResult["CURSECT_FIELDS"])
				)
			)
			{
				$strLen = mb_strlen($arResult["FEEDBACK_TEXT"], 'utf-8');
				$strFBtext = '<div class="afbf_item_pole';
				$strFBtext .= ($strLen > 0) ? ' is_filled' : '';
				$strFBtext .= in_array("FEEDBACK_TEXT_".$ALX, $arParams["PROPERTY_FIELDS_REQUIRED"]) ? ' required':'';
				$strFBtext .= '">';

				$strFBtext .= '<p class="afbf_name">';
				if(!empty($arParams["FB_TEXT_NAME"]))
					$strFBtext .= $arParams["FB_TEXT_NAME"];
				else
					$strFBtext .= GetMessage("ALX_TP_MESSAGE_TEXTMESS");
				if(in_array("FEEDBACK_TEXT_".$ALX, $arParams["PROPERTY_FIELDS_REQUIRED"]))
				{
					$strFBtext .= ' <span class="afbf_required_text">*</span>';
				}
				$strFBtext .= '</p>
					<div class="input_text_block" id="error_EMPTY_TEXT">
						<textarea class="afbf_textarea" cols="10" rows="10" id="EMPTY_TEXT'.$ALX.'" name="FEEDBACK_TEXT_'.$ALX.'">'.$arResult["FEEDBACK_TEXT"].'</textarea>
					</div>
					<div class="afbf_error_text">'.GetMessage("AFBF_ERROR_TEXT").'</div>
				</div>';

			}?>
<?		foreach($arResult["FIELDS"] as $key=>$arField):?>
<?				$fieldClass = '';
				$nameClass = '';
				if ($arField['DEFAULT_VALUE'] || $arField['AUTOCOMPLETE_VALUE'] || $arField["TYPE"] == "L" || $arField["TYPE"] == "E" || $arField["TYPE"] == "G")
					$fieldClass .= ' is_filled';
				if ($arField["REQUIRED"]=='Y')
					$fieldClass .= ' required';
				if ($arField["CODE"] == "EMAIL_".$ALX)
					$fieldClass .= ' is_email';
				if ($arField['LIST_TYPE'] == 'C')
					$nameClass .= ' static_name';
?>
				<div id="afbf_<?=mb_strtolower($arField["CODE"])?>" class="afbf_item_pole<?=$fieldClass?>">
					<div class="afbf_name<?=$nameClass?>">
<? echo $arField["NAME"]?> <?if($arField["REQUIRED"]):?><span class="afbf_required_text">*</span><?endif?>
						<div class="afbf_hint"><?=$arField["HINT"]?></div>
					</div>
<?				/*LIST*/?>
<?					if($arField["TYPE"] == "L"):?>

<?						if($arField["LIST_TYPE"] == "L"): /*list*/?>
							<div class="input_block">
<?							if($arField["MULTIPLE"] == "Y"):?>
								<select name="FIELDS[<?=$arField["CODE"]?>][]" multiple="multiple">
<?							else:?>
								<select class="afbf_select" name="FIELDS[<?=$arField["CODE"]?>]">
<?							endif;?>
									<option value=""><?if(!in_array("FLOATING_LABELS", $arParams['INPUT_APPEARENCE'])): echo GetMessage("ALX_NOT_SET"); endif;?></option>
<?							foreach($arField["ENUM"] as $v):?>
<?								if(!isset($_POST["FIELDS"][$arField["CODE"]]) && !isset($arResult["FORM_ERRORS"]["EMPTY_FIELD"][$arField["CODE"]])):?>
									<option value="<?=$v["ID"]?>"<?if($v['DEF'] == 'Y') echo ' selected="selected"';?>><?=$v["VALUE"]?></option>
<?								else:?>
<?									if($arField["MULTIPLE"] == "Y"):?>
										<option value="<?=$v["ID"]?>"<?if(in_array($v['ID'], $_POST["FIELDS"][$arField["CODE"]])) echo ' selected="selected"';?>><?=$v["VALUE"]?></option>
<?									else:?>
										<option value="<?=$v["ID"]?>"<?if($v['ID'] == $_POST["FIELDS"][$arField["CODE"]]) echo ' selected="selected"';?>><?=$v["VALUE"]?></option>
<?									endif;?>
<?								endif;?>
<?							endforeach?>
								</select>
							</div>
<?						elseif($arField["LIST_TYPE"] == "C"): /*flags (check/radio)*/?>
<?							if($arField["MULTIPLE"] == "Y"):

								$cAddClass = $arParams['CHECKBOX_TYPE'] == 'TOGGLE' ? ' toggle' : '';
?>
								<input type="hidden" name="FIELDS[<?=$arField["CODE"]?>]" value=""><?
								foreach($arField["ENUM"] as $v):?>
<?									if(!isset($_POST["FIELDS"][$arField["CODE"]]) && !isset($arResult["FORM_ERRORS"]["EMPTY_FIELD"][$arField["CODE"]])):?>
										<div class="afbf_checkbox<?=$cAddClass?>">
											<label for="<?=$arField["CODE"].'_'.$v["ID"]?>">
												<input id="<?=$arField["CODE"].'_'.$v["ID"]?>" type="checkbox" name="FIELDS[<?=$arField["CODE"]?>][]" value="<?=$v["ID"]?>" <?if($v["DEF"] == "Y") echo 'checked="checked"';?>>
												<span class="afbf_checkbox_box">
													<span class="afbf_checkbox_check"></span>
												</span><?=$v["VALUE"]?></label><br />
										</div>
<?									else:?>
										<div class="afbf_checkbox<?=$cAddClass?>">
											<label for="<?=$arField["CODE"].'_'.$v["ID"]?>">
												<input id="<?=$arField["CODE"].'_'.$v["ID"]?>" type="checkbox" name="FIELDS[<?=$arField["CODE"]?>][]" value="<?=$v["ID"]?>" <?if(in_array($v['ID'], $_POST["FIELDS"][$arField["CODE"]])) echo 'checked="checked"';?>>
												<span class="afbf_checkbox_box">
													<span class="afbf_checkbox_check"></span>
												</span><?=$v["VALUE"]?></label><br />
										</div>
<?									endif;?>
<?								endforeach?>
<?							else:?>
								<div class="afbf_radio">
<?								foreach($arField["ENUM"] as $v):?>
<?									if(!isset($_POST["FIELDS"][$arField["CODE"]]) && !isset($arResult["FORM_ERRORS"]["EMPTY_FIELD"][$arField["CODE"]])):?>
										<label for="<?=$arField["CODE"].'_'.$v["ID"]?>">
											<input id="<?=$arField["CODE"].'_'.$v["ID"]?>" type="radio" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=$v["ID"]?>" <?if($v['DEF'] == 'Y') echo 'checked="checked"';?>>
											<span class="afbf_radio_circle"></span>
											<span class="afbf_radio_check"></span>
<?											echo $v["VALUE"]?></label><br />
<?									else:?>
										<label for="<?=$arField["CODE"].'_'.$v["ID"]?>">
											<input id="<?=$arField["CODE"].'_'.$v["ID"]?>" type="radio" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=$v["ID"]?>" <?if($v['ID'] == $_POST["FIELDS"][$arField["CODE"]]) echo 'checked="checked"';?>>
											<span class="afbf_radio_circle"></span>
											<span class="afbf_radio_check"></span>
<?											echo $v["VALUE"]?></label><br />
<?									endif;?>
<?								endforeach?>
								</div>
<?							endif?>
<?						endif?>
<?						if ($arField['REQUIRED'] == 'Y'):?>
							<div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
<?						endif?>
<?					/* HTML/TEXT */?>
<?				elseif($arField["USER_TYPE"] == "HTML"):?>
						<div class="input_block" id="error_<?=$arField["CODE"]?>">
<?							if(!empty($_POST["FIELDS"][$arField["CODE"]])):?>
								<textarea cols="" rows="" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" style="height:<?=$arField["USER_TYPE_SETTINGS"]["height"]?>px;"><?=trim(htmlspecialcharsEx($_POST["FIELDS"][$arField["CODE"]]))?></textarea>
<?							elseif(!empty($arField["AUTOCOMPLETE_VALUE"])):?>
								<textarea cols="" rows="" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" style="height:<?=$arField["USER_TYPE_SETTINGS"]["height"]?>px;"><?=trim(htmlspecialcharsEx($arField["AUTOCOMPLETE_VALUE"]))?></textarea>
<?							else:?>
								<textarea cols="" rows="" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" style="height:<?=$arField["USER_TYPE_SETTINGS"]["height"]?>px;" onblur="if(this.value==''){this.value='<?=$arField["DEFAULT_VALUE"]["TEXT"]?>'}" onclick="if(this.value=='<?=$arField["DEFAULT_VALUE"]["TEXT"]?>'){this.value=''}"><?=$arField["DEFAULT_VALUE"]["TEXT"]?></textarea>
<?							endif;?>
<?							if ($arField['REQUIRED'] == 'Y'):?>
								<div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
<?							endif?>
						</div>
<?				/* Date or DateTime */?>
<?
				elseif($arField["USER_TYPE"] == "Date" || $arField["USER_TYPE"] == "DateTime"):?>
						<div class="input_block input_block_calendar" id="error_<?=$arField["CODE"]?>"><?
							$bShowTime=($arField["USER_TYPE"] == "Date" ? "false" : "true");
							$bHideTime=($arField["USER_TYPE"] == "Date" ? "true" : "false");?>
<?							if(!empty($_POST["FIELDS"][$arField["CODE"]])):?>
								<input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=trim(htmlspecialcharsEx($_POST["FIELDS"][$arField["CODE"]]))?>" class="afbf_inputtext input_field" readonly="readonly" onclick="BX.calendar({node:this,field:'FIELDS[<?=$arField["CODE"]?>]',form:'',bTime:<?=$bShowTime?>,currentTime:'<?=(time()+date("Z")+CTimeZone::GetOffset())?>',bHideTime:<?=$bHideTime?>});" />
<?							else:?>
								<input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=$arField["DEFAULT_VALUE"]?>" class="afbf_inputtext input_field" readonly="readonly" onclick="BX.calendar({node:this,field:'FIELDS[<?=$arField["CODE"]?>]',form:'',bTime:<?=$bShowTime?>,currentTime:'<?=(time()+date("Z")+CTimeZone::GetOffset())?>',bHideTime:<?=$bHideTime?>});" />
<?							endif;?>
							<div class="afbf_calendar_icon">
<?
								require_once($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/interface/admin_lib.php");
								define("ADMIN_THEME_ID", CAdminTheme::GetCurrentTheme());
								echo CAdminPage::ShowScript();
								if(class_exists("CAdminCalendar"))
									echo CAdminCalendar::Calendar("FIELDS[".$arField["CODE"]."]", "f_feedback_".$ALX, "", ($arField["USER_TYPE"] == "DateTime"));
								else
									echo Calendar("FIELDS[".$arField["CODE"]."]", "f_feedback_".$ALX);
?>				
							</div>
<?							if ($arField['REQUIRED'] == 'Y'):?>
								<div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
<?							endif?>
						</div>
<?				/* ELEMENTS */?>
<?				elseif($arField["TYPE"] == "E"):?>
<?					if($arField["PROPERTY"]["MULTIPLE"] == "Y"):?>
						<div id="error_<?=$arField["CODE"]?>">
<?							foreach($arField["LINKED_ELEMENTS"] as $arEl):?>
								<p class="afbf_checkbox">
									<label for="<?=$arField["CODE"]?>1_<?=$arEl["ID"]?>">
										<input type="checkbox" name="FIELDS[<?=$arField["CODE"]?>][]" value="<?=$arEl["ID"]?>" id="<?=$arField["CODE"]?>1_<?=$arEl["ID"]?>" <?
											if(!empty($_POST["FIELDS"][$arField["CODE"]]) && in_array($arEl["ID"], $_POST["FIELDS"][$arField["CODE"]])):?>checked="checked"<?endif;?>/>
										<span class="afbf_checkbox_box">
											<span class="afbf_checkbox_check"></span>
										</span><?=$arEl["NAME"]?></label>
								</p>
<?							endforeach;?>
						</div>
<?					else:?>
						<div class="afbf_radio" id="error_<?=$arField["CODE"]?>">
<?							if(!empty($arField["LINKED_ELEMENTS"])):
							foreach($arField["LINKED_ELEMENTS"] as $val):?>
								<label for="<?=$arField["CODE"].'_'.$val["ID"]?>">
									<input id="<?=$arField["CODE"].'_'.$val["ID"]?>" type="radio" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=$val["ID"]?>" <?if($val['ID'] == $_POST["FIELDS"][$arField["CODE"]]) echo 'checked="checked"';?>>
									<span class="afbf_radio_circle"></span>
									<span class="afbf_radio_check"></span>
<?									echo $val["NAME"]?></label><br />
<?							endforeach;
							endif;?>
						</div>
<?					endif;?>
<?					if ($arField['REQUIRED'] == 'Y'):?>
						<div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
<?					endif?>
<?				/* SECTIONS */?>
<?			elseif($arField["TYPE"] == "G"):?>
				<div class="input_block is_filled" id="error_<?=$arField["CODE"]?>">
<?					if(!empty($arField["LINKED_SECTIONS"])):
?>
						<select class="<?if($arField["PROPERTY"]["MULTIPLE"]!="Y"):?>afbf_select<?else:?>afbf_inputtext afbf_select_sect<?endif;?>" name="FIELDS[<?=$arField["CODE"]?>][]"<? echo (!empty($arField["PROPERTY"]["MULTIPLE_CNT"]) && $arField["PROPERTY"]["MULTIPLE"]=="Y" ? ' size="'.$arField["PROPERTY"]["MULTIPLE_CNT"].'"' : "");?><?
							echo ($arField["PROPERTY"]["MULTIPLE"] == "Y" ? " multiple=\"multiple\"" : "");?>>
							<option value=""<?if(isset($_POST["FIELDS"][$arField["CODE"]]) && in_array("", $_POST["FIELDS"][$arField["CODE"]])) echo " selected"?>><?if(!in_array("FLOATING_LABELS", $arParams['INPUT_APPEARENCE'])): echo GetMessage("ALX_NOT_SET"); endif;?></option>
<?
							foreach($arField["LINKED_SECTIONS"] as $arEl):?>
							<option value="<?echo $arEl["ID"]?>"<?
								if(!empty($_POST["FIELDS"][$arField["CODE"]]) && in_array($arEl["ID"], $_POST["FIELDS"][$arField["CODE"]])) echo " selected"?>><?echo str_repeat(" . ", $arEl["DEPTH_LEVEL"]).$arEl["NAME"]?></option><?
							endforeach;?>
						</select>
<?					endif;?>
<?					if ($arField['REQUIRED'] == 'Y'):?>
						<div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
<?					endif?>
				</div>

<?				/* STRING */?>
<?				elseif($arField["TYPE"] != "F"):
?>
					<div class="input_block" id="error_<?=$arField["CODE"]?>">
<?						if(!empty($_POST["FIELDS"][$arField["CODE"]])):?>
							<input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=trim(htmlspecialcharsEx($_POST["FIELDS"][$arField["CODE"]]))?>" class="afbf_inputtext input_field" />
<?						elseif(!empty($arField["AUTOCOMPLETE_VALUE"])):
							$readonly = "";
							if($arParams["PROPS_AUTOCOMPLETE_VETO"]=="Y" && $USER->IsAuthorized())
								if($arField["CODE"] == "FIO_".$ALX || $arField["CODE"] == "EMAIL_".$ALX || $arField["CODE"] == "PHONE_".$ALX)
									$readonly = 'readonly = "readonly" ';?>
							<input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" <?=$readonly?>" class="afbf_inputtext input_field" />
<?						else:?>
							<input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=$arField["DEFAULT_VALUE"]?>" class="afbf_inputtext input_field" onblur="if(this.value==''){this.value='<?=$arField["DEFAULT_VALUE"]?>'}" onclick="if(this.value=='<?=$arField["DEFAULT_VALUE"]?>'){this.value=''}" />
<?						endif;?>

<?						if ($arField["CODE"] == "EMAIL_".$ALX):?>
							<div class="afbf_error_text"><?=GetMessage("AFBF_ERROR_TEXT_EMAIL")?></div>
<?						elseif ($arField['REQUIRED'] == 'Y'):?>
							<div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
<?						endif?>
					</div>
<?					/* FILE */?>
<?				elseif($arField["TYPE"] == "F"):?>
<?				$k++;?>
					<input type="hidden" name="codeFileFields[<?=$arField['CODE']?>]" value="<?=$arField['CODE']?>">
					<div class="input_block file">
						<input type="hidden" name="FIELDS[myFile][<?=$arField["CODE"]?>]">
<?					if($arField["MULTIPLE"] == "Y"):?>
						<input type="file" id="afbf_file_input_add<?=$k?>" name="myFile[<?=$arField['CODE']?>][]" class="afbf_file_input_add" multiple="true" />
<?					else:?>
						<input type="file" id="afbf_file_input_add<?=$k?>" name="myFile[<?=$arField['CODE']?>]" class="afbf_file_input_add" />
<?					endif;?>
						<div class="afbf_input_group">
							<input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[myFile][<?=$arField["CODE"]?>]" value="" class="afbf_inputtext input_field" />
							<span class="afbf_group_btn">
								<button type="button" class="afbf_file_button"></button>
							</span>
						</div>
<?						if ($arField['REQUIRED'] == 'Y'):?>
<?							if ($arField["CODE"] == "FILE_".$ALX):?>
								<div class="afbf_error_text"><?=GetMessage("AFBF_ERROR_TEXT")?></div>
<?							endif?>
<?						endif?>
						<div class="afbf_error_ftext"><?=GetMessage("AFBF_ERROR_FILE_TYPE")?></div>
					</div>
<?		endif?>
				</div>
<?
				if(!$bFBtext && ($arResult["FIELDS"][$key+1]["SORT"]>10000 || $key==$countArr-1)):
					echo $strFBtext;
					$bFBtext = true;
				endif;?>

<?			endforeach?>
<?
			if(!$bFBtext)
			{
				echo $strFBtext;
				$bFBtext = true;
			}
?>
<?			if($arParams["USE_CAPTCHA"]):?>
<?				if($arParams["CAPTCHA_TYPE"] != 'recaptcha'):?>
					<div class="afbf_item_pole item_pole__captcha required">

<?						if($fVerComposite) $frame = $this->createFrame()->begin('loading... <img src="/bitrix/themes/.default/start_menu/main/loading.gif">');?>
<?						$capCode = $GLOBALS["APPLICATION"]->CaptchaGetCode();$_SESSION['ALX_CAPTHA_CODE']=$capCode;?>
						<input type="hidden" id="alx_fb_captchaSid_<?=$ALX?>" name="captcha_sid" value="<?=htmlspecialcharsEx($capCode)?>">
						<div class="afbf_pole_captcha">
							<img class="image" id="alx_cm_CAPTCHA_<?=$ALX?>" src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsEx($capCode)?>" width="180" height="40">
<?							if($arParams["CHANGE_CAPTCHA"] == "Y"):?>
								<span class="afbf_captcha_reload" onclick="ALX_ChangeCaptcha('<?=$ALX?>');return false;"></span>
<?							else:?>
								<span class="afbf_captcha_reload" onclick="capCode='<?=htmlspecialcharsEx($capCode)?>';ALX_ReloadCaptcha(capCode,'<?=$ALX?>');return false;"></span>
<?							endif;?>
						</div>
<?						if($fVerComposite) $frame->end();?>
						<p><?=GetMessage("ALX_TP_MESSAGE_INPUTF")?> <span class="afbf_required_text">*</span></p>
						<div class="input_block"><input type="text" class="afbf_inputtext input_field" id="captcha_word_<?=$ALX?>" name="captcha_word" size="30" maxlength="50" value=""></div>
						<div class="afbf_error_text"><?=GetMessage("ALX_CP_WRONG_CAPTCHA")?></div>
					</div>
<?				else:?>
<?					if (isset($arResult["SITE_KEY"])):?>
						<div class="afbf_item_pole required is_filled">
							<p><?=GetMessage("ALX_TP_MESSAGE_RECAPTCHA")?><span class="afbf_required_text">*</span></p>

<?					if($fVerComposite) $frame2 = $this->createFrame()->begin('loading... <img src="/bitrix/themes/.default/start_menu/main/loading.gif">');?>
							<script type="text/javascript">
							var AltasibFeedbackOnload_<?=$ALX?> = function(){
								grecaptcha.render('html_element_recaptcha_<?=$ALX?>',{'sitekey':'<?=$arResult["SITE_KEY"];?>',
									'theme':'<?=$arParams["RECAPTCHA_THEME"];?>','type':'<?=$arParams["RECAPTCHA_TYPE"];?>'});
							};
<?							if($arParams['ALX_LINK_POPUP']=='Y'):?>
							$(window).load(function(){
								if(typeof AltasibFeedbackOnload_<?=$ALX?>!='undefined')
									AltasibFeedbackOnload_<?=$ALX?>();
							});
<?							endif?>
							$(document).ready(function(){
								var interval = setInterval(function(){
									if(typeof grecaptcha != 'undefined'){
										AltasibFeedbackOnload_<?=$ALX?>();
										clearInterval(interval);
									}
								},1000);
							});
							</script>
							<div class="afbf_pole_captcha">
								<div class="g-recaptcha" id="html_element_recaptcha_<?=$ALX?>" onload="AltasibFeedbackOnload_<?=$ALX?>()" data-sitekey="<?=$arResult["SITE_KEY"]?>"></div>
								<span class="afbf_captcha_reload" onclick="grecaptcha.reset();return false;"></span>
							</div>
							<div class="afbf_error_text"><?=GetMessage("ALX_CP_WRONG_RECAPTCHA_MIR")?></div>
<?					if($fVerComposite) $frame2->end();?>
						</div>
<?					endif;?>
<?				endif;?>
<?			endif?>
<?		echo bitrix_sessid_post()?>
		<div class="afbf_submit_block">
			<input type="submit" class="fb_close afbf_btn" id="fb_close_<?=$ALX?>" name="SEND_FORM" value="Отправить" />
		</div>
	</form>
</div>
