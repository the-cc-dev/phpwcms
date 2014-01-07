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

require_once(PHPWCMS_ROOT.'/include/inc_front/lib/js.jquery.default.php');

define('PHPWCMS_JSLIB', 'jquery-2.0');

/**
 * Init jQuery 2.0.x Library
 */
function initJSLib() {
	if(empty($GLOBALS['block']['custom_htmlhead']['jquery.js'])) {
		if(!USE_GOOGLE_AJAX_LIB) {
			$GLOBALS['block']['custom_htmlhead']['jquery-1.10.min.js'] = '  <!--[if lt IE 9]>' . getJavaScriptSourceLink(TEMPLATE_PATH.'lib/jquery/jquery-1.10.min.js', '') . '<![endif]-->';
			$GLOBALS['block']['custom_htmlhead']['jquery.js'] = '  <!--[if gte IE 9]><!-->' . getJavaScriptSourceLink(TEMPLATE_PATH.'lib/jquery/jquery-2.0.3.min.js', '') . '<!--<![endif]-->';
		} else {
			// not always available at Google, so use jQuery CDN
			$GLOBALS['block']['custom_htmlhead']['jquery-1.10.min.js'] = '  <!--[if lt IE 9]>' . getJavaScriptSourceLink(PHPWCMS_HTTP_SCHEMA . '://code.jquery.com/jquery-1.10.2.min.js', '') . '<![endif]-->';
			$GLOBALS['block']['custom_htmlhead']['jquery.js'] = '  <!--[if gte IE 9]><!-->' . getJavaScriptSourceLink(PHPWCMS_HTTP_SCHEMA . '://code.jquery.com/jquery-2.0.3.min.js', '') . '<!--<![endif]-->';
		}
	}
	return TRUE;
}

?>