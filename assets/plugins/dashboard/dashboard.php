<?php
/* EvoDashboard 3.3.1 pl
Instructions:
System event:
OnManagerWelcomeHome,OnManagerPageInit
Configuration:
&ShowHeader=Show Header:;menu;show,hide;hide;;Show deprecated Dashboard header with logo and site name &ShowLogo=Show logo image:;menu;show,hide;show;;Show logo image inside header &LogoPath=Logo Path:;string;../assets/images/modx-logo.png;;set here your custom logo path &ShowTitle=Show Site Name:;menu;show,hide;show;;Show header site name title &welcome_showhide=Show Welcome Widget:;menu;show,hide,AdminOnly;show  &welcome_sizex=Welcome x size:;list;12,11,9,8,6,4,3;6 &welcome_menuindex=Welcome sort order:;text;1  &onlineinfo_showhide=Show Online Info widget:;menu;show,hide,AdminOnly;show &onlineinfo_sizex=Online Info x size:;list;12,11,9,8,6,4,3;6 &onlineinfo_menuindex=Online Info sort order:;text;2 &recentinfo_showhide=Show Recent resource Widget:;menu;show,hide,AdminOnly;show &recentinfo_sizex=Recent resource x size:;list;12,11,9,8,6,4,3;12 &recentinfo_menuindex=Recent resource sort order:;text;3 &news_showhide=Show News Widget:;menu;show,hide,AdminOnly;show &news_sizex=News x size:;list;12,11,9,8,6,4,3;6 &news_menuindex=News sort order:;text;4 &security_showhide=Show SecurityNews Widget:;menu;show,hide,AdminOnly;show &security_sizex=SecurityNews x size:;list;12,11,9,8,6,4,3;6 &security_menuindex=SecurityNews order:;text;5
*/

/* home switch home */
$WelcomeUrl = isset($WelcomeUrl) ? $WelcomeUrl : '../assets/plugins/dashboard/welcome.tpl';

// get manager role
$role = $_SESSION['mgrRole'];
// get language
global $_lang;

// get plugin id
$result = $modx->db->select('id', $this->getFullTableName("site_plugins"), "name='{$modx->event->activePlugin}' AND disabled=0");
$pluginid = $modx->db->getValue($result);
if($modx->hasPermission('edit_plugin')) {
$button_pl_config = '<a title="' . $_lang["settings_config"] . '" href="index.php?id='.$pluginid.'&a=102" class="btn btn-sm btn-default" ><i class="fa fa-cog"></i> ' . $_lang["settings_config"] . '</a>';
}
$modx->setPlaceholder('button_pl_config', $button_pl_config);

//blocks
$LogoOutput = isset($LogoOutput) ? $LogoOutput : '';

// Run Events
$output = "";
/* home switch home */
$e = &$modx->Event;
		if($e->name == 'OnManagerPageInit') {
		$modx->config['manager_welcome_tpl'] = '@FILE: '.$WelcomeUrl.'';
    }
// dashboard css option
            /*show/hide MODX widgets*/
$theme = $modx->getPlaceholder('theme');
$Dashboard_css = '<link rel="stylesheet" href="../assets/plugins/dashboard/dashboard/css/dashboard.css">';
$modx->setPlaceholder('EvoDashboard_css', $Dashboard_css);
// color css option
$Dashboard_color_css = '<link rel="stylesheet" href="../assets/plugins/dashboard/dashboard/css/colors.css" >';
$modx->setPlaceholder('EvoDashboard_color_css', $Dashboard_color_css);
 
if($e->name == 'OnManagerWelcomeHome') {
// get manager role
$role = $_SESSION['mgrRole']; 		
//welcome
$welcome_showhide = isset($welcome_showhide) ? $welcome_showhide: 'hide';
if(($role!=1) AND ($welcome_showhide == 'AdminOnly') OR ($welcome_showhide == 'hide'))  {
$widgets['welcome']['hide']='1';
}

//onlineinfo
if(($role!=1) AND ($onlineinfo_showhide == 'AdminOnly') OR ($onlineinfo_showhide == 'hide'))  {
$widgets['onlineinfo']['hide']='1';
}

//recentinfo
if(($role!=1) AND ($recentinfo_showhide == 'AdminOnly') OR ($recentinfo_showhide == 'hide'))  {
$widgets['recentinfo']['hide']='1';
}

//news
if(($role!=1) AND ($news_showhide == 'AdminOnly') OR ($news_showhide == 'hide'))  {
$widgets['news']['hide']='1';
}
 
//security
if(($role!=1) AND ($security_showhide == 'AdminOnly') OR ($security_showhide == 'hide'))  {
$widgets['security']['hide']='1';
}

//cols
$widgets['welcome']['cols']='col-sm-'.$welcome_sizex.''; 
$widgets['onlineinfo']['cols']='col-sm-'.$onlineinfo_sizex.''; 
$widgets['recentinfo']['cols']='col-sm-'.$recentinfo_sizex.''; 
$widgets['news']['cols']='col-sm-'.$news_sizex.''; 
$widgets['security']['cols']='col-sm-'.$security_sizex.''; 
//menuindex
$widgets['welcome']['menuindex']=$welcome_menuindex; 
$widgets['onlineinfo']['menuindex']=$onlineinfo_menuindex; 
$widgets['recentinfo']['menuindex']=$recentinfo_menuindex; 
$widgets['news']['menuindex']=$news_menuindex; 
$widgets['security']['menuindex']=$security_menuindex; 
$e->output(serialize($widgets));

}

/*Dashboard Header */
$site_name = $modx->getPlaceholder('site_name');
//logo
if ($ShowLogo == 'show') {
$logoimage = '<div class="wm_logo"><img src="'.$LogoPath.'" alt="[+logo_slogan+]" /></div>';
}
else {
$logoimage = '';
}
if ($ShowTitle == 'show') {
$HeaderTitle = '<h1>'.$site_name.'</h1>';
}
else {
$HeaderTitle = '';
}
if ($ShowHeader == 'show') {
$dashboard_header = '   <!-- title-->
  <div class="dashboard_header">
    <div class="row">
      <div class="col-sm-12">
      '.$logoimage.'
     '.$HeaderTitle.'   
      </div>
    </div>
  </div>';
}
else {
$dashboard_header = '';    
}

$modx->setPlaceholder('dashboard_header', $dashboard_header);

//end logo

$output = $output;
$e->output($output);
return;
?>