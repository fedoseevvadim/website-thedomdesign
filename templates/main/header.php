<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cuprum|Lora:400,400i&amp;subset=cyrillic-ext" rel="stylesheet">
<!--<link rel="stylesheet" type="text/css" href="--><?//=SITE_TEMPLATE_PATH?><!--/assets/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/tilteffect.css" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/global.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/interactive.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/styles.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/template_styles.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/adaptive.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/slick.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/slick-theme.css">
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/html5.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168217505-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-168217505-1');
    </script>



</head>
<body <?if($APPLICATION->getCurPage()=='/'){?> class="rL hid" <?}?>>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="wrapper">

<?if($APPLICATION->getCurPage()=='/'){?>
<?}elseif($APPLICATION->getCurPage()=='/contacts/'){?>

<?}else{?>
<a class="up__button scroll" href="#wrapper"></a>
<?}?>