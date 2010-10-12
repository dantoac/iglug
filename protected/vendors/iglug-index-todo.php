<!--
        index.php (http://iglug.gnewbook.org/index.php)

        Copyright 2008 Daniel Aguayo Catalán <daniel.aguayo@alumnos.inacap.cl>

        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software
        Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
        MA 02110-1301, USA.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<?php require("php/globales.php"); ?>
    <title>INACAP GNU &amp; Linux Users Group - Red Inter-Sede de usuarios de Tecnologías Libres para la Investigación y Desarrollo en Inacap.</title>
	<?php cabecera($grupo_url);  ?>
    <link rel="stylesheet" type="text/css" href="../estilo/iglug.css" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Bluefish 1.0.7"/>
    <meta name="keywords" lang="es" content="empresa, emprendimiento, emprender, libertad, mejor,Inacap, GNU/Linux, Comunidad, Universidad Tecnológica de Chile, negocios, software libre, open source, grupo de usuarios" />
    <meta name="description" content="Red Nacional Inter Sede de Grupos de Usuarios GNU y Linux en la Universidad Tecnológica de Chile INACAP" />
 
</head>
<body style="direction: ltr;">
<div id="contenedor">
<div id="logo">
    <a href="../" title="Ir a la Portada..." style="border:0;"><img alt="Logo IGLUG" title="INACAP GNU & Linux Users Group" border="0" src="http://www.gnewbook.org/mod/tidypics/thumbnail.php?file_guid=12981&size=large" /></a>
</div>

<div id="lateral">
    <div id="panel">
    <div class="bloque" id="mailist-subscribe">
	<form action="http://www.gnewbook.org/mail_lists/list.php" method="post">
	    <fieldset><legend>Lista de Correo</legend>
	    <input name="sAddr" size="20" type="text" value="tu@email "/>
	    <input name="sList" value='iglug' type='hidden' />
	    <input name="sUrls" value="http://www.gnewbook.org/pg/groups/11003/" type="hidden" />
	    <input value='Suscríbete' type='submit' /><br />(podría ser filtrado como spam)
	    </fieldset>
	</form>
    </div>

    <div id="menu_grupos">
	<h2>Grupos</h2>
	<ul>
	<!--		<li>Arica</li>-->
	<li><a href="../blog/comunitario" title="Grupo Integrado por todas las Sedes">Blog Comunitario</a></li>
	<!-- <li>Chillán</li> -->
	<li><a href="../blog/idle-tesla" title="Artículos en el blog del GLUG en sede Concepción">Concepción</a></li>
	<!--<li>Iquique</li>-->
	<li><a href="../blog/osorno">Osorno</a></li>
	<li><a href="../blog/inatux" title="Artículos en el blog del GLUG en sede Puerto Montt">Puerto Montt</a></li>
	<!--<li>Santiago Centro</li>
	<li>Santiago Sur</li>
	<li>Valdivia</li>-->
	</ul>
    </div>

    <div id="lista-articulos"><h2>Artículos</h2>
	<div class="bloque"><?php muestra_lista_articulos($feed); ?></div>
    </div>

    <div id="enlaces">
	<h2>Enlaces</h2>
	    <div class="bloque"><a href="http://www.gnewbook.org" title="La Red Social basada en Software Libre" alt="www.Gnewbook.org"><img src="../estilo/img/logo-gnewbook-150x54.png" alt="Logo Gnewbook" /></a></div>
	    <div class="bloque"><a href="http://www.gnuchile.cl" title="Fundación de Desarrollo Tecnológico Libre GNUCHILE" alt="www.gnuchile.cl"><img src="../estilo/img/gnuchile-100x86.png" alt="Logo Fundación GNUCHILE" /></a></div>
    </div>

    </div><!-- Fin PANEL -->
</div>

<div id="contenido">
    <div id="menu">
	<ul>
	<li><a href="../index.php" title="Portada">Portada</a></li>
	<li><a href="http://www.gnewbook.org/pg/groups/forum/11003/" title="Foro del IGLUG en Gnewbook">Foro</a></li>
	<li><a href="javascript:ajaxpage('nodos/irc-iglug.html', 'contenido');">Webchat</a></li>
	<li><a href="/wiki" title="Documentación en general">Wiki</a></li>
	<li><a href="../nodo/acerca" title="Documentación en general">Acerca</a></li>
	</ul>
    </div>
    <?php muestra_info($grupo_nombre, $grupo_info);?>
    
    <div id="pagina">
	<!-- EMPIEZAN LOS ARTÍCULOS -->
	<div class="post bloque"><?php muestra_contenido($nodo,$feed,$start,$length,$max); ?></div><!-- FIN POST -->
    </div>
</div><!-- termina CONTENIDO -->
    <div id="pie">Hecha con <a href="http://www.geany.org/">Software</a> <a href="http://www.gnuchile.cl/index.php?category=software-libre/conoce-el-software-libre/">Libre</a>. Contacta al <a href="mailto:daniel.aguayo@alumnos.inacap.cl">Webmaster</a>.</div>
</div></body></html>
