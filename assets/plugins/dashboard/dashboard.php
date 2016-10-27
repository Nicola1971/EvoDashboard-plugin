<?php
/* EvoDashboard 3.1.2 pl
Instructions:
System event:
OnManagerWelcomeHome,OnManagerPageInit
Configuration:
&ShowHeader=Show Header:;list;show,hide;hide;;Show deprecated Dashboard header with logo and site name &ShowLogo=Show logo image:;list;show,hide;show &LogoPath=Logo Path:;string;../assets/images/logo.png;;set here your custom logo path &welcome_showhide=Show Welcome Widget:;list;show,hide,ManagersOnly;show &userinfo_showhide=Show User Info inside Welcome widget:;list;show,hide,ManagersOnly;show &modxwelcome_datarow=welcome widget row position:;string;1;;1-10 &modxwelcome_datacol=welcome widget col position:;string;1;;1-4 &modxwelcome_datasizex=welcome widget x size:;string;2;;1-4 &modxwelcome_datasizey=welcome widget y size:;string;6;;1-10 &onlineinfo_showhide=Show Online Info Widget:;list;show,hide,ManagersOnly;show &onlineinfo_datarow=onlineinfo widget row position:;string;1;;1-10 &onlineinfo_datacol=onlineinfo widget col position:;string;3;;1-4 &onlineinfo_datasizex=onlineinfo widget x size:;string;2;;1-4 &onlineinfo_datasizey=onlineinfo widget y size:;string;6;;1-4 &recentinfo_showhide=Show Recent Info Widget:;list;show,hide,ManagersOnly;show &modxrecent_datarow=recent resource widget row position:;string;3;;1-10 &modxrecent_datacol=recent resource widget col position:;string;1;;1-4 &modxrecent_datasizex=recent resource widget x size:;string;4;;1-4 &modxrecent_datasizey=recent resource widget y size:;string;7;;1-10 &modxnews_showhide=Show ModxNews Widget:;list;show,hide,ManagersOnly;show &modxnews_datarow=modx news widget row position:;string;4;;1-10 &modxnews_datacol=modx news widget col position:;string;1;;1-4 &modxnews_datasizex=modx news widget x size:;string;2;;1-4 &modxnews_datasizey=modx news widget y size:;string;5;;1-10 &modxsecuritynews_showhide=Show SecurityNews Widget:;list;show,hide,ManagersOnly;show &security_datarow=modx security widget row position:;string;4;;1-10 &security_datacol=modx security widget col position:;string;2;;1-4 &security_datasizex=modx security widget x size:;string;2;;1-4 &security_datasizey=modx security widget y size:;string;5;;1-10 &use_theme_css=Use theme styles:;list;yes,no;no;;Use dashboard.css of current manager theme. &use_color_css=Use color css:;list;yes,no;yes;;Load extra color css for more icons styles and colors, used with Social Widget and Custom Links Widget.
*/

/* home switch home */
$WelcomeUrl = isset($WelcomeUrl) ? $WelcomeUrl : '../assets/plugins/dashboard/welcome.tpl';

// get manager role
$role = $_SESSION['mgrRole'];

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
if ($use_theme_css == 'yes') {
$Dashboard_css = '<link rel="stylesheet" href="../assets/plugins/dashboard/dashboard/css/dashboard.css">';
} else {
$Dashboard_css = '<link rel="stylesheet" href="media/style/'.$theme.'/dashboard/css/dashboard.css">';
}    
$modx->setPlaceholder('EvoDashboard_css', $Dashboard_css);
// color css option
if ($use_color_css == 'yes') {
$Dashboard_color_css = '<link rel="stylesheet" href="../assets/plugins/dashboard/dashboard/css/colors.css" >';
} else {
$Dashboard_color_css = '';
} 
$modx->setPlaceholder('EvoDashboard_color_css', $Dashboard_color_css);
 
//get modx placeholders
$welcome_title = $modx->getPlaceholder('welcome_title');

$SecurityIcon = $modx->getPlaceholder('SecurityIcon');
$WebUserIcon = $modx->getPlaceholder('WebUserIcon');
$ModulesIcon = $modx->getPlaceholder('ModulesIcon');
$ResourcesIcon = $modx->getPlaceholder('ResourcesIcon');
$BackupIcon = $modx->getPlaceholder('BackupIcon');
$HelpIcon = $modx->getPlaceholder('HelpIcon');

