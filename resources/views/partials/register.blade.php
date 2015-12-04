

	<div id="register" class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>
	<h1 class="form-h1">Register</h1>

				{!! Form::open(['url' => '/user', 'method' => 'post']) !!}

				<div class="form-group">
					{!! Form::label('username', 'Username') !!}
					{!! Form::text('username', null, ['class' => 'form']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('email', 'Email') !!}
					{!! Form::email('email', null, ['class' => 'form']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('name', 'Name') !!}
					{!! Form::text('name', null, ['class' => 'form']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('password', 'Password') !!}
					{!! Form::password('password', ['class' => 'form']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Submit', ['class' => 'submit-button']) !!}
				</div>

				{!! Form::close() !!}

	

    </div>
</div>