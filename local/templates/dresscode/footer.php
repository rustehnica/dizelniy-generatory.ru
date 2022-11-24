						<?IncludeTemplateLangFile(__FILE__);?>
						<?$APPLICATION->ShowViewContent("landing_page_bottom_text_container");?>
					</div>

				</div>
			</div>
		</div>
		<?$APPLICATION->ShowViewContent("no_main_container");?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "footerTabs",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "bigData",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<div id="footer"<?if(!empty($TEMPLATE_FOOTER_VARIANT) && $TEMPLATE_FOOTER_VARIANT != "default"):?> class="variant_<?=$TEMPLATE_FOOTER_VARIANT?>"<?endif;?>>
			<div id="rowFooter">
				<div id="leftFooter">
					<div class="footerRow">
						<div class="column">
							<span class="heading"><?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_menu_heading.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_MENU_HEADING"), "TEMPLATE" => "sect_footer_menu_heading.php"));?></span>
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"footerCatalog", 
								array(
									"ROOT_MENU_TYPE" => "left",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "36000000",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "top",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"COMPONENT_TEMPLATE" => "footerCatalog",
									"CACHE_SELECTED_ITEMS" => "N"
								),
								false
							);?>
						</div>
						
						<div class="column">
							<span class="heading"><?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_menu_heading3.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_MENU_HEADING3"), "TEMPLATE" => "sect_footer_menu_heading3.php"));?></span>
							<?$APPLICATION->IncludeComponent("bitrix:menu", "footerHelp", Array(
								"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => "",
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "top",
									"USE_EXT" => "N",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"CACHE_SELECTED_ITEMS" => "N"
								),
								false
							);?>
						</div>
					</div>
				</div>
				<div id="rightFooter">
					<table class="rightTable">
						<tr class="footerRow">
							<td class="leftColumn">
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT"), "TEMPLATE" => "sect_footer_left.php"));?>
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left2.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT2"), "TEMPLATE" => "sect_footer_left2.php"));?>
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left3.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT3"), "TEMPLATE" => "sect_footer_left3.php"));?>
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_counters.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_COUNTERS"), "TEMPLATE" => "sect_footer_counters.php"));?>
							</td>
							<td class="rightColumn">
								<div class="wrap">
									<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left4.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT4"), "TEMPLATE" => "sect_footer_left4.php"));?>
									<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_counters_right.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_COUNTERS"), "TEMPLATE" => "sect_footer_counters_right.php"));?>
									<?if(!empty($arTemplateSettings["TEMPLATE_GOOGLE_CODE"])):?>
										<?=trim($arTemplateSettings["TEMPLATE_GOOGLE_CODE"])?>
									<?endif;?>
									<?if(!empty($arTemplateSettings["TEMPLATE_COUNTERS_CODE"])):?>
										<?=trim($arTemplateSettings["TEMPLATE_COUNTERS_CODE"])?>
									<?endif;?>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>			
		</div>
		<div id="footerLine"<?if(!empty($TEMPLATE_FOOTER_LINE_COLOR) && $TEMPLATE_FOOTER_LINE_COLOR != "default"):?> class="color_<?=$TEMPLATE_FOOTER_LINE_COLOR?>"<?endif;?>>
			<div class="wrapper">
				<div class="col mobile">
					<a onclick="ym(48923648,'reachGoal','WA')" target="_blank" href="https://wa.me/79831088428"><img src="<?=SITE_TEMPLATE_PATH?>/images/wa.png"></a>				
					<a onclick="ym(48923648,'reachGoal','TG')" target="_blank" href="https://t.me/+79831088428"><img src="<?=SITE_TEMPLATE_PATH?>/images/tg.png"></a>					
				</div>
				<div class="col nomobile">
					<div class="item">
						<a href="<?=SITE_DIR?>callback/" class="callback"><span class="icon"></span> <?=GetMessage("FOOTER_CALLBACK_LABEL")?></a>
					</div>
					<div class="item">
						<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_telephone.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_TELEPHONE"), "TEMPLATE" => "sect_footer_telephone.php"));?>
					</div>
					<div class="item">
						<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_email.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_EMAIL"), "TEMPLATE" => "sect_footer_email.php"));?>
					</div>
				</div>
			    <div class="col nomobile">
				    <div id="flushFooterCart">
					    <?$APPLICATION->IncludeComponent(
							"bitrix:sale.basket.basket.line", 
							"bottomCart", 
							array(
								"HIDE_ON_BASKET_PAGES" => "N",
								"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
								"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
								"PATH_TO_PERSONAL" => SITE_DIR."personal/",
								"PATH_TO_PROFILE" => SITE_DIR."personal/",
								"PATH_TO_REGISTER" => SITE_DIR."login/",
								"POSITION_FIXED" => "N",
								"SHOW_AUTHOR" => "N",
								"SHOW_EMPTY_VALUES" => "Y",
								"SHOW_NUM_PRODUCTS" => "Y",
								"SHOW_PERSONAL_LINK" => "N",
								"SHOW_PRODUCTS" => "Y",
								"SHOW_TOTAL_PRICE" => "Y",
								"COMPONENT_TEMPLATE" => "bottomCart",
								"SHOW_DELAY" => "N",
								"SHOW_NOTAVAIL" => "N",
								"SHOW_SUBSCRIBE" => "N",
								"SHOW_IMAGE" => "Y",
								"SHOW_PRICE" => "Y",
								"SHOW_SUMMARY" => "Y",
								"PATH_TO_AUTHORIZE" => ""
							),
							false
						);?>
					</div>
				</div>
			</div>
		</div>
	</div>    
    <div id="overlap"></div>
    
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "cart",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "fastbuy",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "requestPrice",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"dresscode:catalog.product.subscribe.online", 
		".default", 
		array(
			"SITE_ID" => SITE_ID
		),
		false,
		array(
			"HIDE_ICONS" => "Y"
		)
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "landing",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>
	
	<?$APPLICATION->IncludeComponent(
		"dresscode:settings", 
		".default", 
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "360000"
		),
		false
	);?>
		
	
	

	<div id="upButton">
		<a href="#"></a>
	</div>

    <script type="text/javascript">
      var ajaxPath = "<?=SITE_DIR?>ajax.php";
      var SITE_DIR = "<?=SITE_DIR?>";
      var SITE_ID  = "<?=SITE_ID?>";
      var TEMPLATE_PATH = "<?=SITE_TEMPLATE_PATH?>";
    </script>
    
    <script type="text/javascript">
		var LANG = {
			BASKET_ADDED: "<?=GetMessage("BASKET_ADDED")?>",
			WISHLIST_ADDED: "<?=GetMessage("WISHLIST_ADDED")?>",
			ADD_COMPARE_ADDED: "<?=GetMessage("ADD_COMPARE_ADDED")?>",
			ADD_CART_LOADING: "<?=GetMessage("ADD_CART_LOADING")?>",
			ADD_BASKET_DEFAULT_LABEL: "<?=GetMessage("ADD_BASKET_DEFAULT_LABEL")?>",
			ADDED_CART_SMALL: "<?=GetMessage("ADDED_CART_SMALL")?>",
			CATALOG_AVAILABLE: "<?=GetMessage("CATALOG_AVAILABLE")?>",
			GIFT_PRICE_LABEL: "<?=GetMessage("GIFT_PRICE_LABEL")?>",
			CATALOG_ECONOMY: "<?=GetMessage("CATALOG_ECONOMY")?>",
			CATALOG_ON_ORDER: "<?=GetMessage("CATALOG_ON_ORDER")?>",
			CATALOG_NO_AVAILABLE: "<?=GetMessage("CATALOG_NO_AVAILABLE")?>",
			FAST_VIEW_PRODUCT_LABEL: "<?=GetMessage("FAST_VIEW_PRODUCT_LABEL")?>",
			WISHLIST_SENDED: "<?=GetMessage("WISHLIST_SENDED")?>",
			REQUEST_PRICE_LABEL: "<?=GetMessage("REQUEST_PRICE_LABEL")?>",
			REQUEST_PRICE_BUTTON_LABEL: "<?=GetMessage("REQUEST_PRICE_BUTTON_LABEL")?>",
			ADD_SUBSCRIBE_LABEL: "<?=GetMessage("ADD_SUBSCRIBE_LABEL")?>",
			REMOVE_SUBSCRIBE_LABEL: "<?=GetMessage("REMOVE_SUBSCRIBE_LABEL")?>"
		};
	</script>
	<script type="text/javascript">
		<?if(!empty($arTemplateSettings)):?>
			var globalSettings = {
			<?foreach($arTemplateSettings as $settingsIndex => $nextSettingValue):?>
				<?if(!DwSettings::checkSecretSettingsByIndex($settingsIndex)):?>
					"<?=$settingsIndex?>": '<?=$nextSettingValue?>',
				<?endif;?>
			<?endforeach;?>
			}
		<?endif;?>
	</script>
