<?php
/**
 * @version $Id$
 * KunenaLatest Module
 * @package Kunena Latest
 *
 * @Copyright (C) 2010 www.kunena.com All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 */

// no direct access
defined ( '_JEXEC' ) or die ( '' );

// Detect and load Kunena 1.6+
$kunena_api = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_kunena' . DS . 'api.php';
if (! is_file ( $kunena_api ))
	return;
require_once ($kunena_api);
require_once (KUNENA_PATH . DS . 'class.kunena.php');
require_once (KUNENA_PATH_LIB . DS . 'kunena.link.class.php');
require_once (KUNENA_PATH_LIB . DS . 'kunena.image.class.php');

// Load topic icons   
$topic_emoticons = array ();
$topic_emoticons [0] = KUNENA_URLICONSPATH . 'topic-default.gif';
$topic_emoticons [1] = KUNENA_URLICONSPATH . 'topic-exclamation.png';
$topic_emoticons [2] = KUNENA_URLICONSPATH . 'topic-question.png';
$topic_emoticons [3] = KUNENA_URLICONSPATH . 'topic-arrow.png';
$topic_emoticons [4] = KUNENA_URLICONSPATH . 'topic-love.png';
$topic_emoticons [5] = KUNENA_URLICONSPATH . 'topic-grin.gif';
$topic_emoticons [6] = KUNENA_URLICONSPATH . 'topic-shock.gif';
$topic_emoticons [7] = KUNENA_URLICONSPATH . 'topic-smile.gif';

// Set date settings
$config = & JFactory::getConfig ();
$tzoffset = $config->getValue ( 'config.offset' );

// Include the kunenalatest functions only once
require_once (dirname ( __FILE__ ) . DS . 'helper.php');

$params = (object) $params;
$klistpost = modKunenaLatestHelper::getKunenaLatestList ( $params );

require (JModuleHelper::getLayoutPath ( 'mod_kunenalatest' ));
