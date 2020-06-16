<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">



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