@extends('users.app')

@section('content')
	<div class="alert alert-danger">
		<p>Corrige los siguientes errores:</p>
		@foreach($errors->all() as $error)
			<ul>
				<li>{{$error}}</li>
			</ul>
		@endforeach
	</div>
	<!-- Page container -->
	<div class="page-container">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Registration form -->


				<form  role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
					<div class="row">
						<div class="col-lg-6 col-lg-offset-3">
							<div class="panel registration-form">
								<div class="panel-body">
									<div class="text-center">
										<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
										<h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
									</div>

									<div class="form-group has-feedback form-group{{ $errors->has('denominacion') ? ' has-error' : '' }}">
										 
										<span class="display-block">DATOS DE LA ENTIDAD</span>
										<input id="denominacion" name="denominacion"
										 type="text" class="form-control"
										  placeholder="Denominación" 
										  value="{{ old('denominacion') }}">
										@if ($errors->has('denominacion'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('') }}</strong>
	                                    </span>
	                                	@endif
										<div class="form-control-feedback">
											<i class="icon-user-plus text-muted"></i>
										</div>
										 
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<select  name="pais" class="form-control">
													<option>PERU</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback">
												<select name="ciudad" class="form-control">
													<option>LIMA</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback form-group has-feedback form-group{{ $errors->has('codpostalE') ? ' has-error' : '' }}">
												<input id="codpostalE" 
												name="codpostalE" type="text"
												 class="form-control" 
												 value="{{ old('codpostalE') }}"
												  placeholder="Código Postal">
												@if ($errors->has('codpostalE'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('dirEntidad') ? ' has-error' : '' }}">
												<input id="dirEntidad" 
												name="dirEntidad" type="text" class="form-control" placeholder="Dirección" 
												value="{{ old('dirEntidad') }}">
												@if ($errors->has('dirEntidad'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<span>DATOS DEL TITULAR DE LA ENTIDAD</span>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('nametitular') ? ' has-error' : '' }}">
												<input id="nametitular" name="nametitular"
												 type="text" value="{{ old('nametitular') }}"
												 class="form-control"
												  placeholder="Nombres">
												@if ($errors->has('nametitular'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif	
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('apetitular') ? ' has-error' : '' }}">

												<input id="apetitular" 
												value="{{ old('apetitular') }}" 
												name="apetitular" type="text"
												 class="form-control"
												  placeholder="Apellidos">

												@if ($errors->has('apetitular'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif	
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('denotitular') ? ' has-error' : '' }}">
												<input id="denotitular" name="denotitular"
												 type="text" value="{{ old('denotitular') }}"        class="form-control" 
												  placeholder="Denominación del cargo">
												@if ($errors->has('denotitular'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif	

												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('codtelefono') ? ' has-error' : '' }}">
												<input id="codtelefono" 
												name="codtelefono" type="text"
												 class="form-control"
												  value="{{ old('codtelefono') }}" 
												placeholder="Código telefónico del País / Ciudad">
												@if ($errors->has('codtelefono'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif	
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('teletitular') ? ' has-error' : '' }}">
												<input id="teletitular" name="teletitular"
												 type="email" class="form-control" 
												 value="{{ old('teletitular') }}"
												  placeholder="Teléfono Fijo">
												@if ($errors->has('teletitular'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif	
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('ceulartitular') ? ' has-error' : '' }}">
												<input id="ceulartitular"
												 name="ceulartitular" type="text" class="form-control" value="{{ old('ceulartitular') }}"  placeholder="Teléfono Celular">
												@if ($errors->has('ceulartitular'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<span>DATOS DE LA PERSONA DE CONTACTO</span>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('namecontac') ? ' has-error' : '' }}">
												<input id="namecontac" name="namecontac" 
												type="text" class="form-control"
												 value="{{ old('namecontac') }}"
												  placeholder="Nombres">
												@if ($errors->has('namecontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('apecontac') ? ' has-error' : '' }}">
												<input id="apecontac" name="apecontac" 
												type="text" class="form-control" 
												value="{{ old('apecontac') }}"
												 placeholder="Apellidos">
												@if ($errors->has('apecontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('cargocontac') ? ' has-error' : '' }}">
												<input id="cargocontac"
												 name="cargocontac"
												  type="text" value="{{ old('cargocontac') }}"  class="form-control" 
												 placeholder="Denominación del cargo">
												@if ($errors->has('cargocontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('skypecontac') ? ' has-error' : '' }}">
												<input id="skypecontac" name="skypecontac" 
												type="text" value="{{ old('skypecontac') }}" 
												 class="form-control" placeholder="Cuenta Skype">
												@if ($errors->has('skypecontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('telefcontac') ? ' has-error' : '' }}">
												<input id="telefcontac" name="telefcontac"
												 type="text" class="form-control" 
												 value="{{ old('telefcontac') }}" 
												 placeholder="Teléfono Fijo">
												@if ($errors->has('telefcontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('celularcontac') ? ' has-error' : '' }}">
												<input id="celularcontac" name="celularcontac"
												 type="text" class="form-control"
												  value="{{ old('celularcontac') }}"
												   placeholder="Teléfono Celular">
												@if ($errors->has('celularcontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('emailcontac') ? ' has-error' : '' }}">
												<input id="emailcontac" name="emailcontac" 
												type="email" value="{{ old('emailcontac') }}"  class="form-control"
												 placeholder="Correo electrónico">
												@if ($errors->has('emailcontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('usercontac') ? ' has-error' : '' }}">
												<input id="usercontac" 
												name="usercontac" 
												type="text" class="form-control" 
												value="{{ old('usercontac') }}" 
												 placeholder="Usuario">
												@if ($errors->has('usercontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback form-group{{ $errors->has('passcontac') ? ' has-error' : '' }}">
												<input id="passcontac" name="passcontac" 
												type="password" value="{{ old('passcontac') }}" class="form-control" placeholder="Clave" required>
												@if ($errors->has('passcontac'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('') }}</strong>
				                                    </span>
			                                	@endif
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<input id="confirmpass" name="confirmpass" 
												type="password"   class="form-control" 
												placeholder="Clave" required>
												 
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled" checked="checked">
												Send me <a href="#">test account settings</a>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled" checked="checked">
												Subscribe to monthly newsletter
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Accept <a href="#">terms of service</a>
											</label>
										</div>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login form</button>
										<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->


				<!-- Footer -->
				<div class="footer text-muted text-center">
					&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
				</div>
				<!-- /footer -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</div>
	<!-- /page container -->
@endsection