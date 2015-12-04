
<div id="openLogin" class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
		<h1 class="form-h1">Login</h1>

		{!! Form::open(['url' => '/auth', 'method' => 'post']) !!}

			<div class="form-group">
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

    </div>
</div>