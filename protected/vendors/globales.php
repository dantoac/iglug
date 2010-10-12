<?php

//echo '<script src="http://code.jquery.com/jquery-latest.js"></script>';

require_once('./php/simplepie.inc');
$feed = new SimplePie();
$feed -> strip_attributes(array('target','border'));
$cache = false;


$nodo = $_GET['nodo'];
$grupo_url = $_GET['grupo'];
//$rutaroot = $_SERVER['DOCUMENT_ROOT'];


function cabecera($grupo_url){

global $feed,$grupo_nombre,$grupo_info,$feedok;

  switch($grupo_url){

		case "idle-tesla":
			//agrega una hoja de estilo en casacada
			echo '<link rel="stylesheet" type="text/css" href="estilo/conce.css" />';
			//establece la dirección del feed

			$feed->set_feed_url(array(
				'http://www.gnewbook.org/pg/groupblog/owned/group:1908?view=rss&offset=0',
				'http://www.gnewbook.org/pg/groupblog/owned/group:1908?view=rss&offset=10',
				));

			//agrega una descripción del grupo
			$grupo_nombre = 'IDLE-TESLA';			
			$grupo_info = '<div class="title"><strong>I</strong>nvestigación y <strong>D</strong>esarrollo <strong>L</strong>ibremente <strong>E</strong>xperimentado con <strong>TE</strong>cnologías de <strong>S</strong>oftware <strong>L</strong>ibre <strong>A</strong>plicadas</div>
			<div class="meta">Grupo de Usuarios de Software Libre en Sede Concepción-Talcahuano</div>';
			break;

		case "inatux":
			echo '<link rel="stylesheet" type="text/css" href="../estilo/pmontt.css" />';
			$feed->set_feed_url('http://www.gnewbook.org/pg/groupblog/owned/group:12624?view=rss');
			$grupo_nombre = 'INATUX';
			$grupo_info = '<div class="title">Grupo de Usuarios GNU/Linux de Inacap sede Puerto Montt</div>
			               <div class="meta"></div>';
			break;

		case "osorno":
			echo '<link rel="stylesheet" type="text/css" href="../estilo/osorno.css" />';
			$feed->set_feed_url('http://www.gnewbook.org/pg/groupblog/owned/group:1309?view=rss');
			$grupo_info = '<div class="title">Grupo de Usuarios GNU/Linux de Inacap sede Osorno</div>
			               <div class="meta"></div>';
			break;

		case "comunitario":
			$feed->set_feed_url('http://www.gnewbook.org/pg/groupblog/owned/group:11003?view=rss');
			//$grupo_nombre = 'Planeta';
			$grupo_info = '<div class="title">Blog Comunitario</div>
			    <div class="meta">Aquí publican todos los/as registrados/as en <a href="http://www.gnewbook.org/pg/groups/11003/iglug/" title="Ir al Blog de IGLUG en Gnewbook">el blog del Iglug</a></div>';
			break;

		default:
  		$feed->set_feed_url(array(
				'http://www.gnewbook.org/pg/groupblog/owned/group:1908?view=rss',
				'http://www.gnewbook.org/pg/groupblog/owned/group:12624?view=rss',
				'http://www.gnewbook.org/pg/groupblog/owned/group:11003?view=rss'
				));
			$grupo_nombre = 'Multiverso';
			$grupo_info = '<div class="title">Red de Grupos de Usuarios Ñú con Linux</div>
		  <div class="meta">Esta página es una recopilación de los últimos artículos en los blogs suscritos al IGLUG.</div>';
		}

	$feedok = $feed -> init();
	$feed->handle_content_type();

	}

function muestra_info($grupo_nombre,$grupo_info)
{
global $feed;

echo $feed -> get_description();
	echo '<div class="grupo"><div class="grupo-nombre">';
		if (isset($grupo_nombre))
		{
		    echo $grupo_nombre;
		    } else { echo $feed->get_title();}
	echo '</div><div class="grupo-info">'.$grupo_info.'</div></div>';
}

