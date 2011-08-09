<?php
require_once('prepend.inc.php');
if(!array_key_exists('q', $_GET)){
	die("");
}
$strQuery = $_GET['q'] . '%';
$arrAppTemplateTags = AppTemplateTag::QueryArray(
	QQ::AndCondition(
		QQ::Like(QQN::AppTemplateTag()->Tag, $strQuery),
		QQ::Equal(QQN::AppTemplateTag()->Hidden, 0),
		QQ::Equal(QQN::AppTemplateTag()->Reserved, 0)
	)
);
//Render
foreach($arrAppTemplateTags as $intIndex=>$objAppTemplateTag){
	echo $objAppTemplateTag->Tag . "\n";
}