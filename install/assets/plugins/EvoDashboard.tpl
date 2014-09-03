//<?php
/**
 * EvoDashboard
 *
 * MODX Evolution Welcome Dashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    1.0 pl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &PluginDashboard= Default Dashboard:;list;yes,no;yes &PluginStyles= Load Plugin dashboard styles:;list;no,yes;yes &CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &SocialBox= Enable Social Box:;list;yes,no;yes &SocialBoxSize= Social Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &SocialBoxEvoEvent= Social Box placement:;list;OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeHome &SocialTitle= Social box title:;string;Social &SocialChunk= Social box chunk:;string;Welcome_SocialLinks &LinksBox= Enable Links Box:;list;yes,no;yes &LinksBoxEvoEvent= Links Box placement:;list;OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &LinksBoxSize= Links Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &CustomLinksTitle= Links box title:;string;Links &CustomLinksChunk= Links box chunk:;string;Welcome_CustomLinks &ListBox= Enable List documents:;list;yes,no;yes &ListBoxEvoEvent= List Box placement:;list;OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &ListBoxSize= List Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &ListMode= List Box mode:;list;basic,advanced;basic &ListBoxTitle=Edit List documents Title:;string;Latest Blog Entries &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;11
*/

/* EvoDashboard 1.0 pl
Instructions:
check event:
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender,OnManagerPageInit,OnManagerMainFrameHeaderHTMLBlock

&PluginDashboard= Default Dashboard:;list;yes,no;yes &PluginStyles= Load Plugin dashboard styles:;list;no,yes;yes &CustomLogo= Enable Custom Logo:;list;yes,no;yes &LogoChunk= Logo Chunk:;string;Welcome_YourLogo &SocialBox= Enable Social Box:;list;yes,no;yes &SocialBoxSize= Social Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &SocialBoxEvoEvent= Social Box placement:;list;OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeHome &SocialTitle= Social box title:;string;Social &SocialChunk= Social box chunk:;string;Welcome_SocialLinks &LinksBox= Enable Links Box:;list;yes,no;yes &LinksBoxEvoEvent= Links Box placement:;list;OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &LinksBoxSize= Links Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &CustomLinksTitle= Links box title:;string;Links &CustomLinksChunk= Links box chunk:;string;Welcome_CustomLinks &ListBox= Enable List documents:;list;yes,no;yes &ListBoxEvoEvent= List Box placement:;list;OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &ListBoxSize= List Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &ListMode= List Box mode:;list;basic,advanced;basic &ListBoxTitle=Edit List documents Title:;string;Latest Blog Entries &ParentFolder=Parent folder for List documents:;string;2 &ListItems=Max items in List:;string;20 &hideFolders= Hide Folders from List:;list;yes,no;no &dittolevel= Depht:;string;1

*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/dashboard/dashboard.php');