<?  
  IncludeTemplateLangFile(__FILE__);
?>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="mb-5">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/footer_about.php"
              )
          );?>
        </div>
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_vert", 
          Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
              "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
              "DELAY" => "N",	// Откладывать выполнение шаблона меню
              "MAX_LEVEL" => "1",	// Уровень вложенности меню
              "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
              ),
              "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
              "MENU_CACHE_TYPE" => "A",	// Тип кеширования
              "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
              "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
              "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
          ),
	        false
        );?>
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_social.php"
            )
        );?>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_copyright.php"
	          )
          );?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?
  use Bitrix\Main\Page\Asset;
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
?>