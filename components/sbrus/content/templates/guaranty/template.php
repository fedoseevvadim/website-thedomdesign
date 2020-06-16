<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container" style="padding-top: 2rem;">

    <div class="row" style="padding-bottom: 2rem;">
        <div class="col-md-12 text-center">
            <h1>
                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/guaranty/include/title.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
                </h1>
        </div>
    </div>


    <div class="row">

        <?
        foreach ( $arResult["ITEMS"] as $arItem ) {
            ?>
            <div class="col-md-3 text-center">

                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;">
                <p><?=$arItem['PREVIEW_TEXT']?></p>

            </div>
            <?
        }
        ?>

    </div>

</div>