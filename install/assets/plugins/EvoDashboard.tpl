//<?php
/**
 * EvoDashboard
 *
 * MODX Evolution Welcome Dashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    3.2.1 pl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomeHome,OnManagerPageInit
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties &ShowHeader=Show Header:;menu;show,hide;hide;;Show deprecated Dashboard header with logo and site name &ShowLogo=Show logo image:;menu;show,hide;show;;Show logo image inside header &LogoPath=Logo Path:;string;../assets/images/modx-logo.png;;set here your custom logo path &ShowTitle=Show Site Name:;menu;show,hide;show;;Show header site name title &welcome_showhide=Show Welcome Widget:;menu;show,hide,AdminOnly;show &userinfo_showhide=Show User Info inside Welcome widget:;menu;show,hide,AdminOnly;show &messages_showhide=Show Messages inside User Info:;menu;show,hide,AdminOnly;show &modxwelcome_datarow=welcome widget row position:;string;1;;1-10 &modxwelcome_datacol=welcome widget col position:;string;1;;1-4 &modxwelcome_datasizex=welcome widget x size:;string;2;;1-4 &modxwelcome_datasizey=welcome widget y size:;string;6;;1-10 &onlineinfo_showhide=Show Online Info Widget:;menu;show,hide,AdminOnly;show &onlineinfo_datarow=onlineinfo widget row position:;string;1;;1-10 &onlineinfo_datacol=onlineinfo widget col position:;string;3;;1-4 &onlineinfo_datasizex=onlineinfo widget x size:;string;2;;1-4 &onlineinfo_datasizey=onlineinfo widget y size:;string;6;;1-4 &recentinfo_showhide=Show Recent resource Widget:;menu;show,hide,AdminOnly;show &modxrecent_datarow=recent resource widget row position:;string;3;;1-10 &modxrecent_datacol=recent resource widget col position:;string;1;;1-4 &modxrecent_datasizex=recent resource widget x size:;string;4;;1-4 &modxrecent_datasizey=recent resource widget y size:;string;7;;1-10 &modxnews_showhide=Show ModxNews Widget:;menu;show,hide,AdminOnly;show &modxnews_datarow=modx news widget row position:;string;4;;1-10 &modxnews_datacol=modx news widget col position:;string;1;;1-4 &modxnews_datasizex=modx news widget x size:;string;2;;1-4 &modxnews_datasizey=modx news widget y size:;string;5;;1-10 &modxsecuritynews_showhide=Show SecurityNews Widget:;menu;show,hide,AdminOnly;show &security_datarow=modx security widget row position:;string;4;;1-10 &security_datacol=modx security widget col position:;string;2;;1-4 &security_datasizex=modx security widget x size:;string;2;;1-4 &security_datasizey=modx security widget y size:;string;5;;1-10 &use_theme_css=Use theme styles:;menu;yes,no;yes;;Use dashboard.css of current manager theme. &use_color_css=Use color css:;menu;yes,no;yes;;Load extra color css for more icons styles and colors, used with Social Widget and Custom Links Widget
*/

/* EvoDashboard 3.2.1 pl
Instructions:
check event:
OnManagerWelcomeHome,OnManagerPageInit

&ShowHeader=Show Header:;menu;show,hide;hide;;Show deprecated Dashboard header with logo and site name &ShowLogo=Show logo image:;menu;show,hide;show;;Show logo image inside header &LogoPath=Logo Path:;string;../assets/images/modx-logo.png;;set here your custom logo path &ShowTitle=Show Site Name:;menu;show,hide;show;;Show header site name title &welcome_showhide=Show Welcome Widget:;menu;show,hide,AdminOnly;show &userinfo_showhide=Show User Info inside Welcome widget:;menu;show,hide,AdminOnly;show &messages_showhide=Show Messages inside User Info:;menu;show,hide,AdminOnly;show &modxwelcome_datarow=welcome widget row position:;string;1;;1-10 &modxwelcome_datacol=welcome widget col position:;string;1;;1-4 &modxwelcome_datasizex=welcome widget x size:;string;2;;1-4 &modxwelcome_datasizey=welcome widget y size:;string;6;;1-10 &onlineinfo_showhide=Show Online Info Widget:;menu;show,hide,AdminOnly;show &onlineinfo_datarow=onlineinfo widget row position:;string;1;;1-10 &onlineinfo_datacol=onlineinfo widget col position:;string;3;;1-4 &onlineinfo_datasizex=onlineinfo widget x size:;string;2;;1-4 &onlineinfo_datasizey=onlineinfo widget y size:;string;6;;1-4 &recentinfo_showhide=Show Recent resource Widget:;menu;show,hide,AdminOnly;show &modxrecent_datarow=recent resource widget row position:;string;3;;1-10 &modxrecent_datacol=recent resource widget col position:;string;1;;1-4 &modxrecent_datasizex=recent resource widget x size:;string;4;;1-4 &modxrecent_datasizey=recent resource widget y size:;string;7;;1-10 &modxnews_showhide=Show ModxNews Widget:;menu;show,hide,AdminOnly;show &modxnews_datarow=modx news widget row position:;string;4;;1-10 &modxnews_datacol=modx news widget col position:;string;1;;1-4 &modxnews_datasizex=modx news widget x size:;string;2;;1-4 &modxnews_datasizey=modx news widget y size:;string;5;;1-10 &modxsecuritynews_showhide=Show SecurityNews Widget:;menu;show,hide,AdminOnly;show &security_datarow=modx security widget row position:;string;4;;1-10 &security_datacol=modx security widget col position:;string;2;;1-4 &security_datasizex=modx security widget x size:;string;2;;1-4 &security_datasizey=modx security widget y size:;string;5;;1-10 &use_theme_css=Use theme styles:;menu;yes,no;yes;;Use dashboard.css of current manager theme. &use_color_css=Use color css:;menu;yes,no;yes;;Load extra color css for more icons styles and colors, used with Social Widget and Custom Links Widget
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');