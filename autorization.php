<?php
include('header.php');
?>
<head>
    <style>
      @media screen and (max-width: 530px){
          footer {
              display: none;
          }
      }
    </style>
</head>
<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <div class="login-title">
                <p>Вхід у особистий кабінет</p>
            </div>
            <form class="autorization-form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Логін (Електронна пошта з якої було
                        здійснено реєстрацію)</label>
                    <input type="email" class="form-control use-form" id="exampleInputEmail1"  placeholder="Введіть email " >
                </div>
                <div class="form-group ">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control use-form" id="exampleInputPassword1" placeholder="Введіть пароль">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Запам’ятати мене</label>
                </div>
                <button type="submit" class="btn btn-primary my_btn offer-btn"><a href="room.php">Увійти</a></button>
                <a href="#" class="col-lg-4 d-flex  forgot-pasword">Забули пароль?</a>
            </form>
        </div>
    </div>
</div>
<?php
include ('footer.php')
?>