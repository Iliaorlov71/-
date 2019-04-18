<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?if ($_REQUEST["ajax"] == "Y") {
    $APPLICATION->RestartBuffer();



		$arFilter = array('IBLOCK_ID' =>"16","DEPTH_LEVEL"=>"2",'<TIMESTAMP_X' => date($DB->DateFormatToPHP(FORMAT_DATETIME), time()-1000));
	  $rsSect = CIBlockSection::GetList(Array("section"=>"section"), $arFilter, false, Array("NAME","ID","UF_SEO_H1","DEPTH_LEVEL","TIMESTAMP_X"),Array("nTopCount"=>"2"));
	 while ($arSect = $rsSect->GetNext())
	 {
	 $arRes[]=$arSect;
	 }
	//print_r($arRes);
	//echo count($arRes);

	// //ИЗМЕНЕНИЕ КАТАЛОГОВ С ВЛОЖЕННОСТЬю
	foreach($arRes as $id2){
    //уровень вложенности
	   if($id2["DEPTH_LEVEL"]=="4"){
	     if(!empty($id2["UF_SEO_H1"])){
              $str1=$id2["UF_SEO_H1"];
              $str2=substr($id2["UF_SEO_H1"], 1); // обрезан 1 символ
              $str3=substr($str1, 0, 1);
              $str4=mb_strtolower($str3);
              $str5=$str4.$str2;

	     }else{
         $str1=$id2["NAME"];
         $str2=substr($id2["NAME"], 1); // обрезан 1 символ
         $str3=substr($str1, 0, 1);
         $str4=mb_strtolower($str3);
         $str5=$str4.$str2;
	     }

	     $bs2 = new CIBlockSection;
       $arFields2 =Array(
       "TIMESTAMP_X" =>date($DB->DateFormatToPHP(FORMAT_DATETIME), time()-2),
    );
       $arFields2["IPROPERTY_TEMPLATES"] = array(


              "SECTION_META_TITLE" =>"Купить ".$str5." в секс-шопе с доставкой по Москве и России",
         );

	   $bs2->Update($id2["ID"], $arFields2);
	  }
	}
    //print_r($arRes);
   	echo count($arRes);
   die();

}?>
<script>
    function go(){
        $.post("index.php", {ajax: "Y"}, function(data) {
            data = parseInt(data);
            if (data > 0) {
                var count = parseInt($(".result").html());
                count = count + data;
                $(".result").html(count);
                go();
            } else {
                alert("обработка завершена");
            }
        })
    }
</script>
<button onclick="go();">начать</button><br>
Элементов обработано: <span class="result">0</span>
