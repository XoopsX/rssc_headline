<?php
// $Id: functions.php,v 1.1 2011/12/29 14:41:32 ohwada Exp $

// 2006-07-02 K.OHWADA
// change xoopsheadline to rssc_headline
// change XoopsHeadline to rssc_headline
// Only variable references should be returned by reference

//=========================================================
// RSSC HeadLine
// 2006-07-02 K.OHWADA
//=========================================================
// based on xoopsHeadline
//=========================================================

function &rssc_headline_getrenderer(&$headline)
{
	include_once XOOPS_ROOT_PATH.'/modules/rssc_headline/class/headlinerenderer.php';
	if (file_exists(XOOPS_ROOT_PATH.'/modules/rssc_headline/language/'.$GLOBALS['xoopsConfig']['language'].'/headlinerenderer.php')) {
		include_once XOOPS_ROOT_PATH.'/modules/rssc_headline/language/'.$GLOBALS['xoopsConfig']['language'].'/headlinerenderer.php';
		if (class_exists('rssc_headline_RendererLocal')) {
			$ret =& new rssc_headline_RendererLocal($headline);
			return $ret;
		}
	}
	$ret =& new rssc_headline_Renderer($headline);
	return $ret;
}
?>