// credits: https://github.com/mirceamarcu/gridster-responsive


function fnCreateGridster(page, states){
	/* load saved position and sizes */
	if(localdata_position){
		$.each(localdata_position, function(i,value){
				$('#'+value.id).attr({"data-col":value.col, "data-row":value.row, "data-sizex":value.size_x, "data-sizey":value.size_y});
		});
	}
	

	/* force 1 column on mobile screen sizes */
	if ($( window ).width() <= 480 || $( window ).width() == 640 ){
		var cols=1;
		var offset=60;
	} else {
		var cols=4
		var offset=25;
	}


	/* get the default size for the ratio */
	var base_size=($( window ).width()/cols)-offset;


	/* start gridster */
	var gridster= $(".gridster > ul").gridster({
        extra_cols: 1,
        autogrow_cols: true,
		min_cols:4,
		max_cols:cols,
		widget_margins: [5, 5],
		widget_base_dimensions: [base_size, 50],
		resize: {
			enabled: true,
			stop: function(event, ui, widget) {
				var positions = JSON.stringify(this.serialize());
				localStorage.setItem(page, positions);
			}
         },
		serialize_params: function($w, wgd) 
		{
			return { id: $($w).attr('id'),col: wgd.col, row: wgd.row,size_x: wgd.size_x,size_y: wgd.size_y };
		},
		draggable: 
		{
			handle: '.panel-headingx, .panel-handel',
			stop: function(event, ui) {
				var _positions=this.serialize();
				$.each(_positions, function(i,value){
					_state=$('#'+ value.id).attr('data-state');
					if(_state=='min'){
						value.size_y=$('#'+ value.id).attr('data-sizey-old')
						_positions[i]=value;
					}
				
				});
				var positions = JSON.stringify(_positions);
				localStorage.setItem(page, positions);
			}
		}	
    }).data('gridster');


	/* load states (after colors) */
	if(localdata_states){
		$.each(localdata_states, function(i,value){
			if(value){
				console.log(value);
				if(value.state == 'closed'){
					$(".gridster > ul").data('gridster').remove_widget($('#'+value.panel));
				}else if(value.state == false) _state_minimize(value.panel);
			}
		});
	}

	/* register the minimize button */
	$(document).on("click", ".panel-hide", function(e) {
		e.preventDefault();    
		var panel = $(this).attr("data-id");
		if($(this).hasClass('glyphicon-minus')){
			_state_minimize(panel);
			var _state=false;

		} else {
			_state_maxamize(panel);
			var _state=true;
		}
		_state_update(panel, _state);

	});

	/* register the maximize button */
	$(document).on("click", ".panel-max", function(e) {
		e.preventDefault();    
		var panel = $(this).attr("data-id");
		if($(this).hasClass('glyphicon-resize-small')){

			$('.main-nav').show();
			$('#'+panel).find('.hide-full').show();
			$('#'+panel +' .gs-resize-handle').hide();
			$('#'+panel).css({'position':'absolute', 'top':$('#'+panel).attr('data-top'), 'left':$('#'+panel).attr('data-left'),'width':$('#'+panel).attr('data-width'), 'height':$('#'+panel).attr('data-height'), 'z-index':'0'});
			$(this).removeClass('glyphicon-resize-small').addClass('glyphicon-resize-full');

		} else {
			$('.main-nav').hide();
			var _position=$('#'+panel).position();
			$('#'+panel).attr({
				'data-width': $('#'+panel).width(), 
				'data-height':$('#'+panel).height(),
				'data-left':_position.left,
				'data-top':_position.top
			});
			$('#'+panel).css({'position':'fixed', 'top':'0', 'left':'0','width':'100%', 'height':'100%', 'z-index':'9999'});

			$(this).removeClass('glyphicon-resize-full').addClass('glyphicon-resize-small');
			$('#'+panel +' .gs-resize-handle').show();
			$('#'+panel).find('.hide-full').hide();
		}
	});

	/* helpers */

	function _state_update(panel, _state){
		var _states = {
			panel: panel,
			state: _state
		  };

		if(localdata_states){
			$.each(localdata_states, function(i,value){
				if(value){
					if(value.panel == panel) localdata_states.splice(i, 1);		
				}
			});
		} else localdata_states=[];

		localdata_states.push(_states);
		localStorage.setItem(states, JSON.stringify(localdata_states));
	}

	function _state_maxamize(panel){
		$('#'+panel +'').attr('data-state', 'max');
		var _oldsize=parseInt($('#'+panel).attr('data-sizey-old'));
		$('#'+panel +'').attr('data-sizey', _oldsize);
		$(".gridster > ul").data('gridster').resize_widget($('#'+panel),$('#'+panel).attr('data-sizex'),_oldsize);
		$('#'+panel +' .panel').css('padding-bottom', '60px');
		$('#'+panel +' .panel-body').slideDown();
		$('#'+panel +' .panel-hide').removeClass('glyphicon-plus').addClass('glyphicon-minus');
		$('#'+panel +' .gs-resize-handle').show();
		$('#'+panel +' .panel-color, #'+panel +' .panel-max, #'+panel +' .panel-close').show();
	}

	function _state_minimize(panel){
		$('#'+panel +'').attr('data-state', 'min');
		$('#'+panel).attr('data-sizey-old', $('#'+panel).attr('data-sizey'));
		$(".gridster > ul").data('gridster').resize_widget($('#'+panel),$('#'+panel).attr('data-sizex'),1);
		$('#'+panel).attr('data-sizey', '1');
		$('#'+panel +' .gs-resize-handle').hide();
		$('#'+panel +' .panel-body').slideUp();
		$('#'+panel +' .panel-hide').removeClass('glyphicon-minus').addClass('glyphicon-plus');
		$('#'+panel +' .panel').css('padding-bottom', '0px');
		$('#'+panel +' .panel-color, #'+panel +' .panel-max, #'+panel +' .panel-close').hide();
	}

	function _resize_gridster(){
		gridster.resize_widget_dimensions({
			widget_base_dimensions: [(((base_size*($( window ).width()/base_size))/cols)-offset), 50],
			widget_margins: [5, 5],
		});
	}


	/* we're ready for the show */
	$(window).on('resize load',_resize_gridster);

	/* give it a bit to fully load then fade in */
	setTimeout(function(){
		$('.gridster').fadeIn('fast');
	}, 400);

}