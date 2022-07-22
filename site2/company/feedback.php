<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	".default", 
	array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "mr.sergey.reshetnikov@gmail.com",
		"REQUIRED_FIELDS" => array(
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "32",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>