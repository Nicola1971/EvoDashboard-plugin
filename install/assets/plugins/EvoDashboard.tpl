//<?php
/**
 * EvoDashboard
 *
 * MODX Evolution Welcome Dashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    3.0 pl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &CustomLogo= Enable Custom Logo:;list;yes,no;no &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &logobox_showhide= Show Logo Box:;list;show,hide;show &userinfo_showhide= Show User Info Box:;list;show,hide;show &messageinfo_showhide= Show Message Info Box:;list;show,hide;show &modxnews_showhide= Show ModxNews Box:;list;show,hide;show &modxsecuritynews_showhide= Show SecurityNews Box:;list;show,hide;show &recentinfo_showhide= Show Recent Info Box:;list;show,hide;show &onlineinfo_showhide= Show Online Info Box:;list;show,hide;show
*/

/* EvoDashboard 3.0 pl
Instructions:
check event:
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock

&CustomLogo= Enable Custom Logo:;list;yes,no;no &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &logobox_showhide= Show Logo Box:;list;show,hide;show &userinfo_showhide= Show User Info Box:;list;show,hide;show &messageinfo_showhide= Show Message Info Box:;list;show,hide;show &modxnews_showhide= Show ModxNews Box:;list;show,hide;show &modxsecuritynews_showhide= Show SecurityNews Box:;list;show,hide;show &recentinfo_showhide= Show Recent Info Box:;list;show,hide;show &onlineinfo_showhide= Show Online Info Box:;list;show,hide;show

*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');