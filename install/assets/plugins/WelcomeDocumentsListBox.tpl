//<?php
/**
 * WelcomeDocumentsListBox
 *
 * Dashboard List Documents box widget for EvoDashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    3.0 PL
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomeHome
 * @internal    @installset base
 * @internal    @disabled 1
 * @internal    @modx_category Dashboard
 * @internal    @properties  &WidgetTitle= Widget title:;string;List Documents &ListMode= List Box mode:;list;basic,advanced;advanced &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1 &datarow= widget row position:;list;1,2,3,4,5,6,7,8,9,10;2 &datacol= widget col position:;list;1,2,3,4;1 &datasizex= widget x size:;list;1,2,3,4;2 &datasizey= widget y size:;list;1,2,3,4,5,6,7,8,9,10;4
 */

/******
WelcomeDocumentsListBox 3.0 PL
OnManagerWelcomeHome

&WidgetTitle= Widget title:;string;List Documents &ListMode= List Box mode:;list;basic,advanced;advanced &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1 &datarow= widget row position:;list;1,2,3,4,5,6,7,8,9,10;2 &datacol= widget col position:;list;1,2,3,4;1 &datasizex= widget x size:;list;1,2,3,4;2 &datasizey= widget y size:;list;1,2,3,4,5,6,7,8,9,10;4
****
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/welcomedocumentslistbox/documentslistbox.php');