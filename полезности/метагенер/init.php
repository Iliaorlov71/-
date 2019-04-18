

AddEventHandler("main", "OnEpilog", "changeMeta");
function changeMeta()
{
global $APPLICATION;
//тут было исправлено двойное отрицание != false
//пееписанное сео для элементов в разделе (новыйе аольз свойства элементов или польз поля разделов , приходят из резалт модифайра каталог элемент)
if($APPLICATION->GetPageProperty("titleNEW"))
$APPLICATION->SetPageProperty('title',htmlspecialchars_decode(strip_tags($APPLICATION->GetPageProperty("titleNEW"))));
if($APPLICATION->GetPageProperty("descriprionNEW"))
	$APPLICATION->SetPageProperty('description',htmlspecialchars_decode(strip_tags($APPLICATION->GetPageProperty("descriprionNEW"))));
if($APPLICATION->GetPageProperty("keywordsNEW")){
$arResrsesrsrr=strtolower(htmlspecialchars_decode(strip_tags($APPLICATION->GetPageProperty("keywordsNEW"))));
$test = str_replace(array('?','!',',',';','"','-'), "", $arResrsesrsrr);
$APPLICATION->SetPageProperty('keywords',$test);}


}
