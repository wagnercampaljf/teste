<html>
<head></head>
<body>
	<table>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Tipo</td>
			<td>Data de Criação</td>
			<td colspan="2">Ações</td>
		</tr>
		@foreach($produtos as $produto)
		<tr>
			<td>{{$produto->id}}</td>
			<td>{{$produto->nome}}</td>
			<td>{{$produto->preco}}</td>
			<td>{{$produto->tipo}}</td>
			<td>{{$produto->created_at}}</td>
			<td><a href="{{ url('produtos/edit/'.$produto->id) }}">Editar</a></td>
			<td>
				<a href="{{ url('produtos/destroy/'.$produto->id) }}">Deletar</a>
		    </td>

		</tr>
		@endforeach
	</table>
	<a href="{{url('produtos/create')}}">Incluir</a>


</body>
</html>