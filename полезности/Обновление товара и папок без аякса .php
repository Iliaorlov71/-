<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');?>

<?
//СПИСОК СТРАНИЦ ЗАДАН БЫЛ ЭКСЕЛЕМ , ЗАКИДЫВАЙТЕ СВОЙ КАК ХОТИТЕ

// !!!!!!!!!!!!!!!!!!!!!аккуратней с вложенными папками, у них изменяется как и у родителя

$arUrls = array('1' => 'https://lovedoctor.ru/catalog/seks-igrushki/',
'https://lovedoctor.ru/catalog/seks-igrushki/falloimitatory/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_probki_i_vtulki/',
'https://lovedoctor.ru/catalog/bele-odezhda/',
'https://lovedoctor.ru/catalog/seks-igrushki/kukly/',
'https://lovedoctor.ru/catalog/seks-igrushki/vibratory/',
'https://lovedoctor.ru/catalog/seks-igrushki/vaginy_i_masturbatory/',
'https://lovedoctor.ru/catalog/seks-igrushki/nasadki/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/analnye/',
'https://lovedoctor.ru/catalog/seks-igrushki/seks_mashiny/',
'https://lovedoctor.ru/catalog/seks-igrushki/massazher_prostaty/',
'https://lovedoctor.ru/catalog/seks-igrushki/vaginalnye_shariki/',
'https://lovedoctor.ru/catalog/seks-igrushki/dvoynye_strapony/',
'https://lovedoctor.ru/catalog/seks-igrushki/erektsionnye_koltsa/',
'https://lovedoctor.ru/catalog/seks-igrushki/rezinovye_naduvnye_seks_kukly/',
'https://lovedoctor.ru/catalog/seks-igrushki/stimulyatsiya_klitora/',
'https://lovedoctor.ru/catalog/bele-odezhda/nizhnee_bele_1/',
'https://lovedoctor.ru/catalog/seks-igrushki/realistichnye_seks_kukly/',
'https://lovedoctor.ru/catalog/seks-igrushki/vakuumnye_pompy/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_falloimitatory/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_vibratory/',
'https://lovedoctor.ru/catalog/bele-odezhda/zhenskoe_bele_1/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/ekstendery_i_aksessuary/',
'https://lovedoctor.ru/catalog/bele-odezhda/bolshie-razmery/',
'https://lovedoctor.ru/catalog/bele-odezhda/igrovye_kostyumy/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_rasshiriteli/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/bdsm/',
'https://lovedoctor.ru/catalog/seks-igrushki/falloprotezy/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/geli_i_smazki/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/uvelichenie_polovogo_chlena/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_stimulyatory/',
'https://lovedoctor.ru/catalog/seks-igrushki/na_prisoske/',
'https://lovedoctor.ru/catalog/seks-igrushki/bezremnevye/',
'https://lovedoctor.ru/catalog/seks-igrushki/dlya_tochki_g/',
'https://lovedoctor.ru/catalog/seks-igrushki/dlya-par/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_tsepochki/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/zazhimy_dlya_soskov/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/maski/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/klyapy/',
'https://lovedoctor.ru/catalog/seks-igrushki/giganty/',
'https://lovedoctor.ru/catalog/bele-odezhda/styuardessa/',
'https://lovedoctor.ru/catalog/seks-igrushki/klassicheskie-vibratory/',
'https://lovedoctor.ru/catalog/seks-igrushki/pompy_dlya_muzhchin/',
'https://lovedoctor.ru/catalog/bele-odezhda/gornichnaya/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/prezervativy_dlya_oralnogo_seksa/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/sedobnye/',
'https://lovedoctor.ru/catalog/bele-odezhda/stringi_trusiki_sex/',
'https://lovedoctor.ru/catalog/bele-odezhda/shkolnitsa/',
'https://lovedoctor.ru/catalog/bele-odezhda/zaychiki_i_koshechki/',
'https://lovedoctor.ru/catalog/bele-odezhda/medsestra/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/naruchniki_okovy/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/prodlevayushchie/',
'https://lovedoctor.ru/catalog/seks-igrushki/muzhchiny_i_transseksualy/',
'https://lovedoctor.ru/catalog/seks-igrushki/s_moshonkoy/',
'https://lovedoctor.ru/catalog/seks-igrushki/s_dvoynym_proniknoveniem/',
'https://lovedoctor.ru/catalog/seks-igrushki/pompy_dlya_zhenshchin/',
'https://lovedoctor.ru/catalog/seks-igrushki/nasadki_i_koltsa/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_strapony/',
'https://lovedoctor.ru/catalog/seks-igrushki/dvoynye_vibratory/',
'https://lovedoctor.ru/catalog/afrodiziaki/muzhskie/',
'https://lovedoctor.ru/catalog/bele-odezhda/muzhskoe_bele/',
'https://lovedoctor.ru/catalog/seks-igrushki/rotatory/',
'https://lovedoctor.ru/catalog/tigr_laokhu_1_sharik.html',
'https://lovedoctor.ru/catalog/bele-odezhda/korsety/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/',
'https://lovedoctor.ru/catalog/seks-igrushki/masturbatory_s_vibratsiey/',
'https://lovedoctor.ru/catalog/vaginalnye_shariki_geisha_balls_fun_toys_.html',
'https://lovedoctor.ru/catalog/bele-odezhda/trusy_boksery/',
'https://lovedoctor.ru/catalog/seks-igrushki/na_yazyk_i_na_palets/',
'https://lovedoctor.ru/catalog/seks-igrushki/bez_moshonki/',
'https://lovedoctor.ru/catalog/seks-igrushki/nasadki_dlya_seks_mashin/',
'https://lovedoctor.ru/catalog/seks-igrushki/s_vibratsiey/',
'https://lovedoctor.ru/catalog/seks-igrushki/silikonovye_seks_kukly/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/suveniry/',
'https://lovedoctor.ru/catalog/seks-igrushki/realistiki/',
'https://lovedoctor.ru/catalog/bele-odezhda/mini_platya_eroticheskie/',
'https://lovedoctor.ru/catalog/seks-igrushki/steklyannye/',
'https://lovedoctor.ru/catalog/vibrotrusiki_s_pultom_distantsionnogo_upravleniya.html',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/meditsinskiy_fetish/',
'https://lovedoctor.ru/catalog/ledentsy_v_vide_penisa.html',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/vaginalnye/',
'https://lovedoctor.ru/catalog/seks_mashina_tsezar_4_0.html',
'https://lovedoctor.ru/catalog/seks-igrushki/s_semyaizverzheniem/',
'https://lovedoctor.ru/catalog/seks_mashina_machina_gun_chernaya.html',
'https://lovedoctor.ru/catalog/seks-igrushki/so_smeshchennym_tsentrom_tyazhesti/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/svechi/',
'https://lovedoctor.ru/catalog/vibrator_delfin_goluboy_5_5_sm.html',
'https://lovedoctor.ru/catalog/bele-odezhda/politseyskiy/',
'https://lovedoctor.ru/catalog/seks-igrushki/masturbatory_rotiki/',
'https://lovedoctor.ru/catalog/seks-igrushki/strapony_na_remnyakh/',
'https://lovedoctor.ru/catalog/bele-odezhda/novogodnie_kostyumy/',
'https://lovedoctor.ru/catalog/seks-igrushki/trenazhery_kegelya/',
'https://lovedoctor.ru/catalog/seks-igrushki/vibroyaytsa/',
'https://lovedoctor.ru/catalog/kostyum_kleopatra_m.html',
'https://lovedoctor.ru/catalog/seks-igrushki/dlja-zhenshhin/',
'https://lovedoctor.ru/catalog/seks-igrushki/vaginy_s_vibratsiey/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/sbrui/',
'https://lovedoctor.ru/catalog/seks-igrushki/mini_vibratory/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/aksessuary_dlya_bondazha/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/seks_kacheli/',
'https://lovedoctor.ru/catalog/seks-igrushki/dlja-muzhchin/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/podarki_1/',
'https://lovedoctor.ru/catalog/afrodiziaki/zhenskie/',
'https://lovedoctor.ru/catalog/prezervativy_spring_klassicheskie_3_sht.html',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_shariki_s_vibratsiey/',
'https://lovedoctor.ru/catalog/kostyum_piratki_s_poyasom.html',
'https://lovedoctor.ru/catalog/vibrator_a_toys_s_podogrevom_19_sm.html',
'https://lovedoctor.ru/catalog/analnaya_vtulka_toyfa_a_toys_fioletovaya_11_3_sm.html',
'https://lovedoctor.ru/catalog/myagkaya_igrushka_podushka_grud.html',
'https://lovedoctor.ru/catalog/pulsator_stronic_drei_biryuzovyy_zaryadnoe_ustroystvo_23_sm.html',
'https://lovedoctor.ru/catalog/rasshiryayushchiysya_fallos_s_grushey_telesnyy_17_sm.html',
'https://lovedoctor.ru/catalog/seks-igrushki/universalnye/',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/pletki_i_steki/',
'https://lovedoctor.ru/catalog/naduvnaya_vagina.html',
'https://lovedoctor.ru/catalog/shirokoe_erektsionnoe_koltso_s_analnym_stimulyatorom_i_vibropuley_silikonovoe_chernoe.html',
'https://lovedoctor.ru/catalog/massazher_prostaty_nexus_revo_2_chernyy.html',
'https://lovedoctor.ru/catalog/seks-igrushki/vibrotrusiki_i_babochki/',
'https://lovedoctor.ru/catalog/bele-odezhda/kupalniki/',
'https://lovedoctor.ru/catalog/krem_prolongator_garmoniya_lyuks_15_ml.html',
'https://lovedoctor.ru/catalog/seks_mashina_stroking_man_iii.html',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_tonneli/',
'https://lovedoctor.ru/catalog/vakuum_volnovoy_beskontaktnyy_stimulyator_klitora_satisfyer_pro_penguin.html',
'https://lovedoctor.ru/catalog/vibrator_dvoynoy_gelevyy_krasnyy_scala_.html',
'https://lovedoctor.ru/catalog/fetish-i-bdsm/stanki/',
'https://lovedoctor.ru/catalog/nasadka_dlya_skvirta_s_vibratsiey_stenford_chernaya.html',
'https://lovedoctor.ru/catalog/vaginalnye_shariki_geisha_balls_2.html',
'https://lovedoctor.ru/catalog/seks-igrushki/relefnye/',
'https://lovedoctor.ru/catalog/kostyum_krasnoy_shapochki.html',
'https://lovedoctor.ru/catalog/kostyum_moryachki.html',
'https://lovedoctor.ru/catalog/intimnyy_gel_lubrikant_dlya_muzhchin_dlya_uvelicheniya_titan_gel_tantra_50_ml.html',
'https://lovedoctor.ru/catalog/nasadka_klitoralnaya.html',
'https://lovedoctor.ru/catalog/povodok_na_penis_krasnyy.html',
'https://lovedoctor.ru/catalog/seks_mashina_bondage.html',
'https://lovedoctor.ru/catalog/vibrovagina_vagina_anus_huge.html',
'https://lovedoctor.ru/catalog/vibroyaytso_a_toys_fioletovoe.html',
'https://lovedoctor.ru/catalog/masturbator_fleshlight_girls_stoya_lotus_vagina.html',
'https://lovedoctor.ru/catalog/seks-igrushki/dlya_tochki_g_1/',
'https://lovedoctor.ru/catalog/seks-igrushki/realistichnye/',
'https://lovedoctor.ru/catalog/klyap_trenzel.html',
'https://lovedoctor.ru/catalog/kukla_tselnolitaya_penthouse_jenna_rose_telesnaya_s_vibratsiey.html',
'https://lovedoctor.ru/catalog/seks_mashina_motion.html',
'https://lovedoctor.ru/catalog/seks_mashina_slayder_2_0.html',
'https://lovedoctor.ru/catalog/vaginalnye_shariki_nalone_yany_metallicheskie_siniy_zoloto.html',
'https://lovedoctor.ru/catalog/bele-odezhda/futbolki_i_mayki/',
'https://lovedoctor.ru/catalog/mini_vibrator_erotist_adult_toys_fioletovyy.html',
'https://lovedoctor.ru/catalog/vozbuzhdayushchie_kapli_dlya_dvoikh_libo_drops_m_w_30_ml.html',
'https://lovedoctor.ru/catalog/kolodki_universalnye.html',
'https://lovedoctor.ru/catalog/seks-igrushki/nebolshie-falloimitatory-/',
'https://lovedoctor.ru/catalog/intimnaya-kosmetika-smazki/vozbuzhdayushchie_smazki/',
'https://lovedoctor.ru/catalog/seks-igrushki/analnye_giganty/',
'https://lovedoctor.ru/catalog/seks-igrushki/massazhery_tela/',
'https://lovedoctor.ru/catalog/seks-igrushki/masturbatory_bez_vibratsii/',
'https://lovedoctor.ru/catalog/seks-igrushki/mini_seks_kukly/',
'https://lovedoctor.ru/catalog/falloimitator_squirt_s_imitatsiey_semyaizverzheniya_17_sm.html', );

