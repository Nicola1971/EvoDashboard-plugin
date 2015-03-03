<?php
/******
WelcomeLinksBox 2.0 RC
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&LinksBoxEvoEvent= Links Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &LinksBoxSize= Links Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &CustomLinksTitle= Links box title:;string;Links &CustomLinksChunk= Links box chunk:;string;Welcome_CustomLinks
****
*/
//blocks
$LinksOutput = isset($LinksOutput) ? $LinksOutput : '';
//events
$LinksBoxEvoEvent = isset($LinksBoxEvoEvent) ? $LinksBoxEvoEvent : 'OnManagerWelcomeRender';
// box size
$LinksBoxSize = isset($LinksBoxSize) ? $LinksBoxSize : 'dashboard-block-full';
//widget grid size
if ($LinksBoxSize == 'dashboard-block-full') {
$LinksBoxWidth = 'col-sm-12';
} else {
$LinksBoxWidth = 'col-sm-6';
};
$output = "";
$e = &$modx->Event;

/*Custom links box*/
if($e->name == ''.$LinksBoxEvoEvent.'') {
$LinksOutput = '<div class="'.$LinksBoxWidth.'"> <div class="widget-wrapper"> <div class="widget-title sectionHeader"><i class="fa fa-tachometer"></i> '.$CustomLinksTitle.'</div>
<div class="widget-stage sectionBody">'.$modx->getChunk(''.$CustomLinksChunk.'').' <br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" /> </div></div></div>';
}
//end links
$output = $LinksOutput;
$e->output($output);
return;
?>