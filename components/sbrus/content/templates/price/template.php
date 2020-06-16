<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container" style="padding-top: 3rem; padding-bottom: 4rem;">

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>
                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/price/include/title.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
                </h1>
        </div>
    </div>

    <div class="row" style="padding-top: 1rem; padding-bottom: 2rem;">
        <div class="col-md-12 text-center font-weight-light">
            <?
            $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/price/include/sub_title.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            ));
            ?>
        </div>
    </div>

    <?
    $defaultVal = 100;
    $totalVal = number_format($arResult["ITEMS"][0]['PROPERTIES']['PRICE']['VALUE'] * $defaultVal, 0, "", " ");

    ?>

    <div class="row" style="padding-top: 2rem;">

        <div class="col-md-3">
            <p class="colored_text">ПЛОЩАДЬ ПОМЕЩЕНИЯ</p>
            <input type="square" class="form-control" id="square" placeholder="Укажите площадь" value="<?=$defaultVal?>" onkeyup="recalculate()">
            <p class="colored_text" style="padding-top: 1rem;">СТОИМОСТЬ ДИЗАЙН-ПРОЕКТА</p>
            <div>
                от <div id="totalPrice" class="totalPrice" style="font-size: 18px;"><?=$totalVal?></div>рублей за 1М2
            </div>
        </div>

        <div class="col-md-9">
            <p class="colored_text">ВЫБЕРИТЕ ПАКЕТ</p>

            <div class="row">

                <?

                $i = 0;

                foreach ( $arResult["ITEMS"] as $arItem ) {

                    $color = $text = "";
                    $arrPrice[$arItem['ID']] = $arItem['PROPERTIES']['PRICE']['VALUE'];
                    $arrColor[$arItem['ID']] = $arItem['PROPERTIES']['COLOR']['VALUE'];


                    //var_dump($arItem['PROPERTIES']['STEP1']['VALUE']['TEXT']);

                    if ( $i === 0 ) {
                        $color = "color: #ffffff; background-color: " . $arItem['PROPERTIES']['COLOR']['VALUE'];
                        $selectedTariff = $arItem['ID'];

                    }

                    ?>
                    <div class="col-4 col-md-3 text-center" onclick="selectTariff(<?=$arItem['ID']?>)">

                        <div class="tariffHeight" style="padding-top: 1rem; <?=$color?>"  name="price" id="<?=$arItem['ID']?>">
                            <h4 style="padding-bottom: 1rem;"><?=$arItem['NAME']?></h4>
                            <p> от <strong style="font-size: 18px;"><?=$arItem['PROPERTIES']['PRICE']['VALUE']?></strong><br> рублей за М2</p>
                        </div>

                    </div>
                    <?
                    $i++;
                }
                ?>

            </div>

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

            <?
            $i = 0;

            foreach ( $arResult["ITEMS"] as $arItem ) {

                $step1 = htmlspecialcharsBack($arItem['PROPERTIES']['STEP1']['VALUE']['TEXT']);
                $step2 = htmlspecialcharsBack($arItem['PROPERTIES']['STEP2']['VALUE']['TEXT']);
                $arrSteps[$arItem['ID']] = $arItem['ID'];

                $hidden = "hidden";

                if ( $i === 0 ) {
                    $hidden = "";
                }

                $i++;
                ?>

                <div class="row" id="step<?=$arItem['ID']?>" <?=$hidden?> name="step">

                    <div class="col-md-6">

                            <?=$step1?>

                    </div>

                    <div class="col-md-6">

                            <?=$step2?>

                    </div>

                </div>

                <?

            }
            ?>



        </div>
    </div>

</div>

<script>
    let price = <?=json_encode($arrPrice); ?>;
    let selectedTariff = <?=json_encode($arrPrice); ?>;
    let color = <?=json_encode($arrColor); ?>;
    let steps = <?= json_encode($arrSteps)?>
</script>