$UserInfo = $modx->getPlaceholder('UserInfo');
    
/*show/hide user info inside Welcome widgets*/

if(($role!=1) AND ($userinfo_showhide == 'ManagersOnly')) {
$userinfo_display = '';
}
else 
if ($userinfo_showhide == 'hide') {
$userinfo_display = '';
} else {
$userinfo_display = '<div class="userprofiletable">
              '.$UserInfo.'
            </div>';
}
$modx->setPlaceholder('userinfo_display', $userinfo_display);

/*show/hide MODX welcome widgets*/
if(($role!=1) AND ($welcome_showhide == 'ManagersOnly')) {
    $welcome_display = '';
}
else 
if ($welcome_showhide == 'hide') {
$welcome_display = '';
} 
else{    
$welcome_display = '<!---Welcome Logo and buttons---> 
      <!--- panel -->
      <li id="modxwelcome_widget" data-row="'.$modxwelcome_datarow.'" data-col="'.$modxwelcome_datacol.'" data-sizex="'.$modxwelcome_datasizex.'" data-sizey="'.$modxwelcome_datasizey.'">
        <div class="panel panel-default widget-wrapper">
          <div class="panel-headingx widget-title sectionHeader clearfix">
            <span class="panel-handel pull-left"><i class="fa fa-home"></i> '.$welcome_title.'</span>
            <div class="widget-controls pull-right">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-xs panel-hide hide-full fa fa-minus" data-id="modxwelcome_widget"></a>
              </div>    
            </div>
          </div>
          <div class="panel-body widget-stage sectionBody">
            <div class="wm_buttons">
              '.$SecurityIcon.'
              '.$WebUserIcon.'
              '.$ModulesIcon.'
              '.$ResourcesIcon.'
              '.$BackupIcon.'
              '.$HelpIcon.'
            </div>
              '.$userinfo_display .'
          </div>
        </div>      
      </li>
      <!--- /panel --->';
}

$modx->setPlaceholder('welcome_display', $welcome_display);


/*show/hide MODX online users widgets*/
//get modx placeholders
$onlineusers_title = $modx->getPlaceholder('onlineusers_title');
$OnlineInfo = $modx->getPlaceholder('OnlineInfo');

if(($role!=1) AND ($onlineinfo_showhide == 'ManagersOnly')) {
$onlineinfo_display = '';
}
else 
if ($onlineinfo_showhide == 'hide') {
$onlineinfo_display = '';
} 
else{  
$onlineinfo_display = '<!---User Info--->
      <!--- panel --->
      <li id="modxonline_widget" data-row="'.$onlineinfo_datarow.'" data-col="'.$onlineinfo_datacol.'" data-sizex="'.$onlineinfo_datasizex.'" data-sizey="'.$onlineinfo_datasizey.'">
        <div class="panel panel-default widget-wrapper">
          <div class="panel-headingx widget-title sectionHeader clearfix">
            <span class="panel-handel pull-left"><i class="fa fa-user"></i> '.$onlineusers_title.'</span>
            <div class="widget-controls pull-right">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-xs panel-hide hide-full fa fa-minus" data-id="modxonline_widget"></a>
              </div>    
            </div>
          </div>
          <div class="panel-body widget-stage sectionBody">
            <div class="userstable">
              '.$OnlineInfo.'
            </div>
          </div>
        </div>      
      </li>
      <!--- /panel --->';
}
$modx->setPlaceholder('onlineinfo_display', $onlineinfo_display);


