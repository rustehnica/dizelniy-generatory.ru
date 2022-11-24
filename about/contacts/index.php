<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?><h1>Контактная информация</h1>
 <?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");
	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
?> <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
<ul class="contactList">
	 <?if(!empty($arTemplateSettings["TEMPLATE_TELEPHONE_1"]) || !empty($arTemplateSettings["TEMPLATE_TELEPHONE_2"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont1.png" src="/local/templates/dresscode/images/cont1.png" title="cont1.png">
		</td>
		<td>
			 <?if(!empty($arTemplateSettings["TEMPLATE_TELEPHONE_1"])):?><?=$arTemplateSettings["TEMPLATE_TELEPHONE_1"]?><br>
			 <?endif;?>
<table style="width:100%;">
									
									<tr></tr>
								</table>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?> <?if(!empty($arTemplateSettings["TEMPLATE_EMAIL_1"]) || !empty($arTemplateSettings["TEMPLATE_EMAIL_2"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont2.png" src="/local/templates/dresscode/images/cont2.png" title="cont2.png">
		</td>
		<td>
			 <?if(!empty($arTemplateSettings["TEMPLATE_EMAIL_1"])):?> <a href="mailto:<?=$arTemplateSettings?>" title="<?=$arTemplateSettings['TEMPLATE_EMAIL_1']?>" class="bxhtmled-surrogate"><?=$arTemplateSettings["TEMPLATE_EMAIL_1"]?></a><br>
			 <?endif;?> <?if(!empty($arTemplateSettings["TEMPLATE_EMAIL_2"])):?> <a href="mailto:<?=$arTemplateSettings?>" title="<?=$arTemplateSettings['TEMPLATE_EMAIL_2']?>" class="bxhtmled-surrogate"><?=$arTemplateSettings['TEMPLATE_EMAIL_2']?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span></a><br>
			 <?endif;?>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?> <?if(!empty($arTemplateSettings["TEMPLATE_FULL_ADDRESS"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont3.png" src="/local/templates/dresscode/images/cont3.png" title="cont3.png">
		</td>
		<td>
			<div class="contactAddress">
				 <?=$arTemplateSettings["TEMPLATE_FULL_ADDRESS"]?>
			</div>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?> <?if(!empty($arTemplateSettings["TEMPLATE_WORKING_TIME"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont4.png" src="/local/templates/dresscode/images/cont4.png" title="cont4.png">
		</td>
		<td>
			 <?=$arTemplateSettings["TEMPLATE_WORKING_TIME"]?>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?>
</ul>



<ul class="contactList">
	 <?if(!empty($arTemplateSettings["TEMPLATE_TELEPHONE_1"]) || !empty($arTemplateSettings["TEMPLATE_TELEPHONE_2"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont1.png" src="/local/templates/dresscode/images/cont1.png" title="cont1.png">
		</td>
		<td>
			 +7 (383) 242-71-23

		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?> <?if(!empty($arTemplateSettings["TEMPLATE_EMAIL_1"]) || !empty($arTemplateSettings["TEMPLATE_EMAIL_2"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont2.png" src="/local/templates/dresscode/images/cont2.png" title="cont2.png">
		</td>
		<td>
			  <a href="mailto:nsk@ruteh.ru" class="bxhtmled-surrogate">nsk@ruteh.ru</a>
			 
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont3.png" src="/local/templates/dresscode/images/cont3.png" title="cont3.png">
		</td>
		<td>
			<div class="contactAddress">
				 630110, Новосибирская область, г. Новосибирск, ул.Писемского, 7, офис 8
			</div>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	  <?if(!empty($arTemplateSettings["TEMPLATE_WORKING_TIME"])):?>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont4.png" src="/local/templates/dresscode/images/cont4.png" title="cont4.png">
		</td>
		<td>
			 <?=$arTemplateSettings["TEMPLATE_WORKING_TIME"]?>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	 <?endif;?>
</ul>










 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array(
			0 => "TYPECONTROL",
			1 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:54.27804242741241;s:10:\"yandex_lon\";d:83.42109227268635;s:12:\"yandex_scale\";i:7;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:83.643232002258;s:3:\"LAT\";d:53.323239048836;s:4:\"TEXT\";s:21:\"ООО Арктика\";}i:1;a:3:{s:3:\"LON\";d:82.978155338145;s:3:\"LAT\";d:55.079877651273;s:4:\"TEXT\";s:56:\"Представительство ООО Арктика\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		)
	),
	false
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>