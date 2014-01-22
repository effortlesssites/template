<?php
/**
 * @package		Joostrap Extension Civic Cookie Control Module
 * @author Philip Locke - www.joostrap.com & www.fastnetwebdesign.co.uk 
 * @subpackage	mod_civic_cookie_control
 * @copyright	Copyright (C) 2011 - 2012 Joostrap.com, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$introText = $params->get('introText');
$fullText = $params->get('fullText');
$privacyURL = $params->get('privacyURL');
$position = $params->get('position');
$shape = $params->get('shape');
$theme = $params->get('theme');
$autoHide = $params->get('autoHide');
$subdomains = $params->get('subdomains');
$consent = $params->get('consent');
$countries = $params->get('countries');
$gAnalytics = $params->get('gAnalytics');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));


require JModuleHelper::getLayoutPath('mod_civic_cookie_control', $params->get('layout', 'default'));

$document = &JFactory::getDocument();
$document->addScript( 'modules/mod_civic_cookie_control/js/cookieControl-5.1.min.js' );
//$document = &JFactory::getDocument(); $document->addScriptDeclaration('modules'.DS.'mod_civic_cookie_control'.DS.'js'.DS.'cookieControl-5.1.min.js');
//$document = &JFactory::getDocument(); $document->addStyleSheet('modules'.DS.'mod_bootstrap_bliptv'.DS.'css'.DS.'embed.css');
