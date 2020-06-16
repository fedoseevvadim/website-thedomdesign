<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">

    <div class="row" style="padding-bottom: 2rem;">
        <div class="col-md-12 text-center">
            <h1>
                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/composition/include/title.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
                </h1>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <?
            $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/composition/include/step1.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>

        <div class="col-md-6">
            <?
            $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/composition/include/step2.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>

    </div>

    <div class="row">

        <?
        foreach ( $arResult["ITEMS"] as $arItem ) {
            ?>
            <div class="col-md-4 text-left">

                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;">
                <p><?=$arItem['PREVIEW_TEXT']?></p>

            </div>
            <?
        }
        ?>

    </div>

</div>