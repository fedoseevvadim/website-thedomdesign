
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


</div>


<div class="carousel slide" data-ride="carousel" id="carousel-t">
    <div class="carousel-inner" role="listbox">

        <?
        $i = 0;

        foreach ( $arResult["ITEMS"] as $arItem ) {

            $active = "";

            if ( $i === 0 ) {
                $active = "active";
            }

            $style = " d-flex flex-row-reverse";

            ?>
            <div class="carousel-item <?=$active?>">
                <div class="row">

                    <?
                    if ( $i % 2 ) {
                       ?>
                        <div class="col-md-8 w-75 text-right">
                            <p><h4><?=$arItem['PROPERTIES']['FIO']['VALUE']?></h4></p>
                            <p><?=$arItem['PROPERTIES']['POSITION']['VALUE']?></p>
                            <p><?=$arItem['PREVIEW_TEXT']?></p>

                        </div>

                        <div class="col-md-4">

                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;" class="img-responsive">

                        </div>

                        <?
                    } else {
                        ?>
                        <div class="col-md-4 <?=$style?>">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;" class="img-responsive">
                        </div>

                        <div class="col-md-6 text-left">
                            <p><h4><?=$arItem['PROPERTIES']['FIO']['VALUE']?></h4></p>
                            <p><?=$arItem['PROPERTIES']['POSITION']['VALUE']?></p>
                            <p><?=$arItem['PREVIEW_TEXT']?></p>
                        </div>


                        <?
                    }
                    ?>



                </div>
            </div>


            <?
            $i++;
        }
        ?>
    </div>
    <div>
        <a class="carousel-control-prev" href="#carousel-t" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"  style="background-image: url(/local/components/sbrus/content/templates/projects/images/previous.svg);"></span>
            <span class="sr-only">Previous</span></a>
        <a class="carousel-control-next" href="#carousel-t" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url(/local/components/sbrus/content/templates/projects/images/next.svg);"></span>
            <span class="sr-only">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-t" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-t" data-slide-to="1"></li>
        <li data-target="#carousel-t" data-slide-to="2"></li>
    </ol>
</div>



