<?php
/******
WelcomeSocialBox 2.0 RC
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&SocialBoxEvoEvent= Social Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomePrerender &SocialTitle= Social box title:;string;Social &SocialChunk= Social box chunk:;string;Welcome_SocialLinks
****
*/
//blocks
$SocialOutput = isset($SocialOutput) ? $SocialOutput : '';
//events
$SocialBoxEvoEvent = isset($SocialBoxEvoEvent) ? $SocialBoxEvoEvent : 'OnManagerWelcomeRender';
// box size
$SocialBoxSize = isset($SocialBoxSize) ? $SocialBoxSize : 'dashboard-block-full';
//widget grid size
if ($SocialBoxSize == 'dashboard-block-full') {
$SocialBoxWidth = 'col-sm-12';
} else {
$SocialBoxWidth = 'col-sm-6';
};
$output = "";
$e = &$modx->Event;

/*Social Box */
if($e->name == ''.$SocialBoxEvoEvent.'') {
$SocialOutput = '<div class="'.$SocialBoxWidth.'"><div class="widget-wrapper"> <div class="widget-title sectionHeader"><i class="fa fa-globe"></i> '.$SocialTitle.'</div>
<div class="widget-stage sectionBody">'.$modx->getChunk(''.$SocialChunk.'').' <br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" /> </div></div></div>';
}
//end social
$output = $SocialOutput;
$e->output($output);
return;
?>