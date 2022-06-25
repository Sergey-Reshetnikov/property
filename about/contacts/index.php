<?
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

  $APPLICATION->SetTitle("Контакты");

  $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
    Array(
      "AREA_FILE_SHOW" => "file",
      "AREA_FILE_SUFFIX" => "inc",
      "EDIT_TEMPLATE" => "standard.php",
      "PATH" => "/include/about_contacts.php"
    )
  );

  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>