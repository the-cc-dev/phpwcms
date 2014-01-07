<?php
/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <oliver@phpwcms.de>
 * @copyright Copyright (c) 2002-2014, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.de
 *
 **/


// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------



// Content Type File List

$SQL .= "acontent_text		='".aporeplace($content["file_descr"])."', ";
$SQL .= "acontent_html		='".aporeplace($content["html"])."', ";
$SQL .= "acontent_files		='".aporeplace(isset($content["file_id_list"]) ? $content["file_id_list"] : '')."', ";
$SQL .= "acontent_template	='".aporeplace($content["file_template"])."', ";
$SQL .= "acontent_form		='".aporeplace(serialize($content['file']))."' ";

?>