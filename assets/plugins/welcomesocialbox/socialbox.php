<?php
/******
WelcomeSocialBox 3.0 RC
****
*/
//widget name
$WidgetID = isset($WidgetID) ? $WidgetID : 'SocialBox';
// size and position
$datarow = isset($datarow) ? $datarow : '1';
$datacol = isset($datacol) ? $datacol : '1';
$datasizex = isset($datasizex) ? $datasizex : '2';
$datasizey = isset($datasizey) ? $datasizey : '2';
//output
$WidgetOutput = isset($WidgetOutput) ? $WidgetOutput : '';
//events
$EvoEvent = isset($EvoEvent) ? $EvoEvent : 'OnManagerWelcomePrerender';
$output = "";
$e = &$modx->Event;

/*Widget Box */
if($e->name == ''.$EvoEvent.'') {
$WidgetOutput = '
<li id="'.$WidgetID.'" data-row="'.$datarow.'" data-col="'.$datacol.'" data-sizex="'.$datasizex.'" data-sizey="'.$datasizey.'">
                    <div class="panel panel-default widget-wrapper">
                      <div class="panel-headingx widget-title sectionHeader clearfix">
                          <span class="pull-left"><i class="fa fa-pencil"></i> '.$WidgetTitle.'</span>
                            <div class="widget-controls pull-right">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-xs panel-hide hide-full fa fa-minus" data-id="'.$WidgetID.'"></a>
                                </div>     
                            </div>

                      </div>
                      <div class="panel-body widget-stage sectionBody">
                       '.$modx->getChunk(''.$WidgetChunk.'').' 
                      </div>
                    </div>           
                </li>

';
}
//end widget
$output = $WidgetOutput;
$e->output($output);
return;
?>