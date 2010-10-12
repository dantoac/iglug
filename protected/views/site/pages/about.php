<?php

$this->pageTitle=Yii::app()->name . ' - Acerca';
$this->breadcrumbs=array(
	'Acerca de',
);

$feed = new simplepie();
$feed->set_feed_url('http://www.gnewbook.org/pg/pages/view/16295/?view=rss');
$feed->handle_content_type();
//$feed->cache_duration = 604800;
//$feed->cache=false;
$feed -> init();

/*
foreach ($feed->get_items() as $item):
	echo $item->get_description();
endforeach;
*/

$item = $feed->get_item();
/*
echo $item->get_description();
*/
?>

<div class="page post-body"><?php echo $item->get_content(); ?></div>
<div class="post-date text-der">Actualizado el <?php echo $item->get_date(); ?></div>
