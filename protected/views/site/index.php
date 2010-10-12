<?php $this->pageTitle=Yii::app()->name; ?>

<div class="migas">
		   <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?><!-- breadcrumbs -->
</div>

<h4 class="post-title">Bienvenido/a</h4>
<div class="post post-body">
Has arribado a la web de <strong>la Red de Grupos de Usuarios Ñú con Linux de Inacap</strong>.
Este sitio comprende una recopilación de los últimos artículos en los blogs de los grupos del IGLUG.
Los Blogs están dispuestos por cada sede, seleccionables desde el menú superior de esta página.

<p>Si eres alumno, ex-alumno o docente en la Universidad Tecnológica de Chile INACAP, estás especialmente invitado/a a participar. Infórmate más en la página <?php echo CHtml::link('Acerca de' , '?r=site/page&view=about'); ?> o contactándonos en el webchat.</p>

<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gnu-im-science.png" />

</div>