foreach ($arUrls as $key => $value) {
$arUrlssubstr[$key]=substr("$value", 29);
}
foreach ($arUrlssubstr as $key => $value) {
  $arUrlssubstr2[] = explode("/", $value);
}
foreach($arUrlssubstr2 as $item){
if(isset($item["3"])){
$arUrlssubstrAll[]=$item["2"];
}else{
$arUrlssubstrAll[]=$item["1"];
}}
foreach ($arUrlssubstrAll as $item) {
$substrresfactor=substr("$item", -4);
if($substrresfactor ==="html"){
  $preelement=explode(".", $item);
  $elem[]=$preelement["0"];

}else{
$catal[]=$item;
}}
//print_r($elem);
//print_r($catal);
//получили 2 массива с символьными кодами , 1 с кодами товаов, другой - с каталогом
//

// $arFields["IBLOCK_ID"]="16";
// $arFields["ID"]="159099";
// $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues($arFields["IBLOCK_ID"], $arFields["ID"]);
// $arElMetaProp = $ipropValues->getValues();
//
//
// //print_r($arElMetaProp);


//
// $bs = new CIBlockSection;
//
// $arFields["IPROPERTY_TEMPLATES"] = array(
//        "ELEMENT_META_TITLE" =>"test",
//     );
//
//     $bs->Update("261", $arFields);


