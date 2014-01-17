<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
error_reporting(E_ALL);
ini_set('display_errors',1);  
 /*  import joomla controller library */
jimport('joomla.application.component.controller');  
// Get an instance of the controller prefixed by Drustva
$controller = JController::getInstance('Drustva');
 
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
 ?>