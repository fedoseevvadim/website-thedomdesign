
<div class="container">

    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="padding-bottom: 2rem;">
                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/testimonials/include/title.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </h1>
        </div>
    </div>
    <?
    $i = 0;
    foreach ( $arResult["ITEMS"] as $arItem ) {

        if ( $i % 2 ) {
            ?>
            <div class="row">
                <div class="col-md-4 text-right">

                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;">

                </div>

                <div class="col-md-6">
                    <p><h4><?=$arItem['PROPERTIES']['FIO']['VALUE']?></h4></p>
                    <p><?=$arItem['PROPERTIES']['POSITION']['VALUE']?></p>
                    <p><?=$arItem['PREVIEW_TEXT']?></p>

                </div>
            </div>
            <?
        } else {
            ?>
            <div class="row">

                <div class="col-md-6 text-right">
                    <p><h4><?=$arItem['PROPERTIES']['FIO']['VALUE']?></h4></p>
                    <p><?=$arItem['PROPERTIES']['POSITION']['VALUE']?></p>
                    <p><?=$arItem['PREVIEW_TEXT']?></p>

                </div>

                <div class="col-md-4">

                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;">

                </div>


            </div>
            <?
        }


        $i++;
    }
    ?>

</div>