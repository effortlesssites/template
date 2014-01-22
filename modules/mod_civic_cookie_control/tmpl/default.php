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
?>
<div class="cookie-control">
<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[
  cookieControl({
      introText:'<p><?php echo $introText; ?></p>',
      fullText:'<p><?php echo $fullText; ?></p><p>By using our site you accept the terms of our <a href="<?php echo $privacyURL; ?>">Privacy Policy</a>.</p>',
      position:'<?php echo $position; ?>', // left or right
      shape:'<?php echo $shape; ?>', // triangle or diamond
      theme:'<?php echo $theme; ?>', // light or dark
      startOpen:true,
      autoHide:<?php echo $autoHide; ?>,
      subdomains:<?php echo $subdomains; ?>,
      protectedCookies: [], //list the cookies you do not want deleted ['analytics', 'twitter']
      consentModel:'<?php echo $consent; ?>',
      onAccept:function(){ccAddAnalytics()},
      onReady:function(){},
      onCookiesAllowed:function(){ccAddAnalytics()},
      onCookiesNotAllowed:function(){},
      countries:'<?php echo $countries; ?>' // Or supply a list ['United Kingdom', 'Greece']
      });

      function ccAddAnalytics() {
        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('<?php echo $gAnalytics; ?>');
          GATracker._trackPageview();
        });
      }
   //]]>
</script> 
</div>