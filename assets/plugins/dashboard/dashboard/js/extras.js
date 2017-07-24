	/* register the close button */
	$(document).on("click", ".panel-close", function(e) {
		e.preventDefault();    
		var panel = $(this).attr("data-id");
		bootbox.confirm({
    title: "Destroy planet?",
    message: "Do you want to activate the Deathstar now? This cannot be undone.",
    buttons: {
        cancel: {
            label: '<i class="fa fa-times"></i> Cancel'
        },
        confirm: {
            label: '<i class="fa fa-check"></i> Confirm'
        }
    },
    callback: function (result) {
				$(".gridster > ul").data('gridster').remove_widget($('#'+panel));
				_state_update(panel, 'closed');
		 }
});
	});

	/* register the restore button */
	$(document).on("click", ".panel-open", function(e) {
		e.preventDefault();    
		var panel = $(this).attr("data-id");
		//	$(".gridster > ul").data('gridster').add_widget($('#'+panel), 1, 2, 2, 2);
		_state_update(panel, 'true');
        location.reload();
	});
	/* register the add note button */
	$(document).on("click", ".panel-note", function(e) {
		e.preventDefault();    
		var panel = $(this).attr("data-id");
		$(".gridster > ul").data('gridster').add_widget("<li id='modxnote_widget' data-row='1' data-col='1' data-sizex='2' data-sizey='4'><div class='panel panel-default widget-wrapper'><div class='panel-headingx widget-title sectionHeader clearfix'><span class='panel-handel pull-left'><i class='fa fa-sticky-note-o'></i> [+welcome_title+]</span><div class='widget-controls pull-right'><div class='btn-group'>           <a href='#' class='btn btn-default btn-xs panel-hide hide-full fa fa-minus' data-id='modxnote_widget'></a>       <a href='#' class='btn btn-default btn-xs panel-close hide-full fa fa-trash' data-id='modxnote_widget'></a>  </div> </div></div></li>", 2, 2, 1, 1);
_state_update(panel, true);
	});