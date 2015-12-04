	<div id="listing" class="modalDialog">
    <div><a href="#close" title="Close" class="close">X</a>
		<h1 class="upload-form-h1">Upload a listing!</h1>
		{!! Form::open(array('url' => '/upload', 'files' => true)) !!}
    
			<div class="form-group">
				{!! Form::label('image', 'Images') !!}
				{!! Form::file('file') !!}
			</div>

			<div class="form-group">
				{!! Form::label('description', 'Description') !!}
				{!! Form::textarea('description') !!}
			</div>

			<div class="form-group">
				{!! Form::label('category', 'Category') !!}
				{!! Form::select('category', array(
					'elec' => 'Electronics',
					'cloth' => 'Clothing',
					'tool' => 'Tools',
					'vehicles' => 'Vehicles'

				)) !!}
			</div>

			{!! Form::submit() !!}


		{!! Form::close() !!}
	

    </div>
</div>