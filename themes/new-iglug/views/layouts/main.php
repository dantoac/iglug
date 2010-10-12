<!--
Layout main.php (/theme/iglug/views/layouts/main.php)

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
        <!-- [if IE] >
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" />
        <![endif] -->
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="keywords" lang="es" content="linux inacap,empresa,emprendimiento,emprender,libertad,mejor,Inacap,GNU/Linux,Comunidad,Universidad Tecnológica de Chile,negocios, software libre,open source,grupo de usuarios,usuarios software libre inacap,usuarios gnu inacap,usuarios linux inacap" />
        <meta name="description" content="Red Nacional Inter Sede de Grupos de Usuarios GNU y Linux en la Universidad Tecnológica de Chile INACAP" />
    </head>
    <body style="direction: ltr;">
        <div id="ie" style="display:none">D:</div>
        <div class="container">
            <div id="header">
                <div id="logo"><?php echo CHtml::link('<img alt="Logo IGLUG" title="INACAP GNU &amp; Linux Users Group" src="http://www.gnewbook.org/mod/tidypics/thumbnail.php?file_guid=12981&amp;size=large" />', '/') ?>
                    <div class="bloque" id="mailist-subscribe">
                        <form action="http://www.gnewbook.org/mail_lists/list.php" method="post">
                            <fieldset><legend>Lista de Correo IGLUG</legend>
                                <input class="textfield" name="sAddr" size="20" type="text" value="tu@email "/>
                                <input name="sList" value='iglug' type='hidden' />
                                <input name="sUrls" value="http://www.gnewbook.org/pg/groups/11003/" type="hidden" />
                                <input class="boton" value='Suscríbete' type='submit' /><br />(podría ser filtrado como spam)
                            </fieldset>
                        </form>
                    </div><!-- bloque -->
                </div><!-- logo -->
                <div id="menu">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            //array('label'=>'Home', 'url'=>array('/site/index')),
                            array('label' => 'Acerca de', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Blogs', 'url' => array('/blog/index')),
                            array('label' => 'Contacto', 'url' => array('/site/contact', 'view' => 'contact')),
                            array('label' => 'Webchat', 'url' => array('/site/page', 'view' => 'webchat')),
                            array('label' => 'Wiki', 'url' => array('/site/page', 'view' => 'wiki')),
                        ),
                    )); ?>
                </div>
            </div><!-- header -->
            <?php echo $content; ?>
            <div id="footer">
                <?php echo CHtml::encode(Yii::app()->name); ?> is <?php echo Yii::powered(); ?>
            </div><!-- footer -->
            <!-- </div>page -->
        </div>
    </body>
</html>
