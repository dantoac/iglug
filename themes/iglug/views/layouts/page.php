<?php  $this->beginContent('/layouts/main');  ?>

<div class="content">
<div class="migas">
		   <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?><!-- breadcrumbs -->
</div>
    <div id="page">
	<!-- EMPIEZAN LOS ARTÍCULOS -->
	<div class="bloque">
		   <?php echo $content; ?></div><!-- FIN POST -->
     </div>
		   </div><!-- termina CONTENIDO -->
     </div>
<?php $this->endContent(); ?>
