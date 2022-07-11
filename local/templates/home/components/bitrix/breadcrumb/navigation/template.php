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

  $result = '
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
        if ($arResult[$index]["LINK"] === "") {
          $prevTitle = htmlspecialcharsex($arResult[$index - 1]["TITLE"]);
          $result .= '
          <span class="mx-2 text-white">•</span> <strong class="text-white">' . $prevTitle . '</strong>
        ';
        } else {
          $result .= '
            <span class="mx-2 text-white">•</span> <strong class="text-white">' . $title . '</strong>
        ';
        }
    }
  }
  $result .= $last_item . '</div></div>';
  return $result;
?>


