<?php
/******
WelcomeDocumentsListBox 3.0 RC
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&WidgetTitle= Widget title:;string;List Documents &ListMode= List Box mode:;list;basic,advanced;advanced &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1 &datarow= widget row position:;list;1,2,3,4,5,6,7,8,9,10;1 &datacol= widget col position:;list;1,2;1 &datasizex= widget x size:;list;1,2;1 &datasizey= widget y size:;list;1,2,3,4,5,6,7,8,9,10;2
****
*/
//widget name
$WidgetID = isset($WidgetID) ? $WidgetID : 'DocListBox';
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

/*List documents box*/
if($e->name == ''.$EvoEvent.'') {
$parentId = $ParentFolder;
$dittototal = $ListItems;
	if ($ListMode == advanced) {
$rowTpl = '@CODE: <tr>
<td width="5%"><a href="[(site_url)]index.php?id=[+id+]" target="_blank" title="preview"><i class="fa fa-eye icon-color-light-green icon-no-border"></i></a></td>
<td width="5%"><a href="index.php?a=27&id=[+id+]" title="edit"><i class="fa fa-pencil-square-o icon-color-red icon-no-border"></i></a></td>
<td width="5%"><a href="index.php?a=51&id=[+id+]" title="move"><i class="fa fa-arrows icon-color-blue icon-no-border"></i></a></td>
<td width="5%"><a href="index.php?a=62&id=[+id+]" title="unpublish"><i class="fa fa-square-o icon-color-grey icon-no-border"></i></a></td>
<td><a href="index.php?a=6&id=[+id+]" title="delete"><i class="fa fa-trash-o icon-color-red icon-no-border"></i></a></td>
<td> <b>[+pagetitle+]</b> ([+id+])</td>
</tr>';
}
	if ($ListMode == basic) {
$rowTpl = '@CODE: <tr>
<td width="5%"><a href="[(site_url)]index.php?id=[+id+]" target="_blank" title="preview"><i class="fa fa-eye green2"></i></a></td>
<td width="5%"><a href="index.php?a=27&id=[+id+]" title="edit"><i class="fa fa-pencil-square-o icon-color-red icon-no-border"></i></a> </td>
<td><b>[+pagetitle+]</b> ([+id+])</td>
</tr>';
}
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

$WidgetOutput = '
 <!--- doclist widget--->
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
     <table class="table table-hover table-condensed">'.$list.'</table>
                      </div>
                    </div>   
         
                </li>
<!--- /doclist widget---> 

';
}
//end widget
$output = $WidgetOutput;
$e->output($output);
return;
?>