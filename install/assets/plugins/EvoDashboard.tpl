//<?php
/**
 * EvoDashboard
 *
 * MODX Evolution Welcome Dashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    2.1 pl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &LogoBoxSize= Logo Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &logobox_showhide= Show Logo Box:;list;show,hide;show &UserInfoSize= User Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &userinfo_showhide= Show User Info Box:;list;show,hide;show &MessageInfoSize= Message Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &messageinfo_showhide= Show Message Info Box:;list;show,hide;show &ModxNewsSize= Modx News Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &modxnews_showhide= Show ModxNews Box:;list;show,hide;show &ModxSecurityNewsSize= Security News Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &modxsecuritynews_showhide= Show SecurityNews Box:;list;show,hide;show &RecentInfoSize= Recent Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &recentinfo_showhide= Show Recent Info Box:;list;show,hide;show &OnlineInfoSize= Online Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &onlineinfo_showhide= Show Online Info Box:;list;show,hide;show
*/

/* EvoDashboard 2.0.4 pl
Instructions:
check event:
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock

&CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &LogoBoxSize= Logo Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &logobox_showhide= Show Logo Box:;list;show,hide;show &UserInfoSize= User Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &userinfo_showhide= Show User Info Box:;list;show,hide;show &MessageInfoSize= Message Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &messageinfo_showhide= Show Message Info Box:;list;show,hide;show &ModxNewsSize= Modx News Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &modxnews_showhide= Show ModxNews Box:;list;show,hide;show &ModxSecurityNewsSize= Security News Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &modxsecuritynews_showhide= Show SecurityNews Box:;list;show,hide;show &RecentInfoSize= Recent Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &recentinfo_showhide= Show Recent Info Box:;list;show,hide;show &OnlineInfoSize= Online Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &onlineinfo_showhide= Show Online Info Box:;list;show,hide;show

*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');