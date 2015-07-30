<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about'));
	Router::connect('/terms', array('controller' => 'pages', 'action' => 'display', 'terms'));
	Router::connect('/amps', array('controller' => 'pages', 'action' => 'display', 'amps'));
	Router::connect('/installation', array('controller' => 'pages', 'action' => 'display', 'installation'));
	Router::connect('/miscellaneous', array('controller' => 'pages', 'action' => 'display', 'miscellaneous'));
	Router::connect('/receivers', array('controller' => 'pages', 'action' => 'display', 'receivers'));
	Router::connect('/headlights', array('controller' => 'pages', 'action' => 'display', 'headlights'));
	Router::connect('/speakers', array('controller' => 'pages', 'action' => 'display', 'speakers'));
	Router::connect('/video', array('controller' => 'pages', 'action' => 'display', 'video'));
	Router::connect('/subwoofers', array('controller' => 'pages', 'action' => 'display', 'subwoofers'));
	Router::connect('/eqs-xovers', array('controller' => 'pages', 'action' => 'display', 'eqs-xovers'));
	Router::connect('/lookup', array('controller' => 'pages', 'action' => 'display', 'lookup'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'display', 'contact'));
	Router::connect('/track', array('controller' => 'pages', 'action' => 'display', 'track'));
	Router::connect('/whyPE', array('controller' => 'pages', 'action' => 'display', 'why'));
	Router::connect('/catalog', array('controller' => 'pages', 'action' => 'display', 'catalog'));
	Router::connect('/thankyou', array('controller' => 'pages', 'action' => 'display', 'thankyou'));
/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
