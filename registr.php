<?php
include('header.php')
?>
<div class="container">
    <form class="register-form" action="#!">

        <p class="h4 pt-5 pb-4">Реєстрація</p>

        <!-- E-mail -->
        <label for="">E-mail</label>
        <input type="email" id="defaultRegisterFormEmail" class="form-control use-form mb-4" placeholder="E-mail" >


        <div class="form-row mb-4">
            <div class="col-lg-4">
                <!-- First name -->
                <label for="">Введіть прізвище</label>
                <input type="text" id="defaultRegisterFormFirstName" class="form-control use-form" placeholder="Введіть прізвище ">
            </div>
            <div class="col-lg-4">
                <!-- Last name -->
                <label for="">Введіть ім’я</label>
                <input type="text" id="defaultRegisterFormLastName" class="form-control use-form" placeholder="Введіть ім’я">
            </div>
        </div>

        <!-- Password -->
        <div class="form-row mb-4">
            <div class="col-lg-4 ">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control use-form" id="exampleInputPassword1" placeholder="Введіть пароль">
            </div>
            <div class="col-lg-4">
                <label for="exampleInputPassword1">Підтвердження паролю</label>
                <input type="password" class="form-control use-form" id="exampleInputPassword1" placeholder="Підтвердження паролю">
            </div>
        </div>

        <!-- Newsletter -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
            <label class="custom-control-label" for="defaultRegisterFormNewsletter">Я приймаю умови Договору</label>
        </div>

        <!-- Sign up button -->
        <button class="btn btn-info my-4 my_btn offer-btn" type="submit"><a href="room.php">Зареєструватися</a></button>


    </form>

</div>

<?php
include('footer.php')
?>

