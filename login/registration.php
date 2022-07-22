<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>


<?$APPLICATION->IncludeComponent("bitrix:main.register", "register", Array(
	"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"REQUIRED_FIELDS" => "",	// Поля, обязательные для заполнения
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_FIELDS" => Array("NAME", "LAST_NAME"),	// Поля, которые показывать в форме
		"SUCCESS_PAGE" => "",	// Страница окончания регистрации
		"USER_PROPERTY" => array(	// Показывать доп. свойства
			0 => "UF_STATUS",
		),
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>