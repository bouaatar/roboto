<?php
class eventclass_seance_l1_ins  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterAdd' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'date_inscription' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		
//**********  Redirect to another page  ************ 
header("Location: send.php"); 
exit();




		;
		
	}
	public function default_date_inscription_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>