<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","6xbdut04");
</script>
<!-- Обратная связь -->
<script type='text/javascript'>
jQuery(document).ready(function(){
	jQuery(document).on('submit', 'form[name="SIMPLE_FORM_4"]', function() { 
		var m = jQuery(this);
		var phone = m.find('input[name="form_text_12"]').val(); 
		var fio = m.find('input[name="form_text_10"]').val(); 
        var mail = m.find('input[name="form_email_11"]').val();
        var comment = m.find('textarea[name="form_textarea_17"]').val(); 
        var isChecked = m.find('input[type=checkbox]').is(':checked');
		var ct_site_id = '44965';
		var sub = 'Обратная связь';
		var ct_data = {
			fio: fio,
			phoneNumber: phone,
            comment: comment,
            email: mail,
			subject: sub,
			requestUrl: location.href,
			sessionId: window.call_value
		};
		console.log(ct_data);
		if (!!phone&&!!mail&&!!comment&&!!isChecked){
			jQuery.ajax({  
			  url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', 
			  dataType: 'json', type: 'POST', data: ct_data, async: false
			}); 
		}
	});
	});
	</script>
<!-- Обратная связь -->
<!-- Заказть звонок -->
<script type='text/javascript'>
jQuery(document).ready(function(){
	jQuery(document).on('submit', 'form[name="SIMPLE_FORM_3"]', function() { 
		var m = jQuery(this);
		var phone = m.find('input[name="form_text_8"]').val(); 
		var fio = m.find('input[name="form_text_9"]').val(); 
        var isChecked = m.find('input[type=checkbox]').is(':checked');
		var ct_site_id = '44965';
		var sub = 'Заказать звонок';
		var ct_data = {
			fio: fio,
			phoneNumber: phone,
			subject: sub,
			requestUrl: location.href,
			sessionId: window.call_value
		};
		console.log(ct_data);
		if (!!phone&&!!isChecked){
			jQuery.ajax({  
			  url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', 
			  dataType: 'json', type: 'POST', data: ct_data, async: false
			}); 
		}
	});
	});
	</script>
