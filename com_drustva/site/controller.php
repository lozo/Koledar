<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
class DrustvaController extends JController
{
function display($cachable = false, $urlparams = false){
echo "tukaj brez taska";
}

function create(){
	echo "Ustvari društvo";
	$doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/com_drustva_frontend.css');
	$doc->addScript(JURI::root().'media/com_drustva/js/com_drustva_frontend.js');
	echo '<div class="drustva-main-frontend">'.JText::_('COM_DRUSTVA_TASK_CREATE').'</div>';
}

function delete(){
$app=JFactory::getApplication();
$id=JRequest::getInt('id',0);
echo "you want to delete $id";
$app->close();
}

}
 ?>