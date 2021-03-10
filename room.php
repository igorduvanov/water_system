<?php
include ('header.php')
?>

<div class="container">
    <div class="row">
        <div class="col">
            
            <!-- Tabs navs -->
            <!-- Табы с aria-атрибутами в Bootstrap 4 -->
            <ul class="nav nav-tabs" id="product" role="tablist">
                <li class="nav-item">
                    <a class="nav-link color-tabs active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Мої дані</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-tabs" id="characteristics-tab" data-toggle="tab" href="#characteristics" role="tab" aria-controls="characteristics" aria-selected="false">Показники</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-tabs" id="opinion-tab" data-toggle="tab" href="#opinion" role="tab" aria-controls="opinion" aria-selected="false">Нарахування</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-tabs" id="pay-tab" data-toggle="tab" href="#pay" role="tab" aria-controls="pay" aria-selected="false">Оплата</a>
                </li>
            </ul>
            <div class="tab-content" id="product-content">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">1 панель</div>
                <div class="tab-pane fade" id="characteristics" role="tabpanel" aria-labelledby="characteristics-tab">2 панель</div>
                <div class="tab-pane fade" id="opinion" role="tabpanel" aria-labelledby="opinion-tab">3 панель</div>
                <div class="tab-pane fade" id="pay" role="tabpanel" aria-labelledby="pay-tab">4 панель</div>
            </div>
        </div>
    </div>
</div>

<?php
include ('footer.php')
?>