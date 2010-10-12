<?php
$this->pageTitle=Yii::app()->name . ' - Sitio en Mantención';
$this->breadcrumbs=array(
	'Mantención',
);
?>
<div class="error">
	<h2 class="error-title">En Mantención </h2>

	<div class="error-body">
	<?php echo CHtml::encode($mensaje); ?>
	</div>
</div>
