<?php
//////////////////////
include_once(dirname(__FILE__) . "/../system/System.php");
include_once dirname(__FILE__) . "/../command/AddCommand.php";
$addcom = new addcommand;
$addcom->addcommand("delvar","default","宣言済み環境変数を削除します。","<変数名>");
//////////////////////
class delvar extends systemProcessing{
	function __construct(){

	}
	public function onCommand(){
		global $aryTipeTxt;
		$valuepros = new environmentVariables;
		$valuepros->delvalue($aryTipeTxt[1]);
	}
}


?>
