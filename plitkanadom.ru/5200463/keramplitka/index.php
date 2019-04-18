<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>


<table border="1">
   <caption> Список разделов</caption>
   <tr>
    <th style="width:300px">Урл</th>
    <th style="width:200px">Title</th>
    <th style="width:200px">H1</th>
    <th style="width:200px">Description</th>
   </tr>

   <?
   $arFilter = array('IBLOCK_ID' =>"4"); // выберет потомков без учета активности
    $rsSect = CIBlockSection::GetList(Array("section"=>"section"), $arFilter, false, Array("NAME","ID","DEPTH_LEVEL","UF_HEADER","UF_METATITLE","UF_METADESC","SECTION_PAGE_URL","IBLOCK_SECTION_ID"));
    while ($arSect = $rsSect->GetNext())
     {
   $arRes[]=$arSect;

     }
   foreach ($arRes as $inneritem) {
     if($inneritem["DEPTH_LEVEL"]==1){?>
   <tr><td> www.plitkanadom.ru<?echo $inneritem["SECTION_PAGE_URL"]?>/</td>
     <td><?if(!empty($inneritem["UF_METATITLE"])){echo $inneritem["UF_METATITLE"];}else{echo "Плиткa ".$inneritem["NAME"]." | Купить плитку ".$inneritem3["NAME"]." от ".$inneritem["IBLOCK_SECTION_ID"];}?></td>
     <?if(!empty($inneritem["UF_HEADER"])){?><td><?echo $inneritem["UF_HEADER"]?></td><?}else{?><td><?echo "Плитка ".$inneritem["NAME"]?></td><?}?>
     <?if(!empty($inneritem["UF_METADESC"])){?><td><?echo $inneritem["UF_METADESC"]?></td></tr><?}else{?><td><?echo "Предлагаем дешево купить плитку ".$inneritem["NAME"]." или керамогранит ".$inneritem["NAME"]." от Керамическая плитка. У нас низкие цены на плитку ".$inneritem["NAME"]."."?></td><?}?>
   <?foreach($arRes as $inneritem2){
   if($inneritem2["DEPTH_LEVEL"]==2 && $inneritem2["IBLOCK_SECTION_ID"]==$inneritem["ID"]){?>
    <tr><td style="padding-left:20px;"> www.plitkanadom.ru <?echo $inneritem2["SECTION_PAGE_URL"]?>/</td>
      <td><?if(!empty($inneritem2["UF_METATITLE"])){echo $inneritem2["UF_METATITLE"];}else{echo "Плиткa ".$inneritem2["NAME"]." | Купить плитку ".$inneritem2["NAME"]." от ".$inneritem["NAME"];}?></td>
  <?if(!empty($inneritem2["UF_HEADER"])){?><td><?echo $inneritem2["UF_HEADER"]?></td><?}else{?><td><?echo "Плитка ".$inneritem2["NAME"]?></td><?}?>
      <?if(!empty($inneritem2["UF_METADESC"])){?><td><?echo $inneritem2["UF_METADESC"]?></td></tr><?}else{?><td><?echo "Предлагаем дешево купить плитку ".$inneritem2["NAME"]." или керамогранит ".$inneritem2["NAME"]." от ".$inneritem["NAME"].". У нас низкие цены на плитку ".$inneritem2["NAME"]."."?></td><?}?>


  <? foreach($arRes as $inneritem3){
   if($inneritem3["DEPTH_LEVEL"]==3 && $inneritem3["IBLOCK_SECTION_ID"]==$inneritem2["ID"]){?>
    <tr><td style="padding-left:40px;"> www.plitkanadom.ru <?echo $inneritem3["SECTION_PAGE_URL"]?>/</td>
      <td><?if(!empty($inneritem3["UF_METATITLE"])){echo $inneritem3["UF_METATITLE"];}else{echo "Плиткa ".$inneritem3["NAME"]." | Купить плитку ".$inneritem3["NAME"]." от ".$inneritem2["NAME"];}?></td>
      <?if(!empty($inneritem3["UF_HEADER"])){?><td><?echo $inneritem3["UF_HEADER"]?></td><?}else{?><td><?echo "Плитка ".$inneritem3["NAME"]?></td><?}?>
      <?if(!empty($inneritem3["UF_METADESC"])){?><td><?echo $inneritem3["UF_METADESC"]?></td></tr><?}else{?><td><?echo "Предлагаем дешево купить плитку ".$inneritem3["NAME"]." или керамогранит ".$inneritem3["NAME"]." от ".$inneritem2["NAME"].". У нас низкие цены на плитку ".$inneritem3["NAME"]."."?></td><?}?>
<?   }
   }
   }
   }
     }
   }
   ?>
  </table>
