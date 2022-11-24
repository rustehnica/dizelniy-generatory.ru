<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<a href="#" class="openWebFormModal link-dashed" data-id="0001">Доставка</a>

<div class="webformModal" id="webFormDwModal_0001">
	<div class="webformModalHideScrollBar">
		<div class="webformModalcn100">
			<div class="webformModalContainer">
				<div class="webFormDwModal delivery_modal" data-id="0001">
					<div class="webFormModalHeading">Доставка<a href="#" class="webFormModalHeadingExit"></a></div>
					<div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_RECURSIVE" => "Y",
								"AREA_FILE_SHOW" => "sect",
								"AREA_FILE_SUFFIX" => "delivery",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>