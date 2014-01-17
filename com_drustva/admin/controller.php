<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
class DrustvaController extends JController
{
	function display($cachable = false, $urlparams = false){
	$doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/drustva.css');
	
	JToolBarHelper::Title('Društva','drustva.png');
	echo JText::_('COM_DRUSTVA_TASK_DEFAULT');
	}

	function create(){

	$doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/drustva.css');
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/com_drustva_backend.css');
	$doc->addScript(JURI::root().'media/com_drustva/js/com_drustva_backend.js');
	
	JToolBarHelper::Title('Ustvari društvo','createtask.png');
	echo JText::_('COM_DRUSTVA_TASK_CREATE');
	echo '<div class="drustva-main-backend">'.JText::_('COM_DRUSTVA_TASK_CREATE').'</div>';
	//povezaba na podatkovno bazo
    $db = JFactory::getDBO();
	//	$db = JFactory::getDBO();
	//$sql= "select * from #__drustva"
	$sql= "INSERT INTO `#__drustva` (`naziv`, `naslov`, `posta`, `opisDrustva`, `predsednik`, `podpredsednik`, `tajnik`, `blagajnik`, `url`, `url2`, `telefon`, `fax`, `catid`, `params`) VALUES ('Folklorno društvo Lancova vas ','Lancova vas 13','2284 Videm','opis društva','Mateja Verhovšek','Gojkošek Boštjan','Manuela Lozinšek','Mirjana Lesjak','www.fdlancovavas.eu','www.fdlancovavas.si','041222222','0274',1,'1')";
	$db->setQuery($sql);
	$db->query();
	}
	
		function update(){

	$doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/drustva.css');
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/com_drustva_backend.css');
	//$doc->addScript(JURI::root().'media/com_drustva/js/com_drustva_backend.js');
	
	JToolBarHelper::Title('Posodobi društvo','createtask.png');
	echo JText::_('COM_DRUSTVA_TASK_CREATE');
	echo '<div class="drustva-main-backend">'.JText::_('COM_DRUSTVA_TASK_CREATE').'</div>';
	$id=JRequest::getInt('id',0);
	if($id>0)
	{	
	//povezaba na podatkovno bazo
	$db = JFactory::getDBO();
	$sql= "UPDATE `#__drustva` SET `naziv`= 'ŠD VIDEM' WHERE `id`=$id";
	       
	$query = $db->getQuery(true);
    $query->update('#__drustva');
    $query->set('naziv = '. 'SDVIDEM');
    $query->where('id = ' . (int) $id);
   
   $db->setQuery($sql);


   
if($db->query()) {
echo "uspelo";
return true; 
} else {

   //check if error
if($db->getErrorNum()) {
  echo $db->getErrorMsg();
 
}
$this->setError(JText::_('COM_JOOMPROSUBS_ADD_MAP_ROW_FAIL'));
echo "ni uspelo";
return false;
}	
 

	
	} 
	else {
	   echo "napačen id";
	   }
	}
	
	function listtask(){
    $doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/drustva.css');
	
	JToolBarHelper::Title('Prikaži vsa društva','listtask.png');
	
	echo JText::_('COM_DRUSTVA_TASK_LISTTASK');
		$db = JFactory::getDBO();
	$sql= "Select * FROM `#__drustva`";
	$db->setQuery($sql);
	$rows=$db->loadObjectList();
	foreach($rows as $row)
	{
	 $id = $row->id;
	 $naziv = $row->naziv;
	 $naslov = $row->naslov;
	 echo "<h2>$id- $naziv $naslov</h2>";
	 
	}
	//print_r($rows);
	$db->query();
	
	}
	
	function help(){
	$doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/drustva.css');
	
	JToolBarHelper::Title('Pomoč','deletetask.png');
	echo JText::_('COM_DRUSTVA_TASK_HELP');
	echo '<h1>Iskanje</h1>';
	}

	function delete(){
	$doc=JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'media/com_drustva/css/drustva.css');
	
	JToolBarHelper::Title('Izbriši društvo');
	//$app=JFactory::getApplication();
	$id=JRequest::getInt('id',0);
	echo "you want to delete $id";
	
	$id=JRequest::getInt('id',0);
	
		if($id>0)
	{	
	//povezaba na podatkovno bazo
	$db = JFactory::getDBO();
	$sql= "DELETE FROM `#__drustva` WHERE `id`=$id LIMIT 1";
	$db->setQuery($sql);
	$db->query();
	 echo "uspelo";
	} 
	else {
	   echo "napačen id";
	   }
	//echo JText::_('COM_DRUSTVA_TASK_DELETE');
	//$app->close();
	}

}
 ?>