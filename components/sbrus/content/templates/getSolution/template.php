<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <div class="row"
         style="background-image: url('/local/components/sbrus/content/templates/getSolution/images/shutterstock_1211996071 1.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center center;
         height: 500px;
        ">

        <div class="col-md-4 align-self-center align-self-center">

        </div>

        <div class="col-md-4 align-self-center align-self-center text-white">

            <h1 style="padding-bottom: 2rem;">
                <?
                $APPLICATION->IncludeFile("/local/components/sbrus/content/templates/getSolution/include/title.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </h1>


            <form style="padding-top: 1rem; padding-left: 1rem; padding-right: 1rem;">

                <div class="form-group">
                    <input type="text" class="form-control form_input" id="name" placeholder="Введите имя" width="30%">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form_input" id="email" placeholder="email">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form_input" id="phoneNumber" placeholder="Введите номер телефона">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block button" onclick="submitFeedBackForm();">Заказать</button>

            </form>

        </div>

        <div class="col-md-4 align-self-center align-self-center">

        </div>
    </div>
