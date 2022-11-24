 <?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

	<?
		$this->setFrameMode(false);
	?>

	<?if(count($arResult["ITEMS"]) > 1):?>
		<?$this->SetViewTarget("menuRollClass");?> menuRolled<?$this->EndViewTarget();?>
		<?$this->SetViewTarget("hiddenZoneClass");?> hiddenZone<?$this->EndViewTarget();?>
	<?endif;?>

	<?
		$this->SetViewTarget("smartFilter");
    ?>

	<?if(!empty($arResult["MENU_SECTIONS"]) && count($arResult["MENU_SECTIONS"]) > 1):?>
		<div id="nextSection">
			<span class="title"><?=GetMessage("SELECT_CATEGORY");?></span>
			<ul>
				<?foreach ($arResult["MENU_SECTIONS"] as $ic => $arSection):?>
					<li><a<?if($arSection["SELECTED"] != "Y"):?> href="<?=$arSection["FILTER_LINK"]?>"<?endif;?><?if($arSection["SELECTED"] == "Y"):?> class="selected"<?endif;?>><?=$arSection["NAME"]?> (<?=$arSection["ELEMENTS_COUNT"]?>)</a></li>
				<?endforeach;?>
			</ul>
		</div>
	<?endif;?>

	<?if(count($arResult["ITEMS"]) > 1):?>
		<?$APPLICATION->IncludeComponent(
			"dresscode:search.smart.filter",
			"",
			array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"FILTER_NAME" => "arrFilter",
				"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
				"SHOW_ALL_WO_SECTION" => "Y",
				"ELEMENTS_ID" => $arResult["ITEMS_ID"],
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"SAVE_IN_SESSION" => "N",
				"INSTANT_RELOAD" => "N",
				"PRICE_CODE" => $arParams["FILTER_PRICE_CODE"],
				"XML_EXPORT" => "N",
				"SECTION_TITLE" => "-",
				"SECTION_DESCRIPTION" => "-",
				"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
				"CURRENCY_ID" => $arParams["CURRENCY_ID"]
			),
			false
		);?>
	<?endif;?>
	<?
		$this->EndViewTarget();
	?>

	<h1><?=GetMessage("SEARCH_PAGE")?></h1>

	<?$BASE_PRICE = CCatalogGroup::GetBaseGroup();?>
	
<?if(!empty($arResult["SECTIONS"])):?>
	<h2><?=GetMessage("SECTION_FOR_SEARCH")?> &laquo;<?=$arResult["QUERY"]?>&raquo;</h2>
	<ul id="searchSection">
		<?foreach ($arResult["SECTIONS"] as $i => $arSection):?>
			<li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></li>
		<?endforeach;?>
	</ul>
<?endif;?>

<?if(!empty($arResult["ITEMS"])):?>
	<h3><?=GetMessage("PRODUCT_FOR_SEARCH")?> &laquo;<?=$arResult["QUERY"]?>&raquo;</h3>
	<?if(!empty($arResult["QUERY_REPLACE"])):?>
		<p><?=GetMessage("ERROR_IN_QUERTY")?></p>
	<?endif;?>
	<?
		global $arrFilter;
		unset($arrFilter["FACET_OPTIONS"]);
	?>
	<div id="catalog">
		<?$arrFilter["FACET_OPTIONS"] = array();?>
		<?reset($arTemplates);?>
		<?$APPLICATION->IncludeComponent(
	"dresscode:catalog.section", 
	"squares", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
		"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
		"PROPERTY_CODE" => array(
			0 => "",
			1 => $arParams["PROPERTY_CODE"],
			2 => "",
		),
		"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
		"LAZY_LOAD_PICTURES" => "N",
		"PRICE_CODE" => array(
		),
		"PAGER_TEMPLATE" => "round",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => $arParams["CURRENCY_ID"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"ADD_SECTIONS_CHAIN" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_MEASURES" => "N",
		"CACHE_TYPE" => "Y",
		"CACHE_FILTER" => "Y",
		"COMPONENT_TEMPLATE" => "squares",
		"SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"LINE_ELEMENT_COUNT" => "3",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false
);?>
	</div>
<?else:?>
	<?if(empty($arResult["SECTIONS"])):?>
		<div id="empty">
			<div class="emptyWrapper">
				<div class="pictureContainer">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/emptyFolder.png" alt="<?=GetMessage("EMPTY_HEADING")?>" class="emptyImg">
				</div>
				<div class="info">
					<h3><?=GetMessage("Q")?></h3>
					<p><?=GetMessage("EMPTY")?></p>
					<a href="<?=SITE_DIR?>" class="back"><?=GetMessage("MAIN")?></a>
				</div>
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "emptyMenu", Array(
				"ROOT_MENU_TYPE" => "left",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => "",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
				),
				false
			);?>
		</div>
	<?endif;?>
<?endif;?>