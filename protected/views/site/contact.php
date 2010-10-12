<?php
$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contáctanos',
);
?>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="success" style="background:#acf;
text-align:center;
font:italic 1.5em sans-serif;
">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Si tienes preguntas o sugerencias, háznolas saber mediante el siguiente formulario:
</p>

<div class="form">

<?php echo CHtml::beginForm(); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'name'); ?>
		<?php echo CHtml::activeTextField($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'email'); ?>
		<?php echo CHtml::activeTextField($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'subject'); ?>
		<?php echo CHtml::activeTextField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'body'); ?>
		<?php echo CHtml::activeTextArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<?php if(extension_loaded('gd')): ?>
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo CHtml::activeTextField($model,'verifyCode'); ?>
		</div>
		<div class="hint">
		Por favor, ingresa los caracteres tal como son mostrados en la imagen de arriba.
		<br/>Los caracteres sin insensibles a mayúsculas.</div>
	</div>
	<?php endif; ?>

	<div class="row submit">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php echo CHtml::endForm(); ?>

</div><!-- form -->

<?php endif; ?>
