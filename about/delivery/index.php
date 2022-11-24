<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?><h1>Доставка</h1>
 <?$APPLICATION->IncludeComponent(
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
<div class="global-block-container">
	<div class="global-content-block">
		 &nbsp; &nbsp; &nbsp;Компания «АРКТИКА» организует доставку всего спектра предлагаемого оборудования по всей России: открытые и контейнерные электростанции, контейнеры с технологическим оборудованием, модульные конструкции, генераторные установки в кожухе и портативные электростанции.
		<p>
			 &nbsp; &nbsp; &nbsp;Доставка крупногабаритного и&nbsp;негабаритного груза рассчитывается в&nbsp;индивидуальном порядке и&nbsp;зависит от&nbsp;дальности доставки, способа погрузки и&nbsp;разгрузки, веса и&nbsp;типа оборудования и&nbsp;необходимости такелажных работ.
		</p>
		<p>
			 &nbsp; &nbsp; Организация доставки крупногабаритного и&nbsp;негабаритного груза осуществляется транспортными компаниями-партнёрами «АРКТИКА» или той транспортной компанией, которая удобна вам.
		</p>
		<p>
			 &nbsp; &nbsp; Мы работаем с рядом российских компаний по доставке товаров в пределах Российской Федерации и стран СНГ. Ниже приведены примерная стоимость и сроки доставки.
		</p>
		<p>
			 &nbsp; &nbsp;Для уточнения тарифов и сроков поставки, а также по всем возникающим вопросам, пожалуйста, обращайтесь к нам по телефону +7 983 108 84 28 или отправьте свой запрос на&nbsp;<a href="mailto:info@yanmarrus.ru">opt@ruteh.ru</a><br>
		</p>
		 &nbsp; &nbsp; &nbsp;&nbsp;Чтобы открыть калькулятор необходимой компании кликнете на заголовок.<br>
 <br>
		<table cellpadding="30" cellspacing="30" align="center" style="width: 900px; height: 300px;">
		<tbody>
		<tr>
			<td>
 <a target="_blank" href="https://www.dellin.ru/requests/"><img width="205" alt="dline.png" src="/upload/medialibrary/d4a/dline.png" height="100" title="dline.png"></a><br>
				 Срок доставки: 3-15 дней <br>
				 Стоимость: от 360 руб<br>
			</td>
			<td>
 <img width="240" alt="Baikal_logo1.jpg" src="/upload/medialibrary/dbe/Baikal_logo1.jpg" height="60" title="Baikal_logo1.jpg"><br>
				 Срок доставки: 3-15 дней<br>
				 Стоимость: от 360 рублей<br>
			</td>
			<td>
 <a target="_blank" href="http://calc-cdek.ru/"><img width="205" alt="sdek.jpg" src="/upload/medialibrary/b23/sdek.jpg" height="137" title="sdek.jpg"></a><br>
				 Срок доставки:3-15 дней<br>
				 Стоимость: от 360 руб<br>
			</td>
		</tr>
		<tr>
			<td>
 <a target="_blank" href="https://new.pecom.ru/services-are/shipping-request/?iframe=Y&h=2.5"><img width="205" alt="3-421x136.png" src="/upload/medialibrary/fcf/3_421x136.png" height="66" title="3-421x136.png"></a><br>
				 Срок доставки:3-15 дней<br>
				 Стоимость: от 360 руб<br>
			</td>
			<td>
 <a target="_blank" href="https://www.jde.ru/online/calculator.html"><img width="205" alt="zheldorjekspedicija-1.jpg" src="/upload/medialibrary/41f/zheldorjekspedicija_1.jpg" height="94" title="zheldorjekspedicija-1.jpg"></a><br>
				 Срок доставки: 3-15 дней<br>
				 Стоимость: от 360 рублей<br>
			</td>
			<td>
 <a target="_blank" href="https://c.sbl.su/company/136/calculator"><img width="205" alt="jenergija.png" src="/upload/medialibrary/797/jenergija.png" height="71" title="jenergija.png"></a><br>
				 Срок доставки: 3-15 дней<br>
				 Стоимость: от 360 рублей
			</td>
		</tr>
		</tbody>
		</table>
		<p>
			<br>
		</p>
	</div>
	<div class="global-information-block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "information_block",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>