<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
//Restricting access to the component
// Access check. Preverimo ce imamo dostop do Komponetne vse naštelano v xml datoteki access.xml v admin mapi
$controller = JController::getInstance('Drustva');
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
// Redirect if set by the controller
$controller->redirect();
//ČE TU KAJ NAPIŠEŠ JE VIDNO V VSEH TASKAH 
//echo JText::_('COM_DRUSTVA_WELCOME');
?>