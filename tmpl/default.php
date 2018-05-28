<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="bootstrap-wrapper">
  <a name="sagenda"></a>
  <app-root>Sagenda is loading...</app-root>

  <script>
    window.sagendaIntegration = 'WordPress';
    window.sagendaToken = 'c8c49993b8814a99bb494a3f2420d277';
    // window.sagendaBearerToken = '{{bearerToken}}';
    window.sagendaWeekStartsOn = '1';
    window.sagendaLanguageCultureShortName = 'fr_CH';
    window.sagendaDateFormat = 'DD MMMM YYYY';
    window.sagendaTimeFormat = 'HH:mm';
  </script>
  <script type="text/javascript" src="/inline.bundle.js"></script>
  <script type="text/javascript" src="<?php echo __FILE__; ?>/polyfills.bundle.js"></script>
  <script type="text/javascript" src="<?php echo dirname(__FILE__); ?>/main.bundle.js"></script>
</div>
