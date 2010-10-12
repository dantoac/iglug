<?php $this->beginContent('/layouts/main'); ?>

<div class="content">

<div id="lateral">
   <div id="sidebar">

   <div class="bloque">

	<h3>Grupos</h3>
	<ul>
		   <li><?php echo CHtml::link('Blog Comunitario',array('..')) ?></li>
		   <li><?php echo CHtml::link('Concepción',array('/blog/concepcion')) ?></li>
		   <li><?php echo CHtml::link('Osorno',array('/blog/osorno')) ?></li>
		   <li><?php echo CHtml::link('Puerto Montt',array('/blog/puertomontt')) ?></li>
		   <li><?php echo CHtml::link('Temuco',array('/blog/temuco')) ?></li>
		   <li><?php echo CHtml::link('Valparaíso',array('/blog/valparaiso')) ?></li>
		   
	</ul>
   </div><!-- menu_grupos -->
<div class="bloque">
<h2>Campañas</h2>
<ul>
<li><a href="http://playogg.org"><img title="I support PlayOgg!" src="http://static.fsf.org/playogg/play_ogg_small.png" alt="PlayOgg"/></a></li>
<li><a href="http://www.defectivebydesign.org/ultraviolet"><img src="http://static.fsf.org/nosvn/uvtiny.png" title="DRM UltraViolet" /></a></li>

</ul>
</div>



    <div class="bloque">
    <h2>Enlaces</h2>
<ul>
	<li><?php echo CHtml::link('GNewBook','http://www.gnewbook.org'); ?></li>
<!--	<li><?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl . '/img/logo-gnewbook-150x54.png" />','http://www.gnewbook.org'); ?></li> 
	<li><?php echo CHtml::link('<img src="http://gnu.org.ve/~podcasts/imagenes/volante_vertical_150x288.png" />','http://www.radiognu.org'); ?></li> -->
</ul>
    </div>


   </div><!-- sidebar -->


<div class="bloque">
<h3>Escucha</h3>
la señal de <a href="http://www.radiognu.org/" alt="Web RadioGNU" title="RadioGNU">RadioGNU</a>

<audio tabindex="0" src="http://radiognu.org:8000/radiognu.ogg"
controls="controls" autobuffer alt="RadioGNU.org" title="RadioGNU.org" 
width="100%" height="auto">
<object type="application/x-java-applet" width="100%" height="auto">
<param name="archive" value="http://theora.org/cortado.jar">
<param name="code" value="com.fluendo.player.Cortado.class">
<param name="url" value="http://radiognu.org:8000/radiognu.ogg">
<param name="audio" value="true" />
<param name="video" value="false" />

<!--<param name="bufferSize" value="200"/>-->
<param name="autoplay" value="false"/>
<param name="showStatus" value="show" />
</object>
</audio>


  </div>

<div class="bloque">
	<script type="text/javascript">
var box_width = "100%";
var box_height = "500px";
var text_size = "8";
var section = "All";
var how_many = 8;
var show_karma = 1;
var logo_style = "light";
var bg_color = "ccddff";
var text_color = "666666";
var link_color = "333333";
var border_color = "cccccc";
var score_bg_color = "ffe995";
var score_text_color = "663300";
var score_border_color = "ffe995";
</script>
<script type="text/javascript" src="http://www.fsdaily.com/files/www.fsdaily.com/drigg_box.js"></script> 
</div>

</div><!-- lateral -->



    <div id="page">

      <div id="header">

	      <div id="logo">

			  <?php /*echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl . '/img/gnuaufwiese.jpg' .'" />','/');*/ ?>

		</div>

      </div>

      <div class="migas">

	  <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>

      </div>


	<!-- EMPIEZAN LOS ARTÍCULOS -->

	<div id="articulos">
	    <div class="bloque">
		      <?php echo $content; ?>
	    </div>
	</div><!-- FIN POST -->
		   <?php echo CHtml::link('::Subir ↑','#articulos') ?>

	</div>
		   </div><!-- termina CONTENIDO -->
</div>

<?php  $this->endContent(); ?>
