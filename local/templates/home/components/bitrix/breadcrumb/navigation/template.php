<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;


//delayed function must return a string
if(empty($arResult))
	return "";
  $itemSize = count($arResult);

  $result = '<div 
    class="site-blocks-cover inner-page-cover overlay" 
    style="background-image: url(' . SITE_TEMPLATE_PATH .'/images/hero_bg_2.jpg);" 
    data-aos="fade" 
    data-stellar-background-ratio="0.5" 
    id="bx_breadcrumb_'.$index.'" 
    itemprop="itemListElement" 
    itemscope itemtype="http://schema.org/ListItem"> '.$arrow.'
    <div class="container">
    <div class="row align-items-center justify-content-center text-center">
    <div class="col-md-10">
      <h1 class="mb-2">' . $APPLICATION->GetTitle() . '</h1>
    <div>
    <a href="'.SITE_DIR.'">Главная страница</a>
  ';

  $last_item = '';

  for($index = 1; $index < $itemSize; $index++) {
    if ($arResult[$index]["LINK"] === $arResult[$index - 1]["LINK"]) {
      $last_item .= '<span class="mx-2 text-white">•</span> <strong class="text-white">' . $APPLICATION->GetTitle() . '</strong>';
      continue;
    }

	  $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($arResult[$index]["LINK"] !== "" && $arResult[$index]["LINK"] !== $APPLICATION->GetCurPage()) {
      $result .= '
        <span class="mx-2 text-white">•</span> 
        <a href="'.$arResult[$index]["LINK"].'" 
          <strong class="text-white">' . $title . '</strong>
        </a>
      ';
    } elseif ($arResult[$index] == $arResult[(count($arResult) - 1)]) {
      $result .= '
        <span class="mx-2 text-white">•</span> <strong class="text-white">' . $title . '</strong>
      ';
    }
  }

  $result .= $last_item . '</div></div></div></div></div>';
  return $result;

?>


