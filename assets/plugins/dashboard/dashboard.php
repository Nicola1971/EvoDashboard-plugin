<?php
/* EvoDashboard 2.1 pl
Instructions:
System event:
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
Configuration:
&CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &LogoBoxSize= Logo Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &logobox_showhide= Show Logo Box:;list;show,hide;show &UserInfoSize= User Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &userinfo_showhide= Show User Info Box:;list;show,hide;show &MessageInfoSize= Message Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &messageinfo_showhide= Show Message Info Box:;list;show,hide;show &ModxNewsSize= Modx News Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &modxnews_showhide= Show ModxNews Box:;list;show,hide;show &ModxSecurityNewsSize= Security News Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &modxsecuritynews_showhide= Show SecurityNews Box:;list;show,hide;show &RecentInfoSize= Recent Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &recentinfo_showhide= Show Recent Info Box:;list;show,hide;show &OnlineInfoSize= Online Info Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &onlineinfo_showhide= Show Online Info Box:;list;show,hide;show
*/

/* home switch home */
$WelcomeUrl = isset($WelcomeUrl) ? $WelcomeUrl : '../assets/plugins/dashboard/welcome.tpl';
$StylesUrl = isset($StylesUrl) ? $StylesUrl : '../assets/plugins/dashboard/dashboard.css';
$cssOutput = isset($cssOutput) ? $cssOutput : '';

//blocks
$LogoOutput = isset($LogoOutput) ? $LogoOutput : '';


// Run Events
$output = "";
$e = &$modx->Event;
/* home switch home */

		if($e->name == 'OnManagerPageInit') {
		$modx->config['manager_welcome_tpl'] = '@FILE: '.$WelcomeUrl.'';
    }

		if($e->name == 'OnManagerMainFrameHeaderHTMLBlock') {
		$cssOutput = '<link type="text/css" rel="stylesheet" href="'.$StylesUrl.'">';
    }
/*show/hide MODX widgets*/
if ($logobox_showhide == 'hide') {
$logobox_display = 'none';
} else {
$logobox_display = 'block';
}

//widget grid size
if ($LogoBoxSize == 'dashboard-block-full') {
$LogoBoxWidth = 'col-sm-12';
} else {
$LogoBoxWidth = 'col-sm-6';
}
$modx->setPlaceholder('LogoBoxWidth', $LogoBoxWidth);
$modx->setPlaceholder('logobox_display', $logobox_display);

/*show/hide MODX widgets*/
if ($userinfo_showhide == 'hide') {
$userinfo_display = 'none';
} else {
$userinfo_display = 'block';
}
//widget grid size
if ($UserInfoSize == 'dashboard-block-full') {
$UserInfoWidth = 'col-sm-12';
} else {
$UserInfoWidth = 'col-sm-6';
}
$modx->setPlaceholder('UserInfoWidth', $UserInfoWidth);
$modx->setPlaceholder('userinfo_display', $userinfo_display);

/*show/hide MODX widgets*/
if ($messageinfo_showhide == 'hide') {
$messageinfo_display = 'none';
} else {
$messageinfo_display = 'block';
}
//widget grid size
if ($MessageInfoSize == 'dashboard-block-full') {
$MessageInfoWidth = 'col-sm-12';
} else {
$MessageInfoWidth = 'col-sm-6';
}
$modx->setPlaceholder('MessageInfoWidth', $MessageInfoWidth);
$modx->setPlaceholder('messageinfo_display', $messageinfo_display);

/*show/hide MODX widgets*/
if ($modxnews_showhide == 'hide') {
$modxnews_display = 'none';
} else {
$modxnews_display = 'block';
}
//widget grid size
if ($ModxNewsSize == 'dashboard-block-full') {
$ModxNewsWidth = 'col-sm-12';
} else {
$ModxNewsWidth = 'col-sm-6';
}
$modx->setPlaceholder('ModxNewsWidth', $ModxNewsWidth);
$modx->setPlaceholder('modxnews_display', $modxnews_display);

/*show/hide MODX widgets*/
if ($modxsecuritynews_showhide == 'hide') {
$modxsecuritynews_display = 'none';
} else {
$modxsecuritynews_display = 'block';
}
//widget grid size
if ($ModxSecurityNewsSize == 'dashboard-block-full') {
$ModxSecurityNewsWidth = 'col-sm-12';
} else {
$ModxSecurityNewsWidth = 'col-sm-6';
}
$modx->setPlaceholder('ModxSecurityNewsWidth', $ModxSecurityNewsWidth);
$modx->setPlaceholder('modxsecuritynews_display', $modxsecuritynews_display);

/*show/hide MODX widgets*/
if ($recentinfo_showhide == 'hide') {
$recentinfo_display = 'none';
} else {
$recentinfo_display = 'block';
}
//widget grid size
if ($RecentInfoSize == 'dashboard-block-full') {
$RecentInfoWidth = 'col-sm-12';
} else {
$RecentInfoWidth = 'col-sm-6';
}
$modx->setPlaceholder('RecentInfoWidth', $RecentInfoWidth);
$modx->setPlaceholder('recentinfo_display', $recentinfo_display);

/*show/hide MODX widgets*/
if ($onlineinfo_showhide == 'hide') {
$onlineinfo_display = 'none';
} else {
$onlineinfo_display = 'block';
}
//widget grid size
if ($OnlineInfoSize == 'dashboard-block-full') {
$OnlineInfoWidth = 'col-sm-12';
} else {
$OnlineInfoWidth = 'col-sm-6';
}
$modx->setPlaceholder('OnlineInfoWidth', $OnlineInfoWidth);
$modx->setPlaceholder('onlineinfo_display', $onlineinfo_display);
/*Custom logo */

//logo

if ($CustomLogo == yes) {
$LogoOutput = $modx->getChunk(''.$LogoChunk.'');
}
$modx->setPlaceholder('Logo', $LogoOutput);
//}
//end logo

$output = $cssOutput;
$e->output($output);
return;
?>