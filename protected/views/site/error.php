<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="error">
	<h2 class="error-title">Error <?php echo $code; ?></h2>

	<div class="error-body">
	<?php echo CHtml::encode($message); ?>
	</div>
</div>
