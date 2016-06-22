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
 * @internal    @events OnManagerWelcomeHome,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &logobox_showhide=Show Logo Widget:;list;show,hide;show &ShowLogo=Show MODX Logo:;list;show,hide;show &CustomLogo=Show Custom Logo:;list;show,hide;hide &LogoChunk=Logo Chunk:;string;Welcome_YourLogo &userinfo_showhide=Show User Info Widget:;list;show,hide;show &messageinfo_showhide=Show Message Info Widget:;list;show,hide;show &modxnews_showhide=Show ModxNews Widget:;list;show,hide;show &modxsecuritynews_showhide=Show SecurityNews Widget:;list;show,hide;show &recentinfo_showhide=Show Recent Info Widget:;list;show,hide;show &onlineinfo_showhide=Show Online Info Widget:;list;show,hide;show
*/

/* EvoDashboard 3.0 pl
Instructions:
check event:
OnManagerWelcomeHome,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock

&logobox_showhide=Show Logo Widget:;list;show,hide;show &ShowLogo=Show MODX Logo:;list;show,hide;show &CustomLogo=Show Custom Logo:;list;show,hide;hide &LogoChunk=Logo Chunk:;string;Welcome_YourLogo &userinfo_showhide=Show User Info Widget:;list;show,hide;show &messageinfo_showhide=Show Message Info Widget:;list;show,hide;show &modxnews_showhide=Show ModxNews Widget:;list;show,hide;show &modxsecuritynews_showhide=Show SecurityNews Widget:;list;show,hide;show &recentinfo_showhide=Show Recent Info Widget:;list;show,hide;show &onlineinfo_showhide=Show Online Info Widget:;list;show,hide;show

*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');