<!-- Заказть звонок -->
<!-- в 1 клик -->
<script type='text/javascript'>
    jQuery(document).ready(function(){
        jQuery('#requestPriceSubmit').on('click', function() { 
            var m = jQuery(this).closest('form');
            var phone = m.find('input[name="telephone"]').val(); 
            var fio = m.find('input[name="name"]').val(); 
            var isChecked = m.find('input[type=checkbox]').is(':checked');
            var ct_site_id = '44965';
            var sub = 'В 1 клик';
            var ct_data = {
                fio: fio,
                phoneNumber: phone,
                subject: sub,
                requestUrl: location.href,
                sessionId: window.call_value
            };
            console.log(ct_data);
            if (!!phone&&!!fio&&!!isChecked){
                jQuery.ajax({  
                  url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', 
                  dataType: 'json', type: 'POST', data: ct_data, async: false
                }); 
            }
        });
        });
        </script>
<!-- в 1 клик -->

<script type="text/javascript">
jQuery(document).on('click', '#requestPriceForm #requestPriceSubmit', function() {
	var m = jQuery(this).closest('#requestPriceForm');
    var fio = m.find('input[name="name"]').val();
    var phone = m.find('input[name="telephone"]').val();
    var comment = m.find('textarea[name="message"]').val();
	var ct_check = m.find('input[type="checkbox"]').prop('checked');
    var ct_site_id = '44965';
    var sub = 'Запросить цену';
    var ct_data = {
        fio: fio,
        phoneNumber: phone,
		comment: comment,
		subject: sub,
		requestUrl: location.href,
        sessionId: window.call_value
    };
	var ct_valid = !!fio && !!phone && !!ct_check;
	console.log(ct_data, ct_valid);
    if (!!ct_valid && window.ct_snd_flag != 1){
		window.ct_snd_flag = 1; setTimeout(function(){ window.ct_snd_flag = 0; }, 20000);
        jQuery.ajax({
            url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',  
            dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
});
</script>

<script type="text/javascript">
var _ctreq_b24 = function(data) {
    var sid = 44965;
    var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
    var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
    var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
    request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
};
window.addEventListener('b24:form:submit', function(e){
    var form = event.detail.object;
    if (form.validated){
        var fio = ''; var phone = ''; var email = ''; var comment = '';
        form.getFields().forEach(function(el){
            if(el.name=='LEAD_NAME' || el.name=='CONTACT_NAME'){ fio = el.value(); }
            if(el.name=='LEAD_PHONE' || el.name=='CONTACT_PHONE'){ phone = el.value(); }
            if(el.name=='LEAD_EMAIL' || el.name=='CONTACT_EMAIL'){ email = el.value(); }
            if(el.name=='LEAD_COMMENTS' || el.name=='DEAL_COMMENTS '){ comment = el.value(); }
        });
        var sub = 'Заявка с формы Bitrix24 ' + location.hostname;
        var ct_data = {fio: fio, phoneNumber: phone, email: email, comment: comment, subject: sub, requestUrl: location.href, sessionId: window.call_value};
        console.log(ct_data);
        if (!!phone || !!email) _ctreq_b24(ct_data);
    }
});
</script>
<script>
window.addEventListener('onBitrixLiveChat', function(event){
    var widget = event.detail.widget;
    widget.subscribe({
        type: BX.LiveChatWidget.SubscriptionType.every, callback: function(ev){
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userMessage){
                if (!window.ct_snd_flag && !!window.ct){ ct('goal','b24chat'); window.ct_snd_flag = 1; }
            }
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userForm){
                var sid = 44965;
                var fio = ''; var phone = ''; var email = '';
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.name){ fio = ev.data.fields.name; }
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.phone){ phone = ev.data.fields.phone; }
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.email){ email = ev.data.fields.email; }
                var ct_data = {}; ct_data.phoneNumber = phone; ct_data.fio = fio; ct_data.email = email; ct_data.requestUrl = location.href; ct_data.sessionId = window.call_value;
                ct_data.subject = 'Чат Bitrix24 посетитель оставил контакты';
                var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
                var post_data = Object.keys(ct_data).reduce(function(a,k){if(!!ct_data[k]){a.push(k+'='+encodeURIComponent(ct_data[k]));}return a},[]).join('&');
                var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
                request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
            }
        }
    });
});
</script>

<!-- calltouch -->
<!-- Marquiz button -->
<div data-marquiz-id="5e4b816e9400bb00444c7d13"></div>
<script>(function(t, p) {window.Marquiz ? Marquiz.add([t, p]) : document.addEventListener('marquizLoaded', function() {Marquiz.add([t, p])})})('Button', {id: '5e4b816e9400bb00444c7d13', buttonText: 'Спецпредложение', bgColor: '#ed1c24', textColor: '#ffffff', rounded: true, shadow: 'rgba(237, 28, 36, 0.5)', blicked: true, fixed: 'left'})</script>
<!-- Marquiz button -->

</body>
</html>