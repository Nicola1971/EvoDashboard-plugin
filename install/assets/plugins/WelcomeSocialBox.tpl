//<?php
/**
 * WelcomeSocialBox
 *
 * Dashboard Social Links box widget for EvoDashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    2.0 PL
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender
 * @internal    @installset base
 * @internal    @modx_category Dashboard
 * @internal    @properties  &SocialBoxEvoEvent= Social Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomePrerender &SocialBoxSize= Social Box size:;list;dashboard-block-full,dashboard-block-half;dashboard-block-full &SocialTitle= Social box title:;string;Social &SocialChunk= Social box chunk:;string;Welcome_SocialLinks
 */

/******
WelcomeSocialBox 2.0 RC
OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender

&SocialBoxEvoEvent= Social Box placement:;list;OnManagerWelcomePrerender,OnManagerWelcomeHome,OnManagerWelcomeRender;OnManagerWelcomePrerender &SocialTitle= Social box title:;string;Social &SocialChunk= Social box chunk:;string;Welcome_SocialLinks
****
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/welcomesocialbox/socialbox.php');