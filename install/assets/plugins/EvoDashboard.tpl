//<?php
/**
 * EvoDashboard
 *
 * Evolution CMS Welcome Dashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    3.1.3 pl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomeHome,OnManagerPageInit
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties &ShowHeader=Show Header:;menu;show,hide;hide;;Show deprecated Dashboard header with logo and site name &ShowLogo=Show logo image:;menu;show,hide;show;;Show logo image inside header &LogoPath=Logo Path:;string;../assets/images/modx-logo.png;;set here your custom logo path &ShowTitle=Show Site Name:;menu;show,hide;show;;Show header site name title &welcome_showhide=Show Welcome Widget:;menu;show,hide,AdminOnly;show  &welcome_sizex=Welcome x size:;list;12,11,9,8,6,4,3;6 &welcome_menuindex=Welcome sort order:;text;1  &onlineinfo_showhide=Show Online Info widget:;menu;show,hide,AdminOnly;show &onlineinfo_sizex=Online Info x size:;list;12,11,9,8,6,4,3;6 &onlineinfo_menuindex=Online Info sort order:;text;2 &recentinfo_showhide=Show Recent resource Widget:;menu;show,hide,AdminOnly;show &recentinfo_sizex=Recent resource x size:;list;12,11,9,8,6,4,3;12 &recentinfo_menuindex=Recent resource sort order:;text;3 &news_showhide=Show News Widget:;menu;show,hide,AdminOnly;show &news_sizex=News x size:;list;12,11,9,8,6,4,3;6 &news_menuindex=News sort order:;text;4 &security_showhide=Show SecurityNews Widget:;menu;show,hide,AdminOnly;show &security_sizex=SecurityNews x size:;list;12,11,9,8,6,4,3;6 &security_menuindex=SecurityNews order:;text;5
*/

/* EvoDashboard 3.1.3 pl
Instructions:
check event:
OnManagerWelcomeHome,OnManagerPageInit

&ShowHeader=Show Header:;menu;show,hide;hide;;Show deprecated Dashboard header with logo and site name &ShowLogo=Show logo image:;menu;show,hide;show;;Show logo image inside header &LogoPath=Logo Path:;string;../assets/images/modx-logo.png;;set here your custom logo path &ShowTitle=Show Site Name:;menu;show,hide;show;;Show header site name title &welcome_showhide=Show Welcome Widget:;menu;show,hide,AdminOnly;show  &welcome_sizex=Welcome x size:;list;12,11,9,8,6,4,3;6 &welcome_menuindex=Welcome sort order:;text;1  &onlineinfo_showhide=Show Online Info widget:;menu;show,hide,AdminOnly;show &onlineinfo_sizex=Online Info x size:;list;12,11,9,8,6,4,3;6 &onlineinfo_menuindex=Online Info sort order:;text;2 &recentinfo_showhide=Show Recent resource Widget:;menu;show,hide,AdminOnly;show &recentinfo_sizex=Recent resource x size:;list;12,11,9,8,6,4,3;12 &recentinfo_menuindex=Recent resource sort order:;text;3 &news_showhide=Show News Widget:;menu;show,hide,AdminOnly;show &news_sizex=News x size:;list;12,11,9,8,6,4,3;6 &news_menuindex=News sort order:;text;4 &security_showhide=Show SecurityNews Widget:;menu;show,hide,AdminOnly;show &security_sizex=SecurityNews x size:;list;12,11,9,8,6,4,3;6 &security_menuindex=SecurityNews order:;text;5
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');