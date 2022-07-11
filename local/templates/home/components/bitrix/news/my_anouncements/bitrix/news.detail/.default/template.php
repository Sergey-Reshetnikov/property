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
?>
<?
?>
<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=GetMessage("DETAILS")?></span>
        <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?> <?=GetMessage("CURRENCY")?></strong></p>
      </div>
    </div>
  </div>
</div>
<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-8" style="margin-top: -150px;">
        <div class="mb-5">
          <div class="slide-one-item home-slider owl-carousel">
            <?if($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]):?>
              <div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
            <?elseif(count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]) > 0): ?>
              <?for ($i = 0; $i < count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]); $i++): ?>
                <div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"][$i]["SRC"]?>" alt="Image" class="img-fluid"></div>
              <?endfor?>
            <?endif?>
          </div>
        </div>
        <div class="bg-white">
          <div class="row mb-5">
            <div class="col-md-6">
              <strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?> <?=GetMessage("CURRENCY")?></strong>
            </div>
            <div class="col-md-6">
              <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                <li>
                  <span class="property-specs"><?=GetMessage("UPDATE_DATE")?></span>
                  <span class="property-specs-number"><?=ConvertDateTime($arResult["TIMESTAMP_X"], "DD.MM.YYYY")?></span>
                </li>
                <li>
                  <span class="property-specs"><?=GetMessage("FLOORS")?></span>
                  <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_FLOORS"]["VALUE"]?></span>
                </li>
                <li>
                  <span class="property-specs"><?=GetMessage("AREA")?></span>
                  <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]?> m<sup>2</sup></span>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage("BATHROOMS")?></span>
              <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_BATHROOMS"]["VALUE"]?></strong>
            </div>
            <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage("GARAGE")?></span>
              <strong class="d-block"><?if ($arItem["DISPLAY_PROPERTIES"]["GARAGE_AVAILABILITY"]["VALUE"]):?>Да<?else:?>Нет<?endif?></strong>
            </div>
          </div>
          <h2 class="h4 text-black"><?=GetMessage("INFO")?></h2>
          <p><?=$arResult["DETAIL_TEXT"]?></p>
          <div class="row mt-5">
            <div class="col-12">
              <h2 class="h4 text-black mb-3"><?=GetMessage("GALLERY")?></h2>
            </div>
            <?if($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]):?>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
              </div>
            <?elseif(is_array($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["1"])): ?>
              <?for ($i = 0; $i < count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]); $i++): ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"][$i]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"][$i]["SRC"]?>" alt="Image" class="img-fluid"></a>
                </div>
              <?endfor?>
            <?endif?>
          </div>
          <div class="mt-5">
            <h2 class="h4 text-black mb-3"><?=GetMessage("MATERIALS")?></h2>
              <?if($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]["SRC"]):?>
                <div>
                  <a href="<?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]["SRC"]?>">Дополнительные материалы</a>
                </div>
              <?elseif(count($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]) > 0): ?>
                <?for ($i = 0; $i < count($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]); $i++): ?>
                  <div>
                    <a href="<?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"][$i]["SRC"]?>">Дополнительные материалы</a>
                  </div>
                <?endfor?>
              <?endif?>
            </div>
            <div class="mt-5">
              <h2 class="h4 text-black mb-3"><?=GetMessage("LINKS")?></h2>
              <?for($i = 0; $i < count($arResult["DISPLAY_PROPERTIES"]["EXTERNAL_RESOURCES_LINKS"]["VALUE"]); $i++): ?>
                <p>
                  <a href="<?=$arResult["DISPLAY_PROPERTIES"]["EXTERNAL_RESOURCES_LINKS"]["VALUE"][$i]?>">Дополнительная ссылка</a>
                </p>
              <?endfor?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 pl-md-5">
          <div class="bg-white widget border rounded">
            <h3 class="h4 text-black widget-title mb-3"><?=GetMessage("CONTACT")?></h3>
            <form action="" class="form-contact-agent">
              <div class="form-group">
                <label for="name"><?=GetMessage("NAME")?></label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email"><?=GetMessage("EMAIL")?></label>
                <input type="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone"><?=GetMessage("PHONE")?></label>
                <input type="text" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" id="phone" class="btn btn-primary" value="<?=GetMessage("SUBMIT")?>">
              </div>
            </form>
          </div>
          <div class="bg-white widget border rounded">
            <h3 class="h4 text-black widget-title mb-3"><?=GetMessage("PARAGRAPH_TITLE")?></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>