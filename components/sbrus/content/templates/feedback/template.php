<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">

    <div class="row">

        <div class="col-md-6">
            <img src="/local/components/sbrus/content/templates/feedback/images/feedback.png" class="img-responsive">
        </div>

        <div class="col-md-6 align-self-center">

            <div style="padding-top: 1rem; padding-bottom: 1rem;" class="text-center">

                <h1>
                    <?
                    $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/feedback/include/title.php", Array(), Array(
                        "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                        "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                    ));
                    ?>
                </h1>

                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/feedback/include/sub_title.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </div>

            <?$APPLICATION->IncludeComponent(
                "sbrus:content",
                "feedbackForm",
                Array(
                    "IBLOCK_ID" => "feedBackForm",
                    "IBLOCK_TYPE" => "work",
                    "PROPERTY_CODE" => ["PRICE"],
                )
            );?>

        </div>

    </div>

    <div class="row">

        <div class="col-md-8 align-self-center">
            <hr class="hr_grey">
        </div>

        <div class="col-md-4 align-self-center">

        </div>
    </div>

</div>