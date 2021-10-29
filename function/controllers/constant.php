<?php
 
	$restrictedPages = 'funtion';
	$existence = explode('/',$_SERVER['PHP_SELF'] );

	if(in_array('function',$existence))
		{
	die ("Direct access not forbidden");
	exit;
}
else{
define("BASE_URL", "eCard/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "eCard/");
define('Sitename',"ID Card Generator and Verifier");
$pagename ='';

}



?>
