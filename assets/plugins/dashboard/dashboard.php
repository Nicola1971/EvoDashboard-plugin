<?php
/* EvoDashboard 3.0 pl
Instructions:
System event:
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
Configuration:
&CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &logobox_showhide= Show Logo Box:;list;show,hide;hide &userinfo_showhide= Show User Info Box:;list;show,hide;show &messageinfo_showhide= Show Message Info Box:;list;show,hide;show &modxnews_showhide= Show ModxNews Box:;list;show,hide;show &modxsecuritynews_showhide= Show SecurityNews Box:;list;show,hide;show &recentinfo_showhide= Show Recent Info Box:;list;show,hide;show &onlineinfo_showhide= Show Online Info Box:;list;show,hide;show
*/

/* home switch home */
$WelcomeUrl = isset($WelcomeUrl) ? $WelcomeUrl : '../assets/plugins/dashboard/welcome.tpl';
$StylesUrl = isset($StylesUrl) ? $StylesUrl : '../assets/plugins/dashboard/dashboard.css';
$cssOutput = isset($cssOutput) ? $cssOutput : '<link type="text/css" rel="stylesheet" href="'.$StylesUrl.'">';

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
		$cssOutput = '
         
        ';
    }
/*show/hide MODX widgets*/
if ($logobox_showhide == 'hide') {
$logobox_display = 'none';
} else {
$logobox_display = 'block';
}

$modx->setPlaceholder('logobox_display', $logobox_display);

/*show/hide MODX widgets*/
if ($userinfo_showhide == 'hide') {
$userinfo_display = 'none';
} else {
$userinfo_display = 'block';
}

$modx->setPlaceholder('userinfo_display', $userinfo_display);

/*show/hide MODX widgets*/
if ($messageinfo_showhide == 'hide') {
$messageinfo_display = 'none';
} else {
$messageinfo_display = 'block';
}

$modx->setPlaceholder('messageinfo_display', $messageinfo_display);

/*show/hide MODX widgets*/
if ($modxnews_showhide == 'hide') {
$modxnews_display = 'none';
} else {
$modxnews_display = 'block';
}

$modx->setPlaceholder('modxnews_display', $modxnews_display);

/*show/hide MODX widgets*/
if ($modxsecuritynews_showhide == 'hide') {
$modxsecuritynews_display = 'none';
} else {
$modxsecuritynews_display = 'block';
}

$modx->setPlaceholder('modxsecuritynews_display', $modxsecuritynews_display);

/*show/hide MODX widgets*/
if ($recentinfo_showhide == 'hide') {
$recentinfo_display = 'none';
} else {
$recentinfo_display = 'block';
}

$modx->setPlaceholder('recentinfo_display', $recentinfo_display);

/*show/hide MODX widgets*/
if ($onlineinfo_showhide == 'hide') {
$onlineinfo_display = 'none';
} else {
$onlineinfo_display = 'block';
}

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