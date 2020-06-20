
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


<style>

    .slick-slide img {
        width: 50% !important;
    }

    .testimonials {
        overflow: hidden;
        position: relative;
    }

    .one-slide,
    .testimonial,
    .message {
        border: none !important;
        outline: none !important;
    }

    .icon-overlay {
        position: absolute;
        opacity: 0.3;
        right: 10%;
        top: 0;
        height: auto;
        width: 100%;
        max-width: 400px;
    }

    .carousel-controls .control {
        padding-top: 20rem;
        position: absolute;
        transform: translateY(-50%);
        width: 45px;
        height: 45px;
        color: #CEB5A1;
        /*border-radius: 50%;*/
        /*border: 2px solid #fff;*/
        z-index: 1;
    }

    .prev {
        left: -2.25rem;
    }

    .next {
        right: -2.25rem;
    }

    @media screen and (max-width: 768px) {
        .testimonials {
            max-height: 700px;
        }
        .icon-overlay {
            height: 300px;
            top: calc(50% - 150px);
        }
        .carousel-controls .control {
            width: 25px;
            height: 25px;
            top: inherit;
        }
        .prev {
            left: 0;
        }
        .next {
            right: 0;
        }
        .control i {
            font-size: .7rem;
        }
        .testimonials .message {
            font-size: 1rem;
        }
        .testimonials h2 {
            font-size: 1.5rem;
        }
    }



</style>

<section class="testimonials py-5 px-1 px-md-5 margin-top-xl">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="carousel-controls testimonial-carousel-controls">
                    <div class="control d-flex align-items-center justify-content-center prev mt-3"><i class="fa fa-chevron-left fa-2x"></i></div>
                    <div class="control d-flex align-items-center justify-content-center next mt-3"><i class="fa fa-chevron-right fa-2x"></i></div>

                    <div class="testimonial-carousel">

                        <?
                        $i = 0;
                        foreach ( $arResult["ITEMS"] as $arItem ) {

                        if ( $i % 2 ) {
                        ?>
                        <div class="row">
                            <div class="col-md-4 d-flex flex-row-reverse">

                                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;" class="img-responsive">

                            </div>

                            <div class="col-md-6">
                                <p><h4><?=$arItem['PROPERTIES']['FIO']['VALUE']?></h4></p>
                                <p><?=$arItem['PROPERTIES']['POSITION']['VALUE']?></p>
                                <p><?=$arItem['PREVIEW_TEXT']?></p>

                            </div>
                        </div>

                    </div>
                    <?
                    } else {
                    ?>
                    <div class="h5 font-weight-normal one-slide mx-auto">
                        <div class="row">

                            <div class="col-md-6 text-right">
                                <p><h4><?=$arItem['PROPERTIES']['FIO']['VALUE']?></h4></p>
                                <p><?=$arItem['PROPERTIES']['POSITION']['VALUE']?></p>
                                <p><?=$arItem['PREVIEW_TEXT']?></p>

                            </div>

                            <div class="col-md-4">

                                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" style="padding-bottom: 1rem;" width="100%" class="img-responsive">

                            </div>


                        </div>
                        <?
                        }

                        $i++;
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<script>


    $(document).ready(function() {

        $(".testimonial-carousel").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            arrows: true,
            prevArrow: $(".testimonial-carousel-controls .prev"),
            nextArrow: $(".testimonial-carousel-controls .next")
        });
    });

</script>
