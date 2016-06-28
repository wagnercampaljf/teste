<html>
	<head>			
	    {!! Html::style('/css/bootstrap.css') !!}
	    {!! Html::script('js/jquery.js') !!}
        {!! Html::script('js/bootstrap.js') !!}

	</head>
	<body>
		<h1>Primeiro Teste de Criação</h1>
		<div class="panel-body">
        <!-- Display Validation Errors -->
		@if (count($errors) > 0)
		    <!-- Form Error List -->
		    <div class="alert alert-danger">
		        <strong>Olha o erro!</strong>

		        <br><br>

		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	        {{Form::open(array('action' => 'FornecedorController@postSalvar'))}}
	            {{Form::token()}}
	            <div class="form-group">
	                {{Form::label('nome', 'Nome', ['class' => 'control-label'])}}
					{{Form::input('text', 'nome', null, array('class' => 'form-control'))}}
	            </div>

	            <div class="form-group">
	                {{Form::label('cnpj', 'CNPJ', ['class' => 'control-label'])}}
					{{Form::input('text', 'cnpj', null, array('class' => 'form-control'))}}
	            </div>

	            <div class="form-group">
	                {{Form::label('data_da_empresa', 'Data da Empresa', ['class' => 'control-label'])}}
					{{Form::input('date', 'data_da_empresa', null, array('class' => 'form-control'))}}
	            </div>
	            <div class="form-group">
	            	{{Form::submit('Salvar', array('class'=>'btn btn-default'))}}
	            </div>
	        {{Form::close()}}
	    </div>
	</body>
</html>