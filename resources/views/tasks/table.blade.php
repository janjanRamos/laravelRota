@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-1" style="margin-left: 15px;">
				<div class="panel panel-default">
					<div class="panel-heading">
						Atendimentos
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table" style=" table-layout: fixed;
    word-wrap: break-word;">
	
					<form class="navbar-form navbar-left" role="search" action="">
					<div class="input-group">
						<input type="search" name="q" class="form-control" placeholder="Pesquisar">
     						<span class="input-group-btn">
       						<button class="btn btn-default" type="button">Pesquisar!</button>
      					</span>
					</form>
    				</div>
						<table class="table table-striped">
							<thead>
								<th>Nome do Cliente</th>
								<th>Empresa</th>
								<th>Dúvida correspondente ao Setor</th>
								<th>Dúvida</th>
								<th>Operador</th>
								<th>Data do Atendimento</th>
							</thead>
							<tbody>
								@foreach ($tasks as $task)
									<tr>
										<td class="table-text"><div>{{ $task->name }}</div></td>
										<td class="table-text"><div>{{ $task->company }}</div></td>
										<td class="table-text"><div>{{ $task->doubtsector }}</div></td>
										<td class="table-text"><div>{{ $task->doubt }}</div></td>
										<td class="table-text"><div>{{ $task-> operator}}</div></td>
										<td class="table-text"><div>{{ $task-> created_at}}</div></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
@endsection