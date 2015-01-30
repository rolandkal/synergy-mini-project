!function($){
	
	var $grid = $('.grid > .grid-inner'),
		$blocks = $grid.find('.block'),
		$snaps = $blocks.find('.snap'),
		$computers = $('.computer');

			
	function moveComputer( $target, $item ) {
	  $target.droppable('option', 'accept', $item);
	  if($item.hasClass('parent')){
		  $new = $item.clone().removeClass('parent');
		  addComputers($new);
		  $new.hide().appendTo( $target ).fadeIn();
		  $target.droppable('option', 'accept', '.computer');
	  }else{
		  $item.fadeOut(function() {
		    $item.appendTo( $target ).fadeIn();
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
			},
		})
	}
			
			
	addComputers($computers);
			
	$snaps.droppable({
	
		accept: ".computer",
		hoverClass: "highlight",
		
		drop: function( event, ui ) {
	       // moveComputer( ui.draggable );
	       //$(this).append(ui.draggable.css('position','static'))
	        
	        moveComputer($(this), ui.draggable );
    
	    },
	    out: function(event, ui){
	        $(this).droppable('option', 'accept', '.computer');
	     }   
	    
		
	})
	$('.snap').on('click', 'i.remove', function(e){
		$(e.delegateTarget).droppable('option', 'accept', '.computer').find('.computer').remove();
		
	})
	
	if($blocks.length > 0){
		$( document ).ready(function() {
		  $blocks.height($blocks.width())
		});	
		$( window ).resize(function() {
		  $blocks.height($blocks.width())
		});		
	}
}(jQuery)