/*show/hide Recent doc MODX widgets*/
//get modx placeholders
$activity_title = $modx->getPlaceholder('activity_title');
$RecentInfo = $modx->getPlaceholder('RecentInfo');
if(($role!=1) AND ($recentinfo_showhide == 'ManagersOnly')) {
    $recentinfo_display = '';
}
else 
if ($recentinfo_showhide == 'hide') {
$recentinfo_display = '';
} else {
$recentinfo_display = ' <!---Recent Resources--->
      <!--- panel --->
      <li id="modxrecent_widget" data-row="'.$modxrecent_datarow.'" data-col="'.$modxrecent_datacol.'" data-sizex="'.$modxrecent_datasizex.'" data-sizey="'.$modxrecent_datasizey.'">
        <div class="panel panel-default widget-wrapper">
          <div class="panel-headingx widget-title sectionHeader clearfix">
            <span class="panel-handel pull-left"><i class="fa fa-pencil-square-o"></i> '.$activity_title.'</span>
            <div class="widget-controls pull-right">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-xs panel-hide hide-full fa fa-minus" data-id="modxrecent_widget"></a>
              </div>    
            </div>
          </div>
          <div class="panel-body widget-stage sectionBody">
            '.$RecentInfo.'
          </div>
        </div>      
      </li>
      <!--- /panel --->     ';
}

$modx->setPlaceholder('recentinfo_display', $recentinfo_display);

/*show/hide MODX News widgets*/
//get modx placeholders
$modx_news_title = $modx->getPlaceholder('modx_news_title');
$modx_news_content = $modx->getPlaceholder('modx_news_content');
$RecentInfo = $modx->getPlaceholder('RecentInfo');
if(($role!=1) AND ($modxnews_showhide == 'ManagersOnly')) {
    $modxnews_display = '';
}
else 
if ($modxnews_showhide == 'hide') {
$modxnews_display = '';
} else {
$modxnews_display = '<!---MODX News--->
      <!--- panel --->
      <li id="modxnews_widget" data-row="'.$modxnews_datarow.'" data-col="'.$modxnews_datacol.'" data-sizex="'.$modxnews_datasizex.'" data-sizey="'.$modxnews_datasizey.'">
        <div class="panel panel-default widget-wrapper">
          <div class="panel-headingx widget-title sectionHeader clearfix">
            <span class="panel-handel pull-left"><i class="fa fa-rss"></i> '.$modx_news_title.'</span>
            <div class="widget-controls pull-right">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-xs panel-hide hide-full fa fa-minus" data-id="modxnews_widget"></a>
              </div>    
            </div>
          </div>
          <div class="panel-body widget-stage sectionBody">
            '.$modx_news_content.'
          </div>
        </div>      
      </li>
      <!--- /panel --->';
}

$modx->setPlaceholder('modxnews_display', $modxnews_display);

/*show/hide MODX security widgets*/
//get modx placeholders
$modx_security_notices_title = $modx->getPlaceholder('modx_security_notices_title');
$modx_security_notices_content = $modx->getPlaceholder('modx_security_notices_content');
if(($role!=1) AND ($modxsecuritynews_showhide == 'ManagersOnly')) {
    $modxsecuritynews_display = '';
}
else 
if ($modxsecuritynews_showhide == 'hide') {
$modxsecuritynews_display = '';
} else {
$modxsecuritynews_display = '<!---Security News--->
      <!--- panel --->
      <li id="modxsecurity_widget" data-row="'.$security_datarow.'" data-col="'.$security_datacol.'" data-sizex="'.$security_datasizex.'" data-sizey="'.$security_datasizey.'">
        <div class="panel panel-default widget-wrapper">
          <div class="panel-headingx widget-title sectionHeader clearfix">
            <span class="panel-handel pull-left"><i class="fa fa-exclamation-triangle"></i> '.$modx_security_notices_title.'</span>
            <div class="widget-controls pull-right">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-xs panel-hide hide-full fa fa-minus" data-id="modxsecurity_widget"></a>
              </div>    
            </div>
          </div>
          <div class="panel-body widget-stage sectionBody">
            '.$modx_security_notices_content.'
          </div>
        </div>      
      </li>
      <!--- /panel --->
';
}

$modx->setPlaceholder('modxsecuritynews_display', $modxsecuritynews_display);

/*Dashboard Header */

//logo
if ($ShowLogo == 'show') {
$logoimage = '<div class="wm_logo"><img src="'.$LogoPath.'" alt="[+logo_slogan+]" /></div>';
}
else {
$logoimage = '';
}
if ($ShowHeader == 'show') {
$dashboard_header = '   <!-- title-->
  <div class="dashboard_header">
    <div class="row">
      <div class="col-sm-12">
      '.$logoimage.'
        <h1>[+site_name+]</h1>
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