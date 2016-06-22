<?php
/******
WelcomeLinksBox 3.0 RC
OnManagerWelcomeHome

&WidgetTitle= Widget title:;string;Links &WidgetChunk= Widget chunk:;string;Welcome_CustomLinks &WidgetChunk= Widget chunk:;string;Welcome_CustomLinks &datarow= widget row position:;list;1,2,3,4,5,6,7,8,9,10;1 &datacol= widget col position:;list;1,2;1 &datasizex= widget x size:;list;1,2;1 &datasizey= widget y size:;list;1,2,3,4,5,6,7,8,9,10;2 

****
*/
//widget name
$WidgetID = isset($WidgetID) ? $WidgetID : 'LinksBox';
// size and position
$datarow = isset($datarow) ? $datarow : '1';
$datacol = isset($datacol) ? $datacol : '1';
$datasizex = isset($datasizex) ? $datasizex : '1';
$datasizey = isset($datasizey) ? $datasizey : '2';
//output
$WidgetOutput = isset($WidgetOutput) ? $WidgetOutput : '';
//events
$EvoEvent = isset($EvoEvent) ? $EvoEvent : 'OnManagerWelcomeHome';
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
                                    <a href="#" class="btn btn-default btn-xs panel-hide hide-full glyphicon glyphicon-minus" data-id="'.$WidgetID.'"></a>
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