//<?php
/**
 * WelcomeLinksBox
 *
 * Dashboard Actions shortcuts widget for EvoDashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    2.0 PL
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &LinksBoxEvoEvent= Links Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &LinksBoxSize= Links Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &CustomLinksTitle= Links box title:;string;Links &CustomLinksChunk= Links box chunk:;string;Welcome_CustomLinks 
 */

/******
WelcomeLinksBox 2.0 RC
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&LinksBoxEvoEvent= Links Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomeRender &LinksBoxSize= Links Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-half &CustomLinksTitle= Links box title:;string;Links &CustomLinksChunk= Links box chunk:;string;Welcome_CustomLinks
****
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/welcomelinksbox/linksbox.php');