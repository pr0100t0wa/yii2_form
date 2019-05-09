<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Шаг №'.$step;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to registration:</p>
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-registration']); ?>
                <?php if ($step == 1){ ?>
                    <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'lastname') ?>
                    <?= $form->field($model, 'phone')->textInput(['placeholder' => '0984569799']) ?>
                <?php }elseif ($step == 2){ ?>
                    <?= $form->field($model, 'address')->textInput(['autofocus' => true]) ?>
                <?php }elseif ($step == 3){ ?>
                    <?= $form->field($model, 'comment')->textarea(['autofocus' => true]) ?>
                <?php } ?>
                <div class="form-group">
                    <?php if($prev_step){ ?>
                        <?= Html::submitButton('Шаг '.$prev_step, ['class' => 'btn btn-primary float-left', 'name' => 'registration-button', 'value' => $prev_step]) ?>
                    <?php } ?>
                    <?= Html::submitButton('Шаг '.$next_step, ['class' => 'btn btn-primary float-right', 'name' => 'registration-button', 'value' => $next_step]) ?>
                </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
<?php  $this->registerJsFile(Yii::getAlias('@web').'/js/main.js'); ?>