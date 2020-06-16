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
							if($arFields['RANK']<$arResult['nav']['prev']['RANK'] and $arFields['ID']!=$arResult['ID'])
								$arResult['nav']['prev']=$arFields;
							else
								$arResult['nav']['next']=$arFields;
						}
?>