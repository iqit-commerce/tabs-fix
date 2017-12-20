<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include dirname(__FILE__).'/config/config.inc.php';



$sql = 'SELECT `id_tab`, `class_name` FROM '._DB_PREFIX_.'tab WHERE `class_name` = "AdminIqitLinkWidget" AND `module` != "iqitlinksmanager"'; 
$results = Db::getInstance()->ExecuteS($sql);

foreach ($results as $tab){
	fixTab($tab['id_tab']);
}


$sql = 'SELECT `id_tab`, `class_name` FROM '._DB_PREFIX_.'tab WHERE `class_name` = "AdminIqitReviews" AND `module` != "iqitreviews"'; 
$results = Db::getInstance()->ExecuteS($sql);

foreach ($results as $tab){
	fixTab($tab['id_tab']);
}


$sql = 'SELECT `id_tab`, `class_name` FROM '._DB_PREFIX_.'tab WHERE `class_name` = "AdminIqitHtmlBannerWidget" AND `module` != "iqithtmlandbanners"'; 
$results = Db::getInstance()->ExecuteS($sql);

foreach ($results as $tab){
	fixTab($tab['id_tab']);
}


$sql = 'SELECT `id_tab`, `class_name` FROM '._DB_PREFIX_.'tab WHERE `class_name` = "AdminIqitThemeEditor" AND `module` != "iqitthemeeditor"'; 
$results = Db::getInstance()->ExecuteS($sql);

foreach ($results as $tab){
	fixTab($tab['id_tab']);
}

echo "Tabs fixed";


function fixTab($id){
	Db::getInstance()->delete('tab', 'id_tab = '. (int) $id, 1);
	Db::getInstance()->delete('tab_lang', 'id_tab = '. (int) $id);

}

?>