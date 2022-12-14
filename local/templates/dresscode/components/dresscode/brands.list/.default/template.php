<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?if(!empty($arResult["ITEMS"])):?>
	<?if(empty($arParams["AJAX"])):?>
	<div id="brandList" data-page="1">
		<a href="<?=SITE_DIR?>brands/"><span class="heading">Популярные производители двигателей</span></a>
		<div class="ajaxContainer">
	<?endif;?>
			<div class="items">
				<?foreach($arResult["ITEMS"] as $arElement):?>
					<?
						$this->AddEditAction($arElement["ID"], $arElement["EDIT_LINK"], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arElement["ID"], $arElement["DELETE_LINK"], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_DELETE"), array());
						$picture = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"], array("width" => $arParams["PICTURE_WIDTH"], "height" => $arParams["PICTURE_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL, false); 
						$picture["src"] = !empty($picture["src"]) ? $picture["src"] : SITE_TEMPLATE_PATH."/images/empty.png"; 
					?>
					<div class="item" id="<?=$this->GetEditAreaId($arElement["ID"]);?>">
						<div class="tabloid">
							<?if(!empty($arElement["PROPERTIES"]["OFFERS"]["VALUE"])):?>
								<div class="markerContainer">
									<?foreach ($arElement["PROPERTIES"]["OFFERS"]["VALUE"] as $ifv => $marker):?>
									    <div class="marker" style="background-color: <?=strstr($arElement["PROPERTIES"]["OFFERS"]["VALUE_XML_ID"][$ifv], "#") ? $arElement["PROPERTIES"]["OFFERS"]["VALUE_XML_ID"][$ifv] : "#424242"?>"><?=$marker?></div>
									<?endforeach;?>
								</div>
							<?endif;?>
							<a href="<?=$arElement["PROPERTIES"]["URL_FILTER"]["VALUE"]?>" class="picture">
								<?if($arParams["LAZY_LOAD_PICTURES"] == "Y"):?>
									<img src="<?=SITE_TEMPLATE_PATH?>/images/lazy.svg" data-lazy="<?=$picture["src"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" class="lazy">
								<?else:?>
									<img src="<?=$picture["src"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" class="lazy">
								<?endif;?>
							</a>
						</div>
					</div>
				<?endforeach;?>
				<?if(!empty($arResult["HIDE_LAST_ELEMENT"])):?>
					<div class="item last">
						<a href="#" class="showMore">
							<span class="wp">
								<span class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/images/showMoreSmall.png" alt="<?=GetMessage("BRAND_LIST_SHOW_MORE")?>"></span>
								<span class="ps"><?=GetMessage("BRAND_LIST_SHOW_MORE")?></span><span class="value"><?=$arResult["NEXT_ELEMENTS_COUNT"]?></span>
							</span>
						</a>
					</div>
				<?endif;?>
			</div>
	<?if(empty($arParams["AJAX"])):?>
			</div>
		</div>
	<?endif;?>
	<?if(empty($arParams["AJAX"])):?>
		<script type="text/javascript">
			var ajaxDirBrandList = "<?=$this->GetFolder();?>";
			var brandListParams = '<?=json_encode($arParams);?>';
		</script>
	<?endif;?>
<?endif;?>