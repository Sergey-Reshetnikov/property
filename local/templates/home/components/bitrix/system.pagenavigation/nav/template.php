<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="row">
  <div class="col-md-12 text-center">
    <div class="site-pagination">
	    <?for($i = 1; $i <= 5; $i++):
        if ($i > $arResult["NavPageCount"]) {
          break;
        }
		    if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			    <a class="active" href="<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
		    <?else:?>
			    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
		    <?endif?>
		    <?$arResult["nStartPage"]++?>
	    <?endfor?>
      <?if($arResult["nEndPage"] != $arResult["NavPageCount"]):?>
        <?if ($arResult["NavPageCount"] == $arResult["NavPageNomer"]):?>
          <span>...</span>
		      <a class="active" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a>
        <?else:?>
          <span>...</span>
          <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a>
        <?endif?>
      <?endif;?>
    </div>
  </div>
</div> 

