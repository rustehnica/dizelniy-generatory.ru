<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");
	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
?>

<?if(!empty($arTemplateSettings["TEMPLATE_TELEPHONE_1"])):?>
	<span class="heading">
		<a style="color:#000;text-decoration:none;" href="tel:<?=$arTemplateSettings["TEMPLATE_TELEPHONE_1"]?>">
			<?=$arTemplateSettings["TEMPLATE_TELEPHONE_1"]?>
		</a>
	</span>
<?endif;?>

<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"modal", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "result_edit.php",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "result_list.php",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "5",
		"COMPONENT_TEMPLATE" => "modal",
		"MODAL_BUTTON_NAME" => "",
		"MODAL_BUTTON_CLASS_NAME" => "link callBack",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?>