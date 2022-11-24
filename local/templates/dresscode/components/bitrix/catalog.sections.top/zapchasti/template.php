<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div id="zp">
	<div class="detailPropertiesTable">
		<?foreach($arResult["SECTIONS"] as $arSection):?>
			<table class="stats">
				<tbody>
					<tr class="cap">
						<td colspan="2">Запасные части: <span><?=$arSection["NAME"]?></span></td>
					</tr>					
					<?
					$num = 1;
					foreach($arSection["ITEMS"] as $arElement):
					?>
						<?
						$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
						?>
						<?if(($num % 2) == 0):?><tr><?else:?><tr class="gray"><?endif;?>
							<td class="name" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
								<span><?=$arElement["NAME"]?></span>
							</td>
							<td><?=$arElement["CATALOG_QUANTITY"] > 0 ? "В наличии" : "Под заказ"?></td>
						</tr>
						<?$num ++;?>
					<?endforeach;?>					
				</tbody>
			</table>
		<?endforeach?>
	</div>
</div>
