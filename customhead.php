<?php
/*
	------------------------------------------------------------------------
	Extension for Joomla 2.5.x - Joomla 3.x
	------------------------------------------------------------------------
	Copyright (C) 2015 Logika snc di F. Ventura & C. All Rights Reserved.
	License: GNU General Public License version 2 or later; see LICENSE.txt
	Author: Logika.com
	Website: http://www.logika.com
	Modified: 05/08/2015
	------------------------------------------------------------------------
*/

defined('_JEXEC') or die('No direct access');

jimport('joomla.plugin.plugin');

class plgSystemCustomhead extends JPlugin{
	function onBeforeCompileHead() {
		if (JFactory::getApplication()->isAdmin()){
			return true;
		}
		$doc = JFactory::getDocument();
		$customhead = $this->params->get('customhead');
		if (strlen($customhead) > 0) { $doc->addCustomTag($customhead); }
	}
}