//ГЕТЛИСТ К ЭЛЕМЕНТАМ
// $arSelect = Array("ID", "NAME");
// $arFilter = Array("IBLOCK_ID"=>"16", 'CODE'=>$elem);
// $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
// while($ob = $res->GetNextElement())
// {
//  $arFields[] = $ob->GetFields();
//
// }
// print_r($arFields);   //ДАЛЬШЕ ЗАКОМЕНЧЕНО ИЗМЕНЕНИЕ элементов

// foreach($arFields as $id){
// $str = mb_strtolower($id["NAME"]);
// $el = new CIBlockElement;
//
// $arFieldschanges["IPROPERTY_TEMPLATES"] = array(
//       "ELEMENT_META_TITLE" =>"Купить ".$str." в секс-шопе с доставкой по Москве и России",
//     );
// $PRODUCT_ID = $id["ID"];
//
// $res2 = $el->Update("$PRODUCT_ID", $arFieldschanges);
// }






//ГЕТЛИСТ К КАТАЛОГАМ
  $arFilter = array('IBLOCK_ID' =>"16","DEPTH_LEVEL"=>3,'<TIMESTAMP_X' => date($DB->DateFormatToPHP(FORMAT_DATETIME), time()-604800),);
  $rsSect = CIBlockSection::GetList(Array("section"=>"section"), $arFilter, false, Array("NAME","ID","UF_SEO_H1","DEPTH_LEVEL","TIMESTAMP_X"),Array("nTopCount"=>"100"));
 while ($arSect = $rsSect->GetNext())
 {
 $arRes[]=$arSect;
 }
print_r($arRes);
echo count($arRes);

//ИЗМЕНЕНИЕ КАТАЛОГОВ С ВЛОЖЕННОСТЬю
foreach($arRes as $id2){
   if($id2["DEPTH_LEVEL"]=="3"){
     if(!empty($id2["UF_SEO_H1"])){
           $str = mb_strtolower($id2["UF_SEO_H1"]);
     }else{
       $str = mb_strtolower($id2["NAME"]);

     }

     $bs2 = new CIBlockSection;

 $arFields2["IPROPERTY_TEMPLATES"] = array(
       "SECTION_META_TITLE" =>"Купить ".$str." в секс-шопе с доставкой по Москве и России",
   );

   $bs2->Update($id2["ID"], $arFields2);
  }
}



?>
<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');?>




ssh name@ip 
par 
 
sudo reboot 



