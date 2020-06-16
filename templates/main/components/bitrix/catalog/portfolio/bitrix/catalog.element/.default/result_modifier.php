<?		$res = CIBlockElement::GetList(
					array("ID" => "ASC"),
					array("IBLOCK_ID" =>  $arResult['ORIGINAL_PARAMETERS']['IBLOCK_ID'],   "ACTIVE" => "Y",),
					false, 
					array("nPageSize" => 1, "nElementID" => $arResult['ID']),
					array("ID", "DETAIL_PAGE_URL")
               );

				$arResult['nav']['prev']['RANK']=9999;
						while($ob = $res->GetNextElement())
						{
						 $arFields = $ob->GetFields();

							if($arFields['ID']!=$arResult['ID']){
								if($arFields['RANK']<$arResult['nav']['prev']['RANK'])
									$arResult['nav']['prev']=$arFields;
								else
									$arResult['nav']['next']=$arFields;
							}
						}
?>
<?  
$arResult["detail_gallery"] = array();   
   if(isset($arResult["PROPERTIES"]["detail_gallery"]["VALUE"]) && is_array($arResult["PROPERTIES"]["detail_gallery"]["VALUE"]))   
   {   
      foreach($arResult["PROPERTIES"]["detail_gallery"]["VALUE"] as $FILE)   
      {   
         $FILE = CFile::GetFileArray($FILE);   
         if(is_array($FILE))   
            $arResult["detail_gallery"][]=$FILE;   
      }   
   } 

?> 