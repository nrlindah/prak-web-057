<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?=
    Html::submitButton('Buku baru', ['class' => 'btn btm-promary']
    )
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($buku, 'kode_buku') ?>
<?= $form->field($buku, 'judul') ?>
<?= $form->field($buku, 'jml_item') ?>

<?=
    Html::submitButton('Save', ['class' => 'btn btm-promary']
    )
?>

<?php ActiveForm::end() ?>