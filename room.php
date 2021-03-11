<?php
//include ('header.php')
?>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

<header class="room-head">
    <div class="container">
        <div class="row">
            <div class="col-1">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="main logo" class="logo ">
                </a>
            </div>
            <div class="col-9">
                <div class="info">
                    <p>10,5 грн<br>ціна на січень 2021 за 1 м3</p>
                </div>
            </div>
            <div class="col-2">
                <a href="autorization.php" class="btn btn-primary my_btn btn_room hidde" role="button">Мій кабінет</a>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container">
        <p class="banner-item">Передача показників води повинна здійснюватися з 1 по 3 число кожного місяця</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">

            <!-- Tabs navs -->
            <!-- Табы с aria-атрибутами в Bootstrap 4 -->
            <ul class="nav nav-tabs" id="product" role="tablist">
                <li class="nav-item">
                    <a class="nav-link color-tabs active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true"><i class="fas fa-info-circle"></i>Мої дані</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-tabs" id="characteristics-tab" data-toggle="tab" href="#characteristics" role="tab" aria-controls="characteristics" aria-selected="false"><i class="fas fa-tachometer-alt"></i>Показники</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-tabs" id="opinion-tab" data-toggle="tab" href="#opinion" role="tab" aria-controls="opinion" aria-selected="false"><i class="fas fa-tasks"></i>Нарахування</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-tabs" id="pay-tab" data-toggle="tab" href="#pay" role="tab" aria-controls="pay" aria-selected="false"><i class="fas fa-money-bill-wave-alt"></i>Оплата</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<section class="room-date">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tab-content" id="product-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="information">
                                    <div class="information-user d-flex">
                                        <div class="user-icon">
                                            <i class="fas fa-user-circle"></i>
                                        </div>
                                        <div class="user-name">
                                            Чаплінський Роман
                                        </div>
                                    </div>
                                    <div class="information-meters"></div>
                                    <div class="information-pays"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="user-data">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur commodi delectus minus omnis reiciendis rerum? Est fugiat nihil odit sequi. Dignissimos expedita fuga ipsum libero, quo ullam! Consectetur exercitationem illum ipsam, maxime nam nemo nisi recusandae veniam! A dicta facilis fuga fugiat illum mollitia nam natus nulla quo quod?
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="characteristics" role="tabpanel" aria-labelledby="characteristics-tab">2 панель</div>
                    <div class="tab-pane fade" id="opinion" role="tabpanel" aria-labelledby="opinion-tab">3 панель</div>
                    <div class="tab-pane fade" id="pay" role="tabpanel" aria-labelledby="pay-tab">4 панель</div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include ('footer.php')
?>