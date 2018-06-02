<?php
/**
 * Sagenda Calendar Module Entry Point
 *
 * @package    Sagenda.Calendar
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       https://www.sagenda.com
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$hello = modSagendaCalendarHelper::getHello($params);

$module_path = JURI::base().'modules/'.$module->module.'/tmpl';

$sagenda_token = $params->get('sagenda_token', '');

$document = JFactory::getDocument();
$document->addStyleSheet($module_path.'/styles.css');

require JModuleHelper::getLayoutPath('mod_sagenda_calendar');
