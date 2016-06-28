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
			@if (isset($produto))
	        {{Form::model($produto, array('url' => 'produtos/update/'.$produto->id))}}
	        @else
	        {{Form::open(array('url' => 'produtos/store'))}}
	        @endif
	            {{Form::token()}}
	            <div class="form-group">
	                <label for="produto-nome">Nome</label>
					{{Form::input('text', 'nome', null, array('class' => 'form-control'))}}
	            </div>

	            <div class="form-group">
	                <label for="produto-preco">Preço</label>
	                <input type="text" name="preco" id="produto-preco" value="{{$produto->preco or ''}}" class="form-control">
	            </div>

	            <div class="form-group">
	                <label for="produto-tipo">Tipo</label>
					<input type="text" name="tipo" id="produto-tipo" value="{{$produto->tipo or ''}}" class="form-control">
	            </div>

	            <div class="form-group">
	                <label for="produto-fornecedor_id">Fornecedor</label>
					{{Form::select('fornecedor_id', $fornecedores)}}
	                	
	            </div>
	            <div class="form-group">
                    <button type="submit" class="btn btn-default">
                    	Salvar
                    </button>
	            </div>
	        {{Form::close()}}
	    </div>
	</body>
</html>