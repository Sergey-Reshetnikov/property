<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$mid = ceil(count($arResult) / 2);
$firstArr = array_slice($arResult, 0, $mid);
$secondArr = array_slice($arResult, $mid);

function loopThroughArr($arr) { ?>
  <?if (!empty($arr)):?>
    <ul class="list-unstyled">
      <?foreach($arr as $arItem):
	      if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		    continue;?>
	      <?if($arItem["SELECTED"]):?>
		      <li class="selected"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	      <?else:?>
		      <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	      <?endif?>
      <?endforeach?>
    </ul>
  <?endif?>
<?}?>

<div class="row mb-5">
  <div class="col-md-12">
    <h3 class="footer-heading mb-4">Navigations</h3>
  </div>
  <div class="col-md-6 col-lg-6">
    <? loopThroughArr($firstArr); ?>
  </div>
  <div class="col-md-6 col-lg-6">
    <? loopThroughArr($secondArr); ?>
  </div>
</div>