//<?php
/**
 * WelcomeSocialBox
 *
 * Dashboard Social Links box widget for EvoDashboard
 *
 * @author    Nicola Lambathakis
 * @category    plugin
 * @version    3.3.1 PL
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerWelcomePrerender
 * @internal    @installset base
 * @internal    @disabled 1
 * @internal    @modx_category Dashboard
 * @internal    @properties  &WidgetTitle= Widget title:;string;Social &WidgetChunk= Widget chunk:;string;Welcome_SocialLinks &datarow= widget row position:;list;1,2,3,4,5,6,7,8,9,10;1 &datacol= widget col position:;list;1,2,3,4;1 &datasizex= widget x size:;list;1,2,3,4;2 &datasizey= widget y size:;list;1,2,3,4,5,6,7,8,9,10;2
 */

/******
WelcomeSocialBox 3.3.1 RC
OnManagerWelcomePrerender

&WidgetTitle= Widget title:;string;Social &WidgetChunk= Widget chunk:;string;Welcome_SocialLinks &datarow= widget row position:;list;1,2,3,4,5,6,7,8,9,10;1 &datacol= widget col position:;list;1,2,3,4;1 &datasizex= widget x size:;list;1,2,3,4;2 &datasizey= widget y size:;list;1,2,3,4,5,6,7,8,9,10;2
****
*/
// Run the main code
include($modx->config['base_path'].'assets/plugins/welcomesocialbox/socialbox.php');