@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Bem-vindo
				</div>
				@if (Auth::guest())
				<div class="panel-body">
					Seja bem-vindo. Por favor registre-se ou pressione entrar.
				</div>
				@else
				<div class="panel-body">
					Seja bem-vindo.
				</div>
				@endif
			</div>
		</div>
	</div>
@endsection
