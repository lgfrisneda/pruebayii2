<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Paquetes';

?>
<h4><strong>Mis redes sociales</strong></h4>
<h5><strong>Servicios y precios</strong></h5>
<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-11">
            <?php
            echo $form->field($model, 'photo',)->checkbox([
                1 => 'Foto en Instagram',
            ])->label(false); ?>
        </div>
        <div class="col-md-1">
            <i class="glyphicon glyphicon-info-sign"></i>
        </div>
        <div class="col-md-12">
            <p>El servicio consiste en publicar una foto de Instagram con un texte asociado y uno o varios hashtags a elegir por el anunciante.</p>
            <div class="col-md-6">
                <?= $form->field($model, 'value_photo',[
                            'options' => ['class' => 'form-group form-inline'],])
                            ->input('value_photo', ['placeholder' => "$"])->label('Valor por este paquete') ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'discount_photo',[
                        'options' => ['class' => 'form-group form-inline'],])
                        ->textInput([
                            'type' => 'number',
                            'placeholder' => "%"
                        ])->label('Promoción descuento') ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-11">
            <?php
            echo $form->field($model, 'video',)->checkbox([
                1 => 'Video de Instagram',
            ])->label(false); ?>
        </div>
        <div class="col-md-1">
            <i class="glyphicon glyphicon-info-sign"></i>
        </div>
        <div class="col-md-12">
            <p>El servicio consiste en publicar un video de Instagram con un texte asociado y uno o varios hashtags a elegir por la marca.</p>
            <div class="col-md-6">
                <?= $form->field($model, 'value_video',[
                            'options' => ['class' => 'form-group form-inline'],])
                            ->input('value_video', ['placeholder' => "$"])->label('Valor por este paquete') ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'discount_video',[
                        'options' => ['class' => 'form-group form-inline'],])
                        ->textInput([
                            'type' => 'number',
                            'placeholder' => "%"
                        ])->label('Promoción descuento') ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-11">
            <?php
            echo $form->field($model, 'story',)->checkbox([
                1 => 'Instagram Story',
            ])->label(false); ?>
        </div>
        <div class="col-md-1">
            <i class="glyphicon glyphicon-info-sign"></i>
        </div>
        <div class="col-md-12">
            <p>El servicio consiste en publicar un Instagram Story siguiendo el briefing definido por la marca.</p>
            <div class="col-md-6">
                <?= $form->field($model, 'value_story',[
                            'options' => ['class' => 'form-group form-inline'],])
                            ->input('value_story', ['placeholder' => "$"])->label('Valor por este paquete') ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'discount_story',[
                        'options' => ['class' => 'form-group form-inline'],])
                        ->textInput([
                            'type' => 'number',
                            'placeholder' => "%"
                        ])->label('Promoción descuento') ?>
            </div>
        </div>
        <div class="col-md-12 text-right">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>