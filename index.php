<?
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
  $APPLICATION->SetTitle("");

  $arrFilter = array (
    "IBLOCK_ID" => "5",
    "ACTIVE" => "Y",
    "PROPERTY_PRIORITY_DEAL_VALUE" => "Да",     
  );
?>
  
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/announcements/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_PICTURE",""),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "announcements",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("PRIORITY_DEAL","LOCATION","PRICE",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/benefit_1.php"
              )
          );?>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
          <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/benefit_2.php"
            )
          );?>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/benefit_3.php"
            )
          );?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section site-section-sm bg-light">
  <div class="container">
    <?$APPLICATION->IncludeComponent(
      "bitrix:news.line",
      "new_properties",
      Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "300",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array("NAME","PREVIEW_PICTURE","PROPERTY_PRICE","PROPERTY_TOTAL_AREA","PROPERTY_NUMBER_OF_BATHROOMS","PROPERTY_GARAGE_AVAILABILITY","PROPERTY_NUMBER_OF_BEDS","PROPERTY_LOCATION"),
        "IBLOCKS" => array("5"),
        "IBLOCK_TYPE" => "announcements",
        "NEWS_COUNT" => "9",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC"
      )
    );?>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <?$APPLICATION->IncludeComponent(
      "bitrix:news.line",
      "services_temp",
      Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "300",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array(0=>"NAME",1=>"PROPERTY_EXTERNAL_RESOURSE_LINK",),
        "IBLOCKS" => array(0=>"6",),
        "IBLOCK_TYPE" => "services",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC"
      )
    );?>
  </div>
</div>
<div class="site-section bg-light">
  <div class="container">
    <?$APPLICATION->IncludeComponent(
      "bitrix:news.line",
      "blog_news",
      Array(
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "300",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_CREATE",4=>"",),
        "IBLOCKS" => array(0=>"1",),
        "IBLOCK_TYPE" => "news",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC"
      )
    );?>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <?$APPLICATION->IncludeComponent(
      "bitrix:news.line",
      "agents_slide",
      Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "300",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array("NAME","PREVIEW_PICTURE","PROPERTY_JOB_TITLE","PROPERTY_ABOUT","PROPERTY_FACEBOOK_LINK","PROPERTY_TWITTER_LINK","PROPERTY_LINKEDIN_LINK"),
        "IBLOCKS" => array("7"),
        "IBLOCK_TYPE" => "agents",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC"
      )
    );?>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>