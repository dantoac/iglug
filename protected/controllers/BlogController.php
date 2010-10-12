  <?php
/*
 *      BlogController.php
 *
 *      Copyright 2010 Daniel Antonio Aguayo Catalán <daniel.aguayo@alumnos.inacap.cl>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

 class BlogController extends Controller {

   public $layout = 'sidebar';

        public function actionConcepcion()
	{
	    $feed = new simplepie();
	    $feed->set_feed_url('http://www.gnewbook.org/pg/groupblog/owned/group:1908?view=rss');

	    $grupo_info = '<div class="title"><strong>I</strong>nvestigación y <strong>D</strong>esarrollo <strong>L</strong>ibremente <strong>E</strong>xperimentado con <strong>TE</strong>cnologías de <strong>S</strong>oftware <strong>L</strong>ibre <strong>A</strong>plicadas</div>
	    <div class="meta">Grupo de Usuarios de Software Libre en Sede Concepción-Talcahuano</div>';

	    $breadcrumbs = $this -> breadcrumbs = array('Idle Tesla');

	  $this -> render('index',array(
	  'feed' => $feed,
	  'breadcrumbs' => $breadcrumbs,
	  'grupo_info' => $grupo_info)
	);
        }


	public function actionPuertomontt()
	{
	    $feed = new simplepie();
	    $feed->set_feed_url('http://www.gnewbook.org/pg/groupblog/owned/group:12624?view=rss',
	    'http://www.gnewbook.org/pg/blog/pmt.inatux?view=rss');
	    $breadcrumbs = $this -> breadcrumbs = array('Inatux');
	    $grupo_info = 'Grupo de Usuarios GNU/Linux 	Inacap Sede Puerto Montt';

	  $this -> render('index',array(
	  'feed' => $feed,
	  'breadcrumbs' => $breadcrumbs,
	  'grupo_info' => $grupo_info)
	);
	}

	public function actionTemuco()
	{
	  $feed = new simplepie();
	  $feed->set_feed_url(array('http://www.gnewbook.org/pg/groupblog/owned/group:23112?view=rss',
		'http://araucalinux.com/index.php?format=feed&type=rss'));
	  $breadcrumbs = $this -> breadcrumbs = array('Araucalinux');
	  $grupo_info = 'Grupo de Usuarios GNU/Linux de la Universidad Tecnológica de Chile (INACAP) Temuco';

	  $this -> render('index',array(
	    'feed' => $feed,
	    'breadcrumbs' => $breadcrumbs,
	    'grupo_info' => $grupo_info)
	 );
	}

	public function actionOsorno()
	{
	  $feed = new simplepie();
	  $feed->set_feed_url('http://www.gnewbook.org/pg/groupblog/owned/group:13069?view=rss');
	  $breadcrumbs = $this -> breadcrumbs = array('Sede Osorno');
	  $grupo_info = '<h2>PRONTO</h2>';

	  $this -> render('index',array(
	    'feed' => $feed,
	    'breadcrumbs' => $breadcrumbs,
	    'grupo_info' => $grupo_info)
	 );
	}
	
	public function actionValparaiso()
	{
	  $feed = new simplepie();
	  $feed->set_feed_url('http://www.gnewbook.org/');
	  
	  $breadcrumbs = $this -> breadcrumbs = array('Sede Valparaíso');
	  $grupo_info = '<h2>PRONTO</h2>';

	  $this -> render('index',array(
	    'feed' => $feed,
	    'breadcrumbs' => $breadcrumbs,
	    'grupo_info' => $grupo_info)
	 );
	}

//         public function actionIndex()
//         {
//   	    $feed = new simplepie();
// 	    $feed->set_item_limit(1);
// 	    $feed->set_feed_url(array(
// 				'http://www.gnewbook.org/pg/groupblog/owned/group:12624?view=rss',//inatux
// 				'http://www.gnewbook.org/pg/groupblog/owned/group:1908?view=rss',//idle-tesla
// 				'http://www.gnewbook.org/pg/groupblog/owned/group:11003?view=rss',//iglug
// 				'http://www.gnewbook.org/pg/groupblog/owned/group:23112?view=rss',//araucalinux
// 				'http://araucalinux.com/index.php?format=feed&type=rss'//araucalinux
// 				));
//
// 	    $breadcrumbs = $this -> breadcrumbs = array('Multiverso');
//
// 	  $this -> render('index',array(
// 	  'feed' => $feed,
// 	  'breadcrumbs' => $breadcrumbs)
// 	);
//         }

	public function actionIndex()
	{
	  $feed = new simplepie();
	  $feed -> set_feed_url(
				'http://www.gnewbook.org/pg/groupblog/owned/group:11003?view=rss'
				);

	$breadcrumbs = $this -> breadcrumbs = array('Blog Comunitario');
	$grupo_info = 'Este es el blog del grupo IGLUG, en el que todos sus miembros pueden publicar. '.CHtml::link('Ingresa','http://www.gnewbook.org/pg/groups/11003/iglug/').' al grupo en Gnewbook.';

	  $this -> render('index',array(
	  'feed' => $feed,
	  'breadcrumbs' => $breadcrumbs,
	  'grupo_info' => $grupo_info)
	);
					}
}
?>

