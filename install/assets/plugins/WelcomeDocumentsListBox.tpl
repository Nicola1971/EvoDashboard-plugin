//<?php
/**
 * WelcomeDocumentsListBox
 *
 * Dashboard List Documents box widget for EvoDashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    2.0 PL
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &ListBoxEvoEvent= List Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeHome &ListBoxSize= List Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &ListMode= List Box mode:;list;basic,advanced;advanced &ListBoxTitle=Edit List documents Title:;string;List Documents Widget &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1 
 */

/******
WelcomeDocumentsListBox 2.0 PL
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&ListBoxEvoEvent= List Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeHome &ListBoxSize= List Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &ListMode= List Box mode:;list;basic,advanced;advanced &ListBoxTitle=Edit List documents Title:;string;List Box Widget &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1
****
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/welcomedocumentslistbox/documentslistbox.php');