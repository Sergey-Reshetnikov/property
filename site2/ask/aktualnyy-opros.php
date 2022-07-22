<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Актуальный опрос");?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.current", 
	".default", 
	array(
		"CHANNEL_SID" => "-",
		"VOTE_ID" => "1",
		"VOTE_ALL_RESULTS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?> 
<div class="article-text-block"> </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>