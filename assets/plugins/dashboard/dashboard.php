<?php
/* EvoDashboard 1.1 pl
Instructions:
System event:
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
Configuration:
&PluginDashboard= Default Dashboard:;list;yes,no;yes &PluginStyles= Load Plugin dashboard styles:;list;no,yes;yes &CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &SocialBox= Enable Social Box:;list;yes,no;yes &SocialBoxSize= Social Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &SocialBoxEvoEvent= Social Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomePrerender &SocialTitle= Social box title:;string;Social &SocialChunk= Social box chunk:;string;Welcome_SocialLinks &LinksBox= Enable Links Box:;list;yes,no;yes &LinksBoxEvoEvent= Links Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &LinksBoxSize= Links Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &CustomLinksTitle= Links box title:;string;Links &CustomLinksChunk= Links box chunk:;string;Welcome_CustomLinks &ListBox= Enable List documents:;list;yes,no;yes &ListBoxEvoEvent= List Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &ListBoxSize= List Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &ListMode= List Box mode:;list;basic,advanced;basic &ListBoxTitle=Edit List documents Title:;string;Latest Blog Entries &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1

*/

/* home switch home */
$WelcomeUrl = isset($WelcomeUrl) ? $WelcomeUrl : '../assets/plugins/dashboard/welcome.tpl';
$StylesUrl = isset($StylesUrl) ? $StylesUrl : '../assets/plugins/dashboard/dashboard.css';
$cssOutput = isset($cssOutput) ? $cssOutput : '';

//blocks
$LogoOutput = isset($LogoOutput) ? $LogoOutput : '';
$SocialOutput = isset($SocialOutput) ? $SocialOutput : '';
$LinksOutput = isset($LinksOutput) ? $LinksOutput : '';
$ListOutput = isset($ListOutput) ? $ListOutput : '';
//events
$SocialBoxEvoEvent = isset($SocialBoxEvoEvent) ? $SocialBoxEvoEvent : 'OnManagerWelcomeHome';
$LinksBoxEvoEvent = isset($LinksBoxEvoEvent) ? $LinksBoxEvoEvent : 'OnManagerWelcomeRender';
$ListBoxEvoEvent = isset($ListBoxEvoEvent) ? $ListBoxEvoEvent : 'OnManagerWelcomeRender';
// box size
$SocialBoxSize = isset($SocialBoxSize) ? $SocialBoxSize : 'dashboard-block-full';
$LinksBoxSize = isset($LinksBoxSize) ? $LinksBoxSize : 'dashboard-block-full';
$ListBoxSize = isset($ListBoxSize) ? $ListBoxSize : 'dashboard-block-full';

// Run Events
$output = "";
$e = &$modx->Event;
/* home switch home */
if ($PluginDashboard == yes) {
		if($e->name == 'OnManagerPageInit') {
		$modx->config['manager_welcome_tpl'] = '@FILE: '.$WelcomeUrl.'';
    }
	if ($PluginStyles == yes) {
		if($e->name == 'OnManagerMainFrameHeaderHTMLBlock') {
		$cssOutput = '<link type="text/css" rel="stylesheet" href="'.$StylesUrl.'">';
    }
}

}
/*Custom logo */

//logo
if ($CustomLogo == yes) {
$LogoOutput = $modx->getChunk(''.$LogoChunk.'');
}
$modx->setPlaceholder('Logo', $LogoOutput);
//}
//end logo
/*Social Box */
if($e->name == ''.$SocialBoxEvoEvent.'') {
if ($SocialBox == yes) {
$SocialOutput = '<div class="'.$SocialBoxSize.'"> <div class="sectionHeader"><i class="fa fa-globe"></i> '.$SocialTitle.'<a href="javascript:void(null);" onclick="doHideShow(\'idShowHideSocialBox\');"><i class="fa fa-bars expandbuttn"></i></a></div>
<div id="idShowHideSocialBox" class="sectionBody">'.$modx->getChunk(''.$SocialChunk.'').' <br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" /> </div></div>';
}
}
//end social
/*Custom links box*/
if($e->name == ''.$LinksBoxEvoEvent.'') {
if ($LinksBox == yes) {
$LinksOutput = '<div class="'.$LinksBoxSize.'"> <div class="sectionHeader"><i class="fa fa-tachometer"></i> '.$CustomLinksTitle.'<a href="javascript:void(null);" onclick="doHideShow(\'idShowHideLinksBox\');"><i class="fa fa-bars expandbuttn"></i></a></div>
<div id="idShowHideLinksBox" class="sectionBody">'.$modx->getChunk(''.$CustomLinksChunk.'').' <br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" /> </div></div>';
}
}
//end links
/*List documents box*/
if($e->name == ''.$ListBoxEvoEvent.'') {
if ($ListBox == yes) {
$parentId = $ParentFolder;
$dittototal = $ListItems;
	if ($ListMode == advanced) {
$rowTpl = '@CODE: <li><a href="[(site_url)]index.php?id=[+id+]" target="_blank" title="preview"><i class="fa fa-eye green2"></i></a> <a href="index.php?a=27&id=[+id+]" title="edit"><i class="fa fa-pencil-square-o red2"></i></a> <a href="index.php?a=51&id=[+id+]" title="move"><i class="fa fa-arrows blueberry"></i></a> <a href="index.php?a=62&id=[+id+]" title="unpublish"><i class="fa fa-square-o blueberry"></i></a> <a href="index.php?a=6&id=[+id+]" title="delete"><i class="fa fa-trash-o red2"></i></a> <b>[+pagetitle+]</b> ([+id+])</li>';
}
	if ($ListMode == basic) {
$rowTpl = '@CODE: <li><a href="[(site_url)]index.php?id=[+id+]" target="_blank" title="preview"><i class="fa fa-eye green2"></i></a> <a href="index.php?a=27&id=[+id+]" title="edit"><i class="fa fa-pencil-square-o red2"></i></a> <b>[+pagetitle+]</b> ([+id+])</li>';
}
$outerTpl = '@CODE: [+wf.wrapper+]';
// Ditto parameters
$params['parents'] = $parentId;
$params['depth'] = $dittolevel;
$params['tpl'] = $rowTpl;
$params['total'] = $dittototal;
if ($hideFolders == yes) {
$params['hideFolders'] = '1';
}
	if ($hideFolders == no) {
$params['hideFolders'] = '0';
}
// run Ditto
$list = $modx->runSnippet('Ditto', $params);
$ListOutput = '<div class="'.$ListBoxSize.'"><div class="sectionHeader"><i class="fa fa-pencil"></i> '.$ListBoxTitle.'<a href="javascript:void(null);" onclick="doHideShow(\'idShowHideListBox\');"><i class="fa fa-bars expandbuttn"></i></a></div>
<div id="idShowHideListBox" class="dashboard-block-content sectionBody"><ul>'.$list.'</ul><br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" /> </div></div>';
}
}
//end list
$output .= $cssOutput.$SocialOutput.$ListOutput.$LinksOutput;
$e->output($output);
return;
?>