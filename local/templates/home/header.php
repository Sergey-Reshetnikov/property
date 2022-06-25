<?
  if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
  IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <? 
      $APPLICATION->ShowHead();
      use Bitrix\Main\Page\Asset;
      Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    ?>
<div class="site-loader">
</div>
<div class="site-wrap">
	<div id="panel">
		 <?$APPLICATION->ShowPanel();?>
	</div>
	<div class="site-mobile-menu">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
 <span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body">
		</div>
	</div>
	 <!-- .site-mobile-menu -->
	<div class="border-bottom bg-white top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-md-6">
					<p class="mb-0">
 <a href="#" class="mr-3"> <span class="text-black fl-bigmug-line-phone351"></span>
						<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/header_phone.php"
	)
);?> </a> <a href="#">
						<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/header_email.php"
	)
);?> </a>
					</p>
				</div>
				<div class="col-6 col-md-6 text-right">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/header_social.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
	<div class="site-navbar">
		<div class="container py-1">
			<div class="row align-items-center">
				<div class="col-8 col-md-8 col-lg-4">
					<h1> <a href="<?=SITE_DIR?>" class="h5 text-uppercase text-black"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/header_logo.php"
	)
);?> </a> </h1>
				</div>
				<div class="col-4 col-md-4 col-lg-8">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_multilevel",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
 <?
  $current_link = $APPLICATION->GetCurPage();
  if ($current_link !== "/"): 

  $APPLICATION->IncludeComponent("bitrix:breadcrumb", "navigation", Array(
    "PATH" => "",	
      "SITE_ID" => "s1",	
      "START_FROM" => "0",	
    ),
    false
  );?>

<?endif?>