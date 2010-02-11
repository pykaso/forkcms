<?php

/**
 * SettingsConfig
 *
 * This is the configuration-object for the users module
 *
 * @package		backend
 * @subpackage	settings
 *
 * @author 		Tijs Verkoyen <tijs@netlash.com>
 * @since		2.0
 */
final class BackendSettingsConfig extends BackendBaseConfig
{
	/**
	 * The default action
	 *
	 * @var	string
	 */
	protected $defaultAction = 'index';


	/**
	 * The disabled actions
	 *
	 * @var	array
	 */
	protected $disabledActions = array();


	/**
	 * The disabled AJAX-actions
	 *
	 * @var	array
	 */
	protected $disabledAJAXActions = array();


	/**
	 * The linked actions
	 *
	 * @var	array
	 */
	protected $linkedAjaxActions = array();
}

?>