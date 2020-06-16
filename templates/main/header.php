<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cuprum|Lora:400,400i&amp;subset=cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/tilteffect.css" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/global.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/interactive.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/styles.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/template_styles.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/adaptive.css">
<link rel="stylesheet" type="text/css" href="/bitrix/templates/main/assets/slick.css">
<link rel="stylesheet" type="text/css" href="/bitrix/templates/main/assets/slick-theme.css">
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/html5.js"></script>


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