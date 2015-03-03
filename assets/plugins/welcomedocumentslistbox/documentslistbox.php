<?php
/******
WelcomeDocumentsListBox 2.1 RC
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&ListBoxEvoEvent= List Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeHome &ListBoxSize= List Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &ListMode= List Box mode:;list;basic,advanced;advanced &ListBoxTitle=Edit List documents Title:;string;List Documents Widget &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1
****
*/
//blocks
$ListOutput = isset($ListOutput) ? $ListOutput : '';
//events
$ListBoxEvoEvent = isset($ListBoxEvoEvent) ? $ListBoxEvoEvent : 'OnManagerWelcomeRender';
// box size
$ListBoxSize = isset($ListBoxSize) ? $ListBoxSize : 'dashboard-block-full';
//widget grid size
if ($ListBoxSize == 'dashboard-block-full') {
$ListBoxWidth = 'col-sm-12';
} else {
$ListBoxWidth = 'col-sm-6';
}
$output = "";
$e = &$modx->Event;

/*List documents box*/
if($e->name == ''.$ListBoxEvoEvent.'') {
$parentId = $ParentFolder;
$dittototal = $ListItems;
	if ($ListMode == advanced) {
$rowTpl = '@CODE: <tr><td width="5%"><a href="[(site_url)]index.php?id=[+id+]" target="_blank" title="preview"><i class="fa fa-eye icon-color-light-green icon-no-border"></i></a></td><td width="5%"><a href="index.php?a=27&id=[+id+]" title="edit"><i class="fa fa-pencil-square-o icon-color-red icon-no-border"></i></a></td><td width="5%"><a href="index.php?a=51&id=[+id+]" title="move"><i class="fa fa-arrows icon-color-blue icon-no-border"></i></a></td><td width="5%"><a href="index.php?a=62&id=[+id+]" title="unpublish"><i class="fa fa-square-o icon-color-grey icon-no-border"></i></a></td><td><a href="index.php?a=6&id=[+id+]" title="delete"><i class="fa fa-trash-o icon-color-red icon-no-border"></i></a></td><td> <b>[+pagetitle+]</b> ([+id+])</td></tr>';
}
	if ($ListMode == basic) {
$rowTpl = '@CODE: <tr><td width="5%"><a href="[(site_url)]index.php?id=[+id+]" target="_blank" title="preview"><i class="fa fa-eye green2"></i></a></td><td width="5%"><a href="index.php?a=27&id=[+id+]" title="edit"><i class="fa fa-pencil-square-o icon-color-red icon-no-border"></i></a> </td><td><b>[+pagetitle+]</b> ([+id+])</td></tr>';
}
$outerTpl = '@CODE: <tr>[+wf.wrapper+]</tr>';
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
$ListOutput = '<div class="'.$ListBoxWidth.'"><div class="widget-wrapper"><div class="widget-title sectionHeader"><i class="fa fa-pencil"></i> '.$ListBoxTitle.'</div>
<div class="widget-stage sectionBody overflowscroll"><table class="table table-hover table-condensed">'.$list.'</table><br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" /> </div></div></div>';
}
//end list
$output = $ListOutput;
$e->output($output);
return;
?>