<link rel="stylesheet" type="text/css" href="media/style/common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="media/script/gridster/jquery.gridster.css" />
[+EvoDashboard_css+]
[+EvoDashboard_color_css+]
<link rel="stylesheet" href="media/style/common/font-awesome/css/font-awesome.min.css" />
<div class="container-fluid dashboard">


  [+OnManagerWelcomePrerender+]
 [+dashboard_header+]
  <!-- alert -->
  <div style="display:[+config_display+]">
    <div class="widget-wrapper alert alert-warning">
      [+config_check_results+]
    </div>
  </div>
</div>

<!-- end  title -->
<div class="dashboard">
  <!-- GridSter widgets -->
  <div class="gridster">
    <ul>

[+OnManagerWelcomeHome+]      
[+welcome_display+]      
[+onlineinfo_display+]
[+recentinfo_display+]
[+modxnews_display+]
[+modxsecuritynews_display+]
    </ul>           
  </div>
  <!-- / GridStack widgets -->                    
  [+OnManagerWelcomeRender+] 
  <div class="container-fluid">
    <p class="text-muted pull-right">
    [+button_pl_config+] <a class="btn btn-sm btn-default" onclick="cleanLocalStorage('[(site_name:encode_js)]-evodashboard.grid,[(site_name:encode_js)]-evodashboard.states')"><i class="fa fa-refresh" aria-hidden="true"></i> [+resetgrid+]</a>
    </p>
           <p class=" text-muted pull-left">
 EvoDashboard 3.1
</p>
  </div>
</div>

<script src="media/script/jquery/jquery.min.js"></script>
<script src='media/script/gridster/jquery.gridster.min.js'></script>
<script src='../assets/plugins/dashboard/dashboard/js/evodashboard.js'></script>
<script src="media/script/bootstrap/js/bootstrap.min.js"></script>
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