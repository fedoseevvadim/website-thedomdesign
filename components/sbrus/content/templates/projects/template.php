
<div class="container" style="padding-top: 4rem;">

    <div class="row">

        <div class="col-md-12 text-center">
            <h1>
                <?
                $APPLICATION->IncludeFile("/local/templates/main/include/project.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </h1>

        </div>


    </div>

</div>

<div class="container">

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-color: #dedede;">
                <div class="carousel-inner" role="listbox">

                    <?
                    $i = 0;

                    foreach ( $arResult["ITEMS"] as $arItem ) {

                        $active = "";

                        if ( $i === 0 ) {
                            $active = "active";
                        }
                        ?>
                        <div class="carousel-item <?=$active?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="Slide Image" width="80%" height="80%"/></div>
                        <?
                        $i++;
                    }
                    ?>
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"  style="background-image: url(/local/components/sbrus/content/templates/projects/images/previous.svg);"></span>
                        <span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url(/local/components/sbrus/content/templates/projects/images/next.svg);"></span>
                        <span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>

</div>