function muestra_contenido($nodo,$feed)
{
			//Muesra páginas individuales si son solicitados:
			if (isset($nodo)){
			    switch($nodo){
				case "acerca":
				$feed = "";
				include "nodos/info.html";
				break;
				}
			} else {


			//sino, muestra LOS ARTÍCULOS
			//    foreach ($feed->get_items() as $item):

// Set our paging values
$start = (isset($_GET['comienzo']) && !empty($_GET['comienzo'])) ? $_GET['comienzo'] : 0; // Where do we start?
$length = (isset($_GET['articulos']) && !empty($_GET['articulos'])) ? $_GET['articulos'] : 3; // How many per page?



		// get_items() will accept values from above.
		foreach($feed->get_items($start, $length) as $item):
			$feed = $item->get_feed();
$max = $feed->get_item_quantity(); // Where do we end?
			?>


			  <h4 class="post-title"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>
			  <div class="post-date"><?php echo $item->get_date(); ?></div>
			  <div class="post-body"><?php echo $item->get_content(); ?></div>
			  <div class="post-comments"><a href="<?php echo $feed->get_permalink(); ?>">[Comentarios]</a></div>


			<?php endforeach; #TERMINAN LOS ARTÍCULOS


// Let's do our paging controls
	$next = (int) $start + (int) $length;
	$prev = (int) $start - (int) $length;
 
	// Create the NEXT link
	$nextlink = '<a href="?comienzo=' . $next . '&articulos=' . $length . '">Siguientes &raquo;</a>';
	/*$nextlink = '<a href="javascript:ajaxpage(\"?comienzo=' . $next . '&articulos=' . $length . '\", "contenido");">Siguientes &raquo;</a>';*/
	if ($next > $max)
	{
		$nextlink = 'Siguientes &raquo;';
	}
 
	// Create the PREVIOUS link
	$prevlink = '<a href="?comienzo=' . $prev . '&articulos=' . $length . '">&laquo; Anteriores</a>';
	if ($prev < 0 && (int) $start > 0)
	{
		$prevlink = '<a href="?comienzo=0&articulos=' . $length . '">&laquo; Anteriores</a>';
	}
	else if ($prev < 0)
	{
		$prevlink = '&laquo; Anteriores';
	}
 
	// Normalize the numbering for humans
	$begin = (int) $start + 1;
	$end = ($next > $max) ? $max : $next;


?> <p>Mostrando <?php echo $begin; ?>&ndash;<?php echo $end; ?> de <?php echo $max; ?> | <?php echo $prevlink; ?> | <?php echo $nextlink; ?> | <a href="<?php echo '?comienzo=' . $start . '&articulos=3'; ?>">3</a>, <a href="<?php echo '?comienzo=' . $start . '&articulos=6'; ?>">6</a>, o <a href="<?php echo '?comienzo=' . $start . '&articulos=9'; ?>">9</a> al mismo tiempo.</p>

<?php


			
			}

}

function muestra_lista_articulos($feed)
{
foreach ($feed->get_items() as $item):
			echo '<ul><li><a href="'.$item->get_permalink().'">'.$item->get_title().'</a></li></ul>';
		    endforeach;
		}

echo '
<script type="text/javascript">

var bustcachevar=1 //bust potential caching of external pages after initial request? (1=yes, 0=no)
var loadedobjects=""
var rootdomain="http://"+window.location.hostname
var bustcacheparameter=""

function ajaxpage(url, containerid){
var page_request = false
if (window.XMLHttpRequest) // if Mozilla, Safari etc
page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ // if IE
try {
page_request = new ActiveXObject("Msxml2.XMLHTTP")
}
catch (e){
try{
page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
page_request.onreadystatechange=function(){
loadpage(page_request, containerid)
}
if (bustcachevar) //if bust caching of external page
bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
page_request.open("GET", url+bustcacheparameter, true)
page_request.send(null)
}

function loadpage(page_request, containerid){
if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
document.getElementById(containerid).innerHTML=page_request.responseText
}

function loadobjs(){
if (!document.getElementById)
return
for (i=0; i<arguments.length; i++){
var file=arguments[i]
var fileref=""
if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
if (file.indexOf(".js")!=-1){ //If object is a js file
fileref=document.createElement("script")
fileref.setAttribute("type","text/javascript");
fileref.setAttribute("src", file);
}
else if (file.indexOf(".css")!=-1){ //If object is a css file
fileref=document.createElement("link")
fileref.setAttribute("rel", "stylesheet");
fileref.setAttribute("type", "text/css");
fileref.setAttribute("href", file);
}
}
if (fileref!=""){
document.getElementsByTagName("head").item(0).appendChild(fileref)
loadedobjects+=file+" " //Recordar a este objeto como agregado a la página
}
}
}

</script>';
