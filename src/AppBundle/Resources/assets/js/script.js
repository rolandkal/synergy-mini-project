!function($){
	$( document ).ready(function() {
		
		var $grid = $('.grid > .grid-inner'),
			$blocks = $grid.find('.block'),
			$snaps = $blocks.find('.snap'),
			$computers = $('.computer'),
			$hostname = $('#hostname'),
			conf = {};
	
		function adjustBlocks($blocks){
		 $blocks.height($blocks.width())
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
			console.log(conf);
			
		})
	
		

		$( window ).resize(function() {
			if($blocks.length > 0){
				adjustBlocks($blocks);
		  	}
		});		

	});	
}(jQuery)