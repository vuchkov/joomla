<?php
/**
 * Default class for Sagenda Calendar module
 * 
 * @package    Sagenda.Calendar
 * @subpackage Modules
 * @link       https://www.sagenda.com
 * @license    GNU/GPL, see LICENSE.php
 */

// No direct access
defined('_JEXEC') or die; ?>

<div class="bootstrap-wrapper">
  <a name="sagenda"></a>
  <app-root>Sagenda is loading...</app-root>

  <script>
    window.sagendaIntegration = 'WordPress';
    window.baseUrl = 'https://sagenda.net/api/v3/';
    window.sagendaBearerToken = '<?php echo $sagendaBearerToken ;?>';
    window.sagendaWeekStartsOn = '1';
    window.sagendaLanguageCultureShortName = '<?php echo $locale ;?>';
    window.sagendaDateFormat = 'DD MMMM YYYY';
    window.sagendaTimeFormat = 'HH:mm';
    window.sagendaAngularPath = 'http://localhost:8888/joomla/modules/mod_sagenda_calendar/tmpl/';
  </script>

  <script type="text/javascript" src="<?php echo $module_path; ?>/runtime.js"></script>
  <script type="text/javascript" src="<?php echo $module_path; ?>/main.js"></script>
  <script type="text/javascript" src="<?php echo $module_path; ?>/polyfills.js"></script>
</div>
