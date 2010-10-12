<?php
	$this->pageTitle=Yii::app()->name;
	$feed -> init();
	$feed->handle_content_type();

	if(isset($grupo_info)){
?>
<div class="grupo-info"><?php echo $grupo_info; ?></div>
<?php
}
foreach($feed->get_items() as $item):	?>
<div class="post">
			  <h2 class="post-title"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
	  <span class="post-date text-der"><?php echo $item->get_date(); ?></span>
			  <div class="post-body"><?php echo $item->get_content(); ?></div>
			  <div class="post-comments"><a href="<?php echo $item->get_permalink(); ?>">Lee el artículo completo...</a></div>
</div>
<?php endforeach; #TERMINAN LOS ARTÍCULOS ?>


<!--
<a href="javascript:q=(document.location.href);t=(document.title);void(open('http://www.fsdaily.com/submit?url='+escape(q)+'&title='+escape(t),'','resizable,location,menubar,toolbar,scrollbars,status'));" title="Publicar en FSDaily" alt="Publicar en FSDaily">
Publicar en FSDaily</a>
-->
