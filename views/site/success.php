<?php

/* @var $this yii\web\View */

$this->title = 'Registration success';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully registered in application.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-sm-2">
                Имя:
            </div>
            <div class="col-sm-10">
                <?= $user->firstname ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Фамилия:
            </div>
            <div class="col-sm-10">
                <?= $user->lastname ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Телефон:
            </div>
            <div class="col-sm-10">
                <?= $user->phone ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Адрес:
            </div>
            <div class="col-sm-10">
                <?= $user->address ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Комментарий:
            </div>
            <div class="col-sm-10">
                <?= $user->comment ?>
            </div>
        </div>


    </div>
</div>
