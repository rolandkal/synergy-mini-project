!function($){
	$( document ).ready(function() {
		
		var $grid = $('.grid > .grid-inner'),
			$blocks = $grid.find('.block'),
			$snaps = $blocks.find('.snap'),
			$computers = $('.computer'),
			$hostname = $('#hostname'),
			conf = {};
	
		function sendConf(){
			var textfile = null,
				texttowrite = "";


			if(jQuery.isEmptyObject(conf)) return;
			
			// Screens section
			texttowrite += 'section: screens\n';			
			for (var name in conf) {
			   texttowrite += '\t'+name+':\n';			
			}
			texttowrite += 'end\n';	
			
			// Links section
			texttowrite += 'section: links\n';			
			for (var name in conf) {	
				 var position = conf[name];
				 texttowrite += '\t'+name+':\n';

				 for (var n1 in conf){
				 	if(conf[n1] == position-1)
				 		texttowrite += '\t\tleft: '+n1+'\n';
				 	if(conf[n1] == position+1)
				 		texttowrite += '\t\tright: '+n1+'\n';
				 	if(conf[n1] == position-10)
				 		texttowrite += '\t\tdown: '+n1+'\n';
				 	if(conf[n1] == position+1)
				 		texttowrite += '\t\tup: '+n1+'\n';
				 }
				

			}
			texttowrite += 'end';	
			
			var content = new Blob([texttowrite], {type: 'text/plain'});

			if (textfile !== null) {
		      window.URL.revokeObjectURL(textfile);
		    }

		    textfile = window.URL.createObjectURL(content);


			window.open(textfile, '_blank');
			
		    //return textfile;
		}

		function adjustBlocks($blocks){
			 $blocks.height($blocks.width());
		}
	
		function moveComputer( $target, $item, $hostname ) {
		  $target.droppable('option', 'accept', $item);
		  if($item.hasClass('parent')){
			  $new = $item.clone().removeClass('parent').attr('data-hostname', $hostname.val())
			  $new.find('.title').text($hostname.val());					  
			  addComputers($new);
			  $new.hide().appendTo( $target ).fadeIn(function(){
				  $target.droppable('option', 'accept', '.computer');
				  conf[$new.attr('data-hostname')] = $target.attr('data-position');
				  $hostname.val('');
			  });
			  
		  }else{
			  $item.fadeOut(function() {
			    $item.appendTo( $target ).fadeIn(function(){
					conf[$item.attr('data-hostname')] = $target.attr('data-position');
			    });
			    
			  });
		  }
		  
		}
	
		
		function addComputers($computers){
			if(!$computers) return;
			$computers.draggable({
				cancel: ".remove",
				revert: "invalid",
				helper: "clone",
				cursor: "move",
				snap: ".snap",
				start: function( event, ui ){
					$(ui.helper).width($snaps.width()).height($snaps.height())
					if( $(ui.helper).hasClass('parent') && $hostname.val() == '') alert('Please enter the hostname for this computer.');	
				},
			})
		}
				
		adjustBlocks($blocks);
		addComputers($computers);
				
		$snaps.droppable({
		
			accept: ".computer",
			hoverClass: "highlight",
			drop: function( event, ui ) {
				moveComputer($(this), ui.draggable, $hostname );
		    },
		    out: function(event, ui){
		        $(this).droppable('option', 'accept', '.computer');
		    }  
		    
		})
		
		$('.snap').on('click', 'i.remove', function(e){
			$(e.delegateTarget).droppable('option', 'accept', '.computer').find('.computer').remove();
			
		})
		
		$('#getconf').on('click', function(e){
			e.preventDefault;
			sendConf();
		})
	
		

		$( window ).resize(function() {
			if($blocks.length > 0){
				adjustBlocks($blocks);
		  	}
		});		

	});	
}(jQuery)