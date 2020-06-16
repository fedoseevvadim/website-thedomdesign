<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">

    <div class="row" style="padding-bottom: 2rem; padding-top: 4rem;">
        <div class="col-md-12 text-center">
            <h1>
                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/project/include/title.php", Array(), Array(
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
            <div class="col-md-4 text-center">

                <img class="img-responsive" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;">
                <div style="padding-bottom: 1rem;"><?=$arItem['NAME']?></div>

            </div>
            <?
        }
        ?>

    </div>

</div>