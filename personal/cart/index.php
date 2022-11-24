<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><h1>Корзина</h1><?$APPLICATION->IncludeComponent(
	"dresscode:sale.basket.basket", 
	".default", 
	array(
		"HIDE_MEASURES" => "N",
		"BASKET_PICTURE_WIDTH" => "220",
		"BASKET_PICTURE_HEIGHT" => "200",
		"HIDE_NOT_AVAILABLE" => "N",
		"PRODUCT_PRICE_CODE" => array(
			0 => "BASE",
		),
		"GIFT_CONVERT_CURRENCY" => "Y",
		"PATH_TO_PAYMENT" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"COMPONENT_TEMPLATE" => ".default",
		"MIN_SUM_TO_PAYMENT" => "",
		"REGISTER_USER" => "Y",
		"PART_STORES_AVAILABLE" => "",
		"ALL_STORES_AVAILABLE" => "",
		"NO_STORES_AVAILABLE" => "",
		"SEND_SMS_MESSAGE" => "N",
		"ORDER_CONFIRM_BY_SMS_CODE" => "N",
		"LAZY_LOAD_PICTURES" => "N",
		"USE_MASKED" => "Y",
		"DISABLE_FAST_ORDER" => "N",
		"MASKED_FORMAT" => "+7 (999) 999-99-99",
		"GIFT_CURRENCY_ID" => "RUB"
	),
	false
);?><br /><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>