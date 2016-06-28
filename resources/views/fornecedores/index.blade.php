<html>
<head></head>
<body>
	<table>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Data</td>
			<td>CNPJ</td>
			<td>Data de Criação</td>
			<td colspan="2">Ações</td>
		</tr>
		@foreach($fornecedores as $fornecedor)
		<tr>
			<td>{{$fornecedor->id}}</td>
			<td>{{$fornecedor->nome}}</td>
			<td>{{$fornecedor->data_da_empresa}}</td>
			<td>{{$fornecedor->cnpj}}</td>
			<td>{{$fornecedor->created_at}}</td>
			<td><a href="{{ url('fornecedores/editar/'.$fornecedor->id) }}">Editar</a></td>
			<td>
				<a href="{{ url('fornecedores/destroy/'.$fornecedor->id) }}">Deletar</a>
		    </td>

		</tr>
		@endforeach
	</table>
	<a href="{{url('fornecedores/adicionar')}}">Incluir</a>


</body>
</html>