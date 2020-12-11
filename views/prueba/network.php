<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\icons\Icon;

$this->title = 'Mis Recursos';

?>
<h4><strong>Mis redes sociales</strong></h4>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->label('Nombre') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'email')->label('Email') ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'facebook')->input('facebook', ['placeholder' => "https://"])->label('URL de facebook') ?>
        </div>
        <div class="col-md-12">
        <?= $form->field($model, 'description')->textarea(['rows' => '6'])->label('Descripción de la web') ?>
        </div>
        <div class="col-md-6">
            <?php
                echo $form->field($model, 'country')->dropDownList([ 
                    'ARG' => 'Argentina', 
                    'BOL' => 'Boivia',
                    'BRA' => 'Brasil', 
                    'CHI' => 'Chile',
                    'COL' => 'Colombia',
                    'ECU' => 'Ecuador',
                    'PAR' => 'Paraguay',
                    'PER' => 'Peru',
                    'URU' => 'Uruguay',
                    'VEN' => 'Venezuela'
                ], ['prompt' => 'Seleccione Uno' ])->label('País mayoría de la audiencia');
            ?>
        </div>
        <div class="col-md-6">
            <?php
                echo $form->field($model, 'language')->dropDownList([
                    'ESP' => 'Español', 
                    'ING' => 'Ingles',
                    'FRA' => 'Frances'
                ], ['prompt' => 'Seleccione Uno' ])->label('Idioma');
            ?>
        </div>
        <div class="col-md-12">
            <?php
            echo $form->field($model, 'advertising')->radioList([
                1 => 'Siempre indicaré en mis publicaciones patrocinadas que ese texto es publicidad', 
                0 => 'Dependerá de cada caso, de la marca y del producto del que hable'
            ])->label('Aviso de publicidad');
            ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'image')->fileInput()->label(false) ?>
        </div>
        <div class="col-md-12">
            <?php 
            echo $form->field($category, 'category_id[]')->checkboxList([
                1 => 'Animales', 
                2 => 'Diarios', 
                3 => 'Deportes',
                4 => 'Fotografia y diseño', 
                5 => 'Belleza', 
                ])->label('Categorías a la que pertenece tu red social (máximo 3)'); ?>
        </div>
        <div class="col-md-12">
            <strong>Modo vaciones</strong>
            <p>Configure el modo vaciones si quiere desactivar este recurso durante una temporada</p>
        </div>
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'vacation_from')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'es',
                'dateFormat' => 'yyyy-MM-dd',
            ])->label('Fecha de inicio de vacaciones');
            ?>
        </div>
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'vacation_to')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'es',
                'dateFormat' => 'yyyy-MM-dd',
            ])->label('Fecha de fin de vacaciones');
            ?>
        </div>
        <div class="col-md-12 text-right">
            <?= Html::submitButton('Siguiente', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    
<?php ActiveForm::end(); ?>

<script type="text/javascript">
    function checkboxlimit(checkgroup, limit){
        var checkgroup=checkgroup;
        var limit=limit;

        for (var i=0; i<checkgroup.length; i++){

            checkgroup[i].onclick=function(){
                var checkedcount=0;
                for (var i=0; i<checkgroup.length; i++){
                    checkedcount+=(checkgroup[i].checked)? 1 : 0;
                }
                if (checkedcount>limit){
                    this.checked=false;
                }
            }
        }
    }
    checkboxlimit(document.forms.w0["CategoryNetwork[category_id][]"], 3);
</script>