@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Entrar
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')
					<!-- New Task Form -->
					<form action="/auth/login" method="POST" class="form-horizontal" >
					{{ csrf_field() }}

						<!-- E-Mail Address -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">E-Mail</label>
							<div class="col-sm-8">
								<input type="text" name="email" id="email" class="form-control">
							</div>
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Senha</label>

							<div class="col-sm-8">
								<input type="password" name="password" class="form-control">
							</div>
						</div>

						<!-- Login Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-3" formaction="/auth/login">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-sign-in"></i>Entrar
								</button>
							</div>
							
							<div class="col-sm-3" style="position:relative; top:8px;">
								<a href="/password/email" type="submit">Esqueci minha senha</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
