<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");
	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
?>
<noindex>
	<ul class="sn">
		<?if(!empty($arTemplateSettings["TEMPLATE_VK_LINK"])):?><li><a href="<?=$arTemplateSettings["TEMPLATE_VK_LINK"]?>" class="vk" rel="nofollow"></a></li><?endif;?>
		<?if(!empty($arTemplateSettings["TEMPLATE_FACEBOOK_LINK"])):?><li><a href="<?=$arTemplateSettings["TEMPLATE_FACEBOOK_LINK"]?>" class="fb" rel="nofollow"></a></li><?endif;?>
		<?if(!empty($arTemplateSettings["TEMPLATE_ODNOKLASSNIKI_LINK"])):?><li><a href="<?=$arTemplateSettings["TEMPLATE_ODNOKLASSNIKI_LINK"]?>" class="od" rel="nofollow"></a></li><?endif;?>
		<?if(!empty($arTemplateSettings["TEMPLATE_TWITTER_LINK"])):?><li><a href="<?=$arTemplateSettings["TEMPLATE_TWITTER_LINK"]?>" class="tw" rel="nofollow"></a></li><?endif;?>
		<?if(!empty($arTemplateSettings["TEMPLATE_INSTAGRAM_LINK"])):?><li><a href="<?=$arTemplateSettings["TEMPLATE_INSTAGRAM_LINK"]?>" class="go" rel="nofollow"></a></li><?endif;?>
		<?if(!empty($arTemplateSettings["TEMPLATE_YOUTUBE_LINK"])):?><li><a href="<?=$arTemplateSettings["TEMPLATE_YOUTUBE_LINK"]?>" class="yo" rel="nofollow"></a></li><?endif;?>
	</ul>
</noindex>