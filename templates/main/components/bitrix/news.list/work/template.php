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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="container">

    <div class="row" style="padding-bottom: 2rem;">
        <div class="col-md-12 text-center">
            <h1>Как мы работаем:</h1>
        </div>
    </div>

    <div class="row">

        <?
        foreach ( $arResult["ITEMS"] as $arItem ) {
            ?>
            <div class="col-md-4 text-center">

                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;">
                <h4 style="padding-bottom: 1rem;"><?=$arItem['NAME']?></h4>
                <p><?=$arItem['PREVIEW_TEXT']?></p>

            </div>
            <?
        }
        ?>

    </div>

</div>
