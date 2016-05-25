@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Registrar
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/auth/register" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Name -->
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Nome</label>

							<div class="col-sm-8">
								<input type="text" name="name" class="form-control" value="{{ old('name') }}">
							</div>
						</div>

						<!-- E-Mail Address -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">E-Mail</label>

							<div class="col-sm-8">
								<div class="input-group">
									<input type="text" class="form-control" id="emaillocal" onkeyup="generateEmail()">
									<span class="input-group-addon" id="elite" onkeyup="generateEmail()">@eliteconsultores.com.br</span>
									<input type="hidden" class="form-control" name="email" id="email" onkeyup="generateEmail()" value="{{ old('email') }}">
								</div>
							</div>
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Senha</label>

							<div class="col-sm-8">
								<input type="password" name="password" class="form-control">
							</div>
						</div>

						<!-- Confirm Password -->
						<div class="form-group">
							<label for="password_confirmation" class="col-sm-3 control-label">Confirmar Senha</label>

							<div class="col-sm-8">
								<input type="password" name="password_confirmation" class="form-control">
							</div>
						</div>

						<!-- Register Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-sign-in"></i>Registrar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
