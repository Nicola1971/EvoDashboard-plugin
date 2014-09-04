    <script src="../manager/media/script/mootools/mootools.js" type="text/javascript"></script>
    <script src="../manager/media/script/mootools/moodx.js" type="text/javascript"></script>
    <script type="text/javascript">
function doHideShow(divName){
	var objDiv = document.getElementById(divName);
	if(objDiv.style.display == ''){
		objDiv.style.display = 'none';
	}
	else{
		objDiv.style.display = '';
	}
}
</script>

<!-- welcome -->
<div class="dashboard">
 <h1>[+site_name+]</h1>
                <!--social links box-->
                [+OnManagerWelcomePrerender+]

     <!--end social links--->
<div class="dashboard-block-full">
<div class="sectionHeader"><i class="fa fa-home"></i> [+welcome_title+]<a href="javascript:void(null);" onclick="doHideShow('idShowHide1');"><i class="fa fa-bars expandbuttn"></i></a></div>
			<div id="idShowHide1" class="sectionBody">


                         <span class="wm_button white" style="border:0">[+Logo+]</span>
                       <span class="wm_button red" style="border:0">[+SecurityIcon+]</span>
                        <div class="wm_button green" style="border:0">[+WebUserIcon+]</div>
                        <div class="wm_button azure" style="border:0">[+ModulesIcon+]</div>
                        <div class="wm_button yellow" style="border:0">[+ResourcesIcon+]</div>
                        <div class="wm_button violet" style="border:0">[+BackupIcon+]</div>
                                           <br style="clear:both;height:1px;margin-top: -1px;line-height:1px;font-size:1px;" />


          </div>                 </div>
                                 [+OnManagerWelcomeHome+]
                                  <!-- custom links-->
                                [+OnManagerWelcomeRender+]
                                <!--end custom links-->


         <!--infos--->
         <div class="dashrow">
		<!-- user -->
		<div class="dashboard-block-half">

			<div class="sectionHeader"><i class="fa fa-info-circle"></i> Info<a href="javascript:void(null);" onclick="doHideShow('idShowHide2');"><i class="fa fa-bars expandbuttn"></i></a></div><div id="idShowHide2" class="sectionBody">
            <div class="dashboard-block-content">
			  <i class="fa fa-info-circle fa-5x"></i>	[+UserInfo+]
                </div>
			</div>
		</div>

		<!-- messages -->
		<div class="dashboard-block-half">


			<div class="sectionHeader"><i class="fa fa-inbox"></i> Inbox<a href="javascript:void(null);" onclick="doHideShow('idShowHide3');"><i class="fa fa-bars expandbuttn"></i></a></div><div id="idShowHide3" class="sectionBody">
             <div class="dashboard-block-content">
			  <i class="fa fa-inbox fa-5x"></i>	[+MessageInfo+]
</div>
			</div>
		</div>

       </div>
		<!-- system check -->
		<div class="dashboard-block-full" style="display:[+config_display+]">
					<div class="sectionHeader">[+configcheck_title+]</div>
			<div class="sectionBody">
				<img src="media/style/[+theme+]/images/icons/error.png" />
				[+config_check_results+]
			</div>
		</div>
      <div class="dashrow">
		<!-- modx news -->
		<div class="dashboard-block-half">

			<div class="sectionHeader"><i class="fa fa-rss"></i> [+modx_news_title+]<a href="javascript:void(null);" onclick="doHideShow('idShowHide4');"><i class="fa fa-bars expandbuttn"></i></a></div><div id="idShowHide4" class="sectionBody">
            <div class="dashboard-block-content">
			  <i class="fa fa-rss fa-5x"></i>	[+modx_news_content+]
                </div>
			</div>
		</div>

		<!-- security notices -->
		<div class="dashboard-block-half">


			<div class="sectionHeader"><i class="fa fa-exclamation-triangle"></i> [+modx_security_notices_title+]<a href="javascript:void(null);" onclick="doHideShow('idShowHide5');"><i class="fa fa-bars expandbuttn"></i></a></div><div id="idShowHide5" class="sectionBody">
             <div class="dashboard-block-content">
			  <i class="fa fa-exclamation-triangle fa-5x"></i>	[+modx_security_notices_content+]</div>
			</div>
		</div>
       </div>
         <div class="dashrow">
		<!-- recent activities -->
		<div class="dashboard-block-half">

			<div class="sectionHeader"><i class="fa fa-pencil-square-o"></i> [+activity_title+]<a href="javascript:void(null);" onclick="doHideShow('idShowHide6');"><i class="fa fa-bars expandbuttn"></i></a></div><div id="idShowHide6" class="sectionBody">

			 <i class="fa fa-pencil-square-o  fa-5x"></i>	[+RecentInfo+]
			</div>
		</div>



		<!-- online info -->
		<div class="dashboard-block-half" style="padding-left:0; padding-right:0">

			<div class="sectionHeader"><i class="fa fa-users"></i> [+onlineusers_title+]<a href="javascript:void(null);" onclick="doHideShow('idShowHide7');"><i class="fa fa-bars expandbuttn"></i></a></div><div id="idShowHide7" class="sectionBody">
			  <i class="fa fa-users  fa-5x"></i> 	[+OnlineInfo+]
			</div>
		</div>

        </div>  </div>