  <link rel="stylesheet" type="text/css" href="../assets/plugins/dashboard/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/plugins/dashboard/bootstrap/css/bootstrap-theme.css" />
    <script type="text/javascript" src="../assets/plugins/dashboard/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/plugins/dashboard/bootstrap/js/bootstrap.min.js"></script>
<div class="container-fluid dashboard">
      <!-- row -->
    <div class="row">
     <div class="container col-sm-12">
    <h1>[+site_name+]</h1>
     </div>
     <!-- alert -->
     <div class="container col-sm-12" style="display:[+config_display+]">
           <div class="widget-wrapper alert alert-warning">
             [+config_check_results+]
          </div>
    </div>

                [+OnManagerWelcomePrerender+]

      <!--widget -->
      <div class="[+LogoBoxWidth+]" style="display:[+logobox_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader">
            <i class="fa fa-home"></i> [+welcome_title+]
          </div>
          <div class="widget-stage sectionBody">
             <span class="wm_button white" style="border:0">[+Logo+]</span>
                        <span class="btn btn-danger">[+SecurityIcon+]</span>
                        <span class="btn btn-primary">[+WebUserIcon+]</span>
                        <span class="btn btn-success">[+ModulesIcon+]</span>
                        <span class="btn btn-info">[+ResourcesIcon+]</span>
                        <span class="btn btn-warning">[+BackupIcon+]</span>
          </div>
         </div>
      </div>
 </div>

                    <!-- row -->
   <div class="row">
     [+OnManagerWelcomeHome+]
   </div>

                   <!-- end row -->

<div class="row">

      <div class="[+UserInfoWidth+]" style="display:[+userinfo_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader">
           <i class="fa fa-info-circle"></i> Info
          </div>
          <div class="widget-stage sectionBody">
           <i class="fa fa-info-circle fa-5x  icon-color-verylight"></i>	   [+UserInfo+]
          </div>
         </div>
      </div>

     <div class="[+MessageInfoWidth+]" style="display:[+messageinfo_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader">
           <i class="fa fa-inbox"></i> Inbox
          </div>
          <div class="widget-stage sectionBody">
           <i class="fa fa-inbox fa-5x icon-color-verylight"></i>	[+MessageInfo+]
          </div>
        </div>
      </div>

 </div>


<div class="row">

      <div class="[+ModxNewsWidth+]" style="display:[+modxnews_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader">
            <i class="fa fa-rss"></i> [+modx_news_title+]
          </div>
          <div class="widget-stage sectionBody">
           <i class="fa fa-rss fa-5x icon-color-verylight"></i> [+modx_news_content+]
          </div>
        </div>
      </div>
      <div class="[+ModxSecurityNewsWidth+]" style="display:[+modxsecuritynews_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader">
            <i class="fa fa-exclamation-triangle"></i> [+modx_security_notices_title+]
          </div>
          <div class="widget-stage sectionBody">
           <i class="fa fa-exclamation-triangle fa-5x icon-color-verylight"></i> [+modx_security_notices_content+]
          </div>
        </div>
     </div>

</div>

<div class="row">

      <div class="[+RecentInfoWidth+]" style="display:[+recentinfo_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader">
           <i class="fa fa-pencil-square-o"></i> [+activity_title+]
          </div>
          <div class="widget-stage sectionBody">
           [+RecentInfo+]
          </div>
        </div>
      </div>
      <div class="[+OnlineInfoWidth+]" style="display:[+onlineinfo_display+]">
        <div class="widget-wrapper">
          <div class="widget-title sectionHeader table-striped">
          [+onlineusers_title+]
          </div>
          <div class="widget-stage sectionBody">
           	[+OnlineInfo+]
          </div>
        </div>
      </div>

</div>
                    <!-- row -->
   <div class="row">
[+OnManagerWelcomeRender+]
   </div>

                   <!-- end row -->
    <hr>



  </div>