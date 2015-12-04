@foreach($listings as $listing)
	<div id="modal{{ $listing->id }}" class="modalDialog">

	    <div>
	    	<a href="#close" title="Close" class="close">X</a>
			
			{{ $listing->category }}

			
	    </div>
		
	</div>
@endforeach