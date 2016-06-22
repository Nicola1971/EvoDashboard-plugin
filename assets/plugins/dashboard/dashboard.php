<?php
/* EvoDashboard 3.0 pl
Instructions:
System event:
OnManagerWelcomeHome,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
Configuration:
&logobox_showhide=Show Logo Widget:;list;show,hide;show &ShowLogo=Show MODX Logo:;list;show,hide;show &CustomLogo=Show Custom Logo:;list;show,hide;hide &LogoChunk=Logo Chunk:;string;Welcome_YourLogo &userinfo_showhide=Show User Info Widget:;list;show,hide;show &messageinfo_showhide=Show Message Info Widget:;list;show,hide;show &modxnews_showhide=Show ModxNews Widget:;list;show,hide;show &modxsecuritynews_showhide=Show SecurityNews Widget:;list;show,hide;show &recentinfo_showhide=Show Recent Info Widget:;list;show,hide;show &onlineinfo_showhide=Show Online Info Widget:;list;show,hide;show
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

if ($CustomLogo == 'show') {
$LogoOutput = $modx->getChunk(''.$LogoChunk.'');
$LogoButton = '<span class="wm_button white" style="border:0">'.$LogoOutput.'</span>';
}
else {
if ($ShowLogo == 'show') {
$LogoButton = ' <span class="wm_button white" style="border:0"><img src="media/style/' . $modx->config['manager_theme'] . '/images/misc/logo.png" alt="[+logo_slogan+]" /></span>';
}
else {
$LogoButton = '';    
}
}
$modx->setPlaceholder('Logo', $LogoButton);

//end logo

$output = $cssOutput;
$e->output($output);
return;
?>