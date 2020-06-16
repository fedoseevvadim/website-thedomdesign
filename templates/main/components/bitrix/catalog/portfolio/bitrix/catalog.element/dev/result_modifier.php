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