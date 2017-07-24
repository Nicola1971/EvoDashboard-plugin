
<link rel="stylesheet" href="../assets/plugins/dashboard/dashboard/js/gridster/jquery.gridster.css" />
[+EvoDashboard_css+]
[+EvoDashboard_color_css+]

<div class="container-fluid dashboard">


  
 [+dashboard_header+]
<!-- logout reminder -->
  <div id="logout_reminder" style="display:[+show_logout_reminder+]">
      <div class="widget-wrapper alert alert-warning">
        [+logout_reminder_msg+]
      </div>
  </div>

  <!-- logout reminder -->
  <div id="multiple_sessions" style="display:[+show_multiple_sessions+]">
      <div class="widget-wrapper alert alert-warning">
        [+multiple_sessions_msg+]
      </div>
  </div>

  <!-- alert -->
  <div style="display:[+config_display+]">
    <div class="widget-wrapper alert alert-warning">
      [+config_check_results+]
    </div>
  </div>
  <!---  
      <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Restore widget
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#" class="panel-open show-full" data-id="modxwelcome_widget"> [+welcome_title+]</a></li>
    <li><a href="#" class="panel-open show-full" data-id="modxonline_widget">[+onlineusers_title+]</a></li>
    <li><a href="#" class="panel-open show-full" data-id="modxrecent_widget">[+activity_title+]</a></li>
    <li><a href="#" class="panel-open show-full" data-id="modxnews_widget">[+modx_news_title+]</a></li>
    <li><a href="#" class="panel-open show-full" data-id="modxsecurity_widget">[+modx_security_notices_title+]</a></li>
  </ul>
</div>
--->    
</div>

<!-- end  title -->
<div class="dashboard">
  <!-- GridSter widgets -->
  <div class="gridster">
    <ul>
[+OnManagerWelcomePrerender+] 
    </ul>           
  </div>
  <!-- / GridStack widgets --> 

	<!-- end  title -->
<div class="container container-body">
	<div class="row form-row widgets">
		[+widgets+]
	</div>

	<!--a class="btn btn-secondary mb-1"><i class="fa fa-cogs"></i> Добавить виджет</a-->

  <div class="container-fluid">
    <p class="text-muted pull-right">
    <a class="btn btn-sm btn-default" onclick="cleanLocalStorage('[+site_name+]-evodashboard.grid,[+site_name+]-evodashboard.states')"><i class="fa fa-refresh" aria-hidden="true"></i> [+resetgrid+]</a> [+button_pl_config+] 
    </p>
           <p class=" text-muted pull-left">
 EvoDashboard 3.3.1
</p>
  </div>
</div>

<script src='media/script/gridster/jquery.gridster.min.js'></script>
<script src='../assets/plugins/dashboard/dashboard/js/evodashboard.js'></script>
<script type="text/javascript">
  //localStorage.clear();

  var localdata_position = JSON.parse(localStorage.getItem('[(site_name:encode_js)]-evodashboard.grid'));
  var localdata_states = JSON.parse(localStorage.getItem('[(site_name:encode_js)]-evodashboard.states'));

  fnCreateGridster('[(site_name:encode_js)]-evodashboard.grid', '[(site_name:encode_js)]-evodashboard.states');
</script>

<script type="text/javascript">        
  function cleanLocalStorage(keys) {
    keys = keys.split(',');
    for (var i = 0; i < keys.length; i++) {
      delete localStorage[keys[i]];
    }
    location.reload();
  }
</script>