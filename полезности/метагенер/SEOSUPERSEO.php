<?
?><pre><?
//print_r($arResult);?></pre><?
$arParentmeta=array();
$sh=0;//ФУНКЦИЯ ВЫТАСКИВАНИЯ ЗНАЧЕНИЙ ПОЛЬЗ СВОЙСТВ РОДИТЕЛЬСКИХ РАЗДЕЛОВ
function getparentmeta($ParentCode,$sh,$arParentmeta){
$Filtersect=array("IBLOCK_ID" => 4, "ID" => $ParentCode);
  $arFieldsSect=array("UF_NOGEN_KEYWRDS", "NAME", "IBLOCK_SECTION_ID","	UF_NOGEN_TITLE","UF_NOGEN_DESC","UF_GEN_KEY","UF_GEN_DESC","UF_GEN_TITLE");
$SECT = CIBlockSection::GetList(array('left_margin' => 'asc'),$Filtersect,false,$arFieldsSect);
while ($arSect123456 = $SECT->GetNext())
{
    $arSECT=$arSect123456;
}
//echo $arSECT["IBLOCK_SECTION_ID"];
$sh=$sh+1;
//echo $sh;
$ParentCode=$arSECT["IBLOCK_SECTION_ID"];
if(empty($arParentmeta["TITLE"])){
  $arParentmeta["TITLE"]=$arSECT["UF_GEN_TITLE"];
}
if(empty($arParentmeta["DESCRIPTION"])){
  $arParentmeta["DESCRIPTION"]=$arSECT["UF_GEN_DESC"];
}
if(empty($arParentmeta["KEYWORDS"])){
  $arParentmeta["KEYWORDS"]=$arSECT["UF_GEN_KEY"];
}

if(!empty($arSECT["IBLOCK_SECTION_ID"])){
//print_r($arParentmeta);

foreach ($arParentmeta as $value) {
  if(empty($value)){
 //echo "123";
 $arParentmeta=getparentmeta($ParentCode,$sh,$arParentmeta);
  }


}}return $arParentmeta;
};



//ПРОВЕРЯЕМ СУЩЕСТВОВАНИЕ ПОЛЬЗ СВОЙСТВ СЕО
//ДЛЯ ЭЛЕМЕНТА !!!!!!!!!!
//ENDMETA переманная
//если в елементе
if(!$arResult["PATH"][0]["LIST_PAGE_URL"]=="/catalog/"){

  if(!empty($arResult["PROPERTIES"]["UF_TITLE"]["VALUE"])){
    $ENDMETA["TITLE"]=$arResult["PROPERTIES"]["UF_TITLE"]["VALUE"];
  }elseif(empty($arResult["PROPERTIES"]["UF_TITLE"]["VALUE"])){
  $ParentCode=$arResult["SECTION"]["ID"];
  $ENDMETA["TITLE"]="0";
  };
  if(!empty($arResult["PROPERTIES"]["UF_DESC"]["VALUE"])){
    $ENDMETA["DESCRIPTION"]=$arResult["PROPERTIES"]["UF_DESC"]["VALUE"];
  }elseif(empty($arResult["PROPERTIES"]["UF_DESC"]["VALUE"])){
  $ParentCode=$arResult["SECTION"]["ID"];
  $ENDMETA["DESCRIPTION"]="0";
  };
  if(!empty($arResult["PROPERTIES"]["UF_KEYWORDS"]["VALUE"])){
    $ENDMETA["KEYWORDS"]=$arResult["PROPERTIES"]["UF_KEYWORDS"]["VALUE"];
  }elseif(empty($arResult["PROPERTIES"]["UF_KEYWORDS"]["VALUE"])){
  $ParentCode=$arResult["SECTION"]["ID"];
  $ENDMETA["KEYWORDS"]="0";
  };


  if(!empty($ENDMETA)){
  foreach ($ENDMETA as $value) {
    if($value=="0"){
  //echo $ParentCode;
  $arParentmeta=getparentmeta($ParentCode);
  }
  }

  //ПОЛУЧИЛИ НА ВЫХОДЕ 2 МАССИВА , РОДИТЕЛЬ И СОБСТВЕННЫЙ , ПУСТЫЕ СОБСТВЕННЫЕ ПОЛЯ ЗАМЕНЕНЫ 0, ОТ НЕГО И ОТТАЛКИВАЕМСЯ


  foreach ($ENDMETA as $key => $value) {
    if($value=="0"){
    $ENDMETA[$key]=$arParentmeta[$key];
    }
  }
  }





//print_r($ParentCode);
}elseif($arResult["PATH"][0]["LIST_PAGE_URL"]=="/catalog/"){// ДЛЯ СЕКЦИЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙ
  $ParentCode=$arResult["ID"];
  $Filtersect123=array("IBLOCK_ID" => 4, "ID" => $ParentCode);
    $arFieldsSect123=array("UF_NOGEN_KEYWRDS", "NAME", "IBLOCK_SECTION_ID","UF_NOGEN_TITLE","UF_NOGEN_DESC");
  $SECT123 = CIBlockSection::GetList(array('left_margin' => 'asc'),$Filtersect123,false,$arFieldsSect123);
  while ($arSect123456 = $SECT123->GetNext())
  {
      $arSECT123=$arSect123456;
  }
  if(!empty($arSECT123["UF_NOGEN_TITLE"])){
    $ENDMETA["TITLE"]=$arSECT123["UF_NOGEN_TITLE"];
  }elseif(empty($arSECT123["UF_NOGEN_DESC"])){
  $ParentCode=$arSECT123["IBLOCK_SECTION_ID"];
  $ENDMETA["TITLE"]="0";
  };
  if(!empty($arSECT123["UF_NOGEN_DESC"])){
    $ENDMETA["DESCRIPTION"]=$arSECT123["UF_NOGEN_DESC"];
  }elseif(empty($arSECT123["UF_NOGEN_DESC"])){
  $ParentCode=$arSECT123["IBLOCK_SECTION_ID"];
  $ENDMETA["DESCRIPTION"]="0";
  };
  if(!empty($arSECT123["UF_NOGEN_KEYWRDS"])){
    $ENDMETA["KEYWORDS"]=$arSECT123["UF_NOGEN_KEYWRDS"];
  }elseif(empty($arSECT123["UF_NOGEN_KEYWRDS"])){
  $ParentCode=$arSECT123["IBLOCK_SECTION_ID"];
  $ENDMETA["KEYWORDS"]="0";

  //getparentmeta($ParentCode);
}
?><pre><?
  //print_r($arSECT123["IBLOCK_SECTION_ID"]);?></pre>
<?}


