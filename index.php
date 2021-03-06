в<?php
include ('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row offer-title">
                <div class="col-8">
                    <div class="offer">
                        <h1 class="display-4 offer-head">Здіснюй подачу показників води легко та швидко, без жодних зусиль</h1>
                        <p class="lead offer-desk">Система автоматизованої подачі показників, зекономить Ваш час та дозволить легко та швидко здійснювати оплату за надані послуги</p>
                        <a class="btn btn-primary btn-lg my_btn offer-btn" href="autorization.php" role="button">Спробувати зараз</a>
                    </div>
                </div>
                <div class="col-4 offer-img offer">
                    <img src="img/main-image.png" alt="main-image" class="desktop-img">
                    <img src="img/tablet.png" alt="tablet-img" class="tablet-img">
                </div>
            </div>
        </div>
    </div>
</div>
<section class="permision" xmlns="http://www.w3.org/1999/html" id="permision">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="permision-head">Переваги нашої системи</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col ">
                <div class="card h-100">
                    <img src="img/image 5.png" class="card-img-top permision-img rounded mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title permision-title">Зручна оплата </h5>
                        <p class="card-text permision-text">Сплачуйте за послуги в будь-який час доби</p>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card h-100">
                    <img src="img/image 6.png" class="card-img-top permision-img rounded mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title permision-title">Історія платежів</h5>
                        <p class="card-text permision-text">Перегляд історії показників лічильників та перегляд звітів</p>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card h-100 ">
                    <img src="img/image 4.png" class="card-img-top permision-img rounded mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title permision-title">Повний крнтроль</h5>
                        <p class="card-text permision-text">Контроль нарахувань та оплати по особовому рахунку</p>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card h-100">
                    <img src="img/image 3.png" class="card-img-top permision-img rounded mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title permision-title">Особистий кабінет</h5>
                        <p class="card-text permision-text">Перегляд та опалата рахунків за декількома адресама</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="registration">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="register-head">Проста та швидка реєстрація</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-deck">
                    <div class="card">
                        <img src="img/image 7.png" class="card-img-top register-img rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                            <h5 class="card-title register-title">Крок 1: <span>Зареєструйтеся</span></h5>
                            <p class="card-text register-text">Введіть свою електронну адресу та пароль</p>

                        </div>
                    </div>
                    <div class="card">
                        <img src="img/image 8.png" class="card-img-top register-img rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                            <h5 class="card-title register-title">Крок 2:<span> Підтвердіть свій email</span></h5>
                            <p class="card-text register-text">Підтвердіть свої дані у поштовій скринці та перейдіть у свій особистий кабінет</p>

                        </div>
                    </div>
                    <div class="card">
                        <img src="img/image 9.png" class="card-img-top register-img rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                            <h5 class="card-title register-title">Крок 3:<span> Додайте особовий рахунок</span></h5>
                            <p class="card-text register-text">Введіть свій особовий рахунок, який знаходиться на квитанції</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col ">
                <form class="form-inline form justify-content-center ">
                    <div class="form-group  ">
                        <input type="email" class="form-control use-form " id="inputPassword2" placeholder="Введіть email ">
                    </div>
<!--                    <button type="submit" class="btn btn-primary my_btn form-btn ">Зареєструватися</button>-->
                    <a href="registr.php" class=" btn btn-primary my_btn form-btn">Зареєструватися</a>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    include ('footer.php');
?>
