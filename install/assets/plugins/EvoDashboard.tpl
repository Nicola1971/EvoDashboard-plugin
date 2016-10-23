//<?php
/**
 * EvoDashboard
 *
 * MODX Evolution Welcome Dashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    3.1.2 pl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomeHome,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &ShowLogo=Show Logo and Title:;list;show,hide;hide;;Show deprecated Dashboard header with logo and site name &LogoPath=Logo Path:;string;../assets/images/logo.png;;set here your custom logo path &welcome_showhide=Show Welcome Widget:;list;show,hide;show &userinfo_showhide=Show User Info inside Welcome widget:;list;show,hide;show &modxwelcome_datarow=welcome widget row position:;string;1;;1-10 &modxwelcome_datacol=welcome widget col position:;string;1;;1-4 &modxwelcome_datasizex=welcome widget x size:;string;2;;1-4 &modxwelcome_datasizey=welcome widget y size:;string;6;;1-10 &onlineinfo_showhide=Show Online Info Widget:;list;show,hide;show &onlineinfo_datarow=onlineinfo widget row position:;string;1;;1-10 &onlineinfo_datacol=onlineinfo widget col position:;string;3;;1-4 &onlineinfo_datasizex=onlineinfo widget x size:;string;2;;1-4 &onlineinfo_datasizey=onlineinfo widget y size:;string;6;;1-4 &recentinfo_showhide=Show Recent Info Widget:;list;show,hide;show &modxrecent_datarow=recent resource widget row position:;string;3;;1-10 &modxrecent_datacol=recent resource widget col position:;string;1;;1-4 &modxrecent_datasizex=recent resource widget x size:;string;4;;1-4 &modxrecent_datasizey=recent resource widget y size:;string;7;;1-10 &modxnews_showhide=Show ModxNews Widget:;list;show,hide;show &modxnews_datarow=modx news widget row position:;string;4;;1-10 &modxnews_datacol=modx news widget col position:;string;1;;1-4 &modxnews_datasizex=modx news widget x size:;string;2;;1-4 &modxnews_datasizey=modx news widget y size:;string;5;;1-10 &modxsecuritynews_showhide=Show SecurityNews Widget:;list;show,hide;show &security_datarow=modx security widget row position:;string;4;;1-10 &security_datacol=modx security widget col position:;string;2;;1-4 &security_datasizex=modx security widget x size:;string;2;;1-4 &security_datasizey=modx security widget y size:;string;5;;1-10
*/

/* EvoDashboard 3.1.2 pl
Instructions:
check event:
OnManagerWelcomeHome,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock

&ShowLogo=Show Logo and Title:;list;show,hide;hide;;Show deprecated Dashboard header with logo and site name &LogoPath=Logo Path:;string;../assets/images/logo.png;;set here your custom logo path &welcome_showhide=Show Welcome Widget:;list;show,hide;show &userinfo_showhide=Show User Info inside Welcome widget:;list;show,hide;show &modxwelcome_datarow=welcome widget row position:;string;1;;1-10 &modxwelcome_datacol=welcome widget col position:;string;1;;1-4 &modxwelcome_datasizex=welcome widget x size:;string;2;;1-4 &modxwelcome_datasizey=welcome widget y size:;string;6;;1-10 &onlineinfo_showhide=Show Online Info Widget:;list;show,hide;show &onlineinfo_datarow=onlineinfo widget row position:;string;1;;1-10 &onlineinfo_datacol=onlineinfo widget col position:;string;3;;1-4 &onlineinfo_datasizex=onlineinfo widget x size:;string;2;;1-4 &onlineinfo_datasizey=onlineinfo widget y size:;string;6;;1-4 &recentinfo_showhide=Show Recent Info Widget:;list;show,hide;show &modxrecent_datarow=recent resource widget row position:;string;3;;1-10 &modxrecent_datacol=recent resource widget col position:;string;1;;1-4 &modxrecent_datasizex=recent resource widget x size:;string;4;;1-4 &modxrecent_datasizey=recent resource widget y size:;string;7;;1-10 &modxnews_showhide=Show ModxNews Widget:;list;show,hide;show &modxnews_datarow=modx news widget row position:;string;4;;1-10 &modxnews_datacol=modx news widget col position:;string;1;;1-4 &modxnews_datasizex=modx news widget x size:;string;2;;1-4 &modxnews_datasizey=modx news widget y size:;string;5;;1-10 &modxsecuritynews_showhide=Show SecurityNews Widget:;list;show,hide;show &security_datarow=modx security widget row position:;string;4;;1-10 &security_datacol=modx security widget col position:;string;2;;1-4 &security_datasizex=modx security widget x size:;string;2;;1-4 &security_datasizey=modx security widget y size:;string;5;;1-10

*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');