if(!empty($ENDMETA)){
foreach ($ENDMETA as $value) {
  if($value=="0"){
//echo $ParentCode;
$arParentmeta=getparentmeta($ParentCode);
}
}

//ПОЛУЧИЛИ НА ВЫХОДЕ 2 МАССИВА , РОДИТЕЛЬ И СОБСТВЕННЫЙ , ПУСТЫЕ СОБСТВЕННЫЕ ПОЛЯ ЗАМЕНЕНЫ 0, ОТ НЕГО И ОТТАЛКИВАЕМСЯ


foreach ($ENDMETA as $key => $value) {
  if($value=="0"){
  $ENDMETA[$key]=$arParentmeta[$key];
  }
}
}

if(!empty($ENDMETA)) //что то ДАЛЬШЕ ОБРАБАТЫВАЕМ РЕЗУЛЬТАТ ВЫБОРКИ
   {
foreach($ENDMETA as $key12345=>$metashabl){
$TITLEFROMRAZDEL=$metashabl;//pfvtybnm
//$TITLEFROMRAZDELGOTOVIY = str_replace("{name}", "имя", $TITLEFROMRAZDEL);
//echo $TITLEFROMRAZDELGOTOVIY;

$mystring = $TITLEFROMRAZDEL;
$findme   = '{';
$pos = strpos($mystring, $findme);

// Заметьте, что используется ===.  Использование == не даст верного
// результата, так как 'a' в нулевой позиции.
if ($pos === false) {

  $titleowergenerated[$key12345]=$TITLEFROMRAZDEL;                                                                            //СюДА ДОПИСАТЬ что делать ,  ЕСЛИ НЕТ {}

}else{


  preg_match_all('~{([^}]+)}~i', $TITLEFROMRAZDEL, $matches);

  //print_r($arResult);

   foreach ($matches["1"] as $key) {
     //echo $key;
    if($key=="name"){
      //echo $key;
      $arRep=$arResult["NAME"];
      //echo $arRep;
      foreach ($matches["0"] as $key2) {

        $chetchik=substr($key2, 1);
        $chetchik2=substr("$chetchik", 0, -1);
          //echo $key;
        if($chetchik2==$key){

$TITLEFROMRAZDEL = str_replace($key2, $arRep, $TITLEFROMRAZDEL);
        }

      }
}elseif($key=="price"){
  //echo $key;
  $arRep=$arResult["PRICES"]["BASE"]["PRINT_DISCOUNT_VALUE"];
  //echo $arRep;
  foreach ($matches["0"] as $key2) {

    $chetchik=substr($key2, 1);
    $chetchik2=substr("$chetchik", 0, -1);
      //echo $key;
    if($chetchik2==$key){

$TITLEFROMRAZDEL = str_replace($key2, $arRep, $TITLEFROMRAZDEL);
    }

  }
}else{
  $arRep=$arResult["PROPERTIES"][$key]["VALUE"];
  //echo $arRep;
  foreach ($matches["0"] as $key2) {
    $chetchik=substr($key2, 1);
    $chetchik2=substr("$chetchik", 0, -1);
      //echo $key;
    if($chetchik2==$key){
$TITLEFROMRAZDEL = str_replace($key2, $arRep, $TITLEFROMRAZDEL);
    }
  }
}
  }

  $titleowergenerated[$key12345]=$TITLEFROMRAZDEL;
  }
}
  };
//$_SERVER['META'] = $titleowergenerated;

// echo "1234567890";
 //print_r($titleowergenerated);
$APPLICATION->SetPageProperty("titleNEW",$titleowergenerated["TITLE"]);
$APPLICATION->SetPageProperty("descriprionNEW",$titleowergenerated["DESCRIPTION"]);
$APPLICATION->SetPageProperty("keywordsNEW",$titleowergenerated["KEYWORDS"]);
//echo "098765";
//echo $APPLICATION->GetPageProperty("titleNEW");

?>

