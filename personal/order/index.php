<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?><h1>История заказов</h1>
<?$APPLICATION->IncludeComponent("bitrix:menu", "personal", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "personal",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order", 
	".default", 
	array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/personal/order/",
		"ORDERS_PER_PAGE" => "10",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_BASKET" => "/personal/cart/",
		"SET_TITLE" => "Y",
		"SAVE_IN_SESSION" => "N",
		"NAV_TEMPLATE" => "round",
		"SHOW_ACCOUNT_NUMBER" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"PROP_1" => "",
		"PROP_2" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"CUSTOM_SELECT_PROPS" => array(
		),
		"HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"DETAIL_HIDE_USER_INFO" => array(
			0 => "PERSON_TYPE_NAME",
		),
		"PROP_5" => array(
		),
		"PROP_4" => array(
		),
		"PROP_6" => array(
		),
		"PROP_7" => array(
		),
		"PATH_TO_CATALOG" => "/catalog/",
		"DISALLOW_CANCEL" => "N",
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "F",
			1 => "N",
			2 => "P",
		),
		"REFRESH_PRICES" => "N",
		"ORDER_DEFAULT_SORT" => "STATUS",
		"STATUS_COLOR_F" => "gray",
		"STATUS_COLOR_N" => "green",
		"STATUS_COLOR_P" => "yellow",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",
		"SEF_URL_TEMPLATES" => array(
			"list" => "index.php",
			"detail" => "detail/#ID#/",
			"cancel" => "cancel/#ID#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>