<!-- start: REGISTER BOX  -->
<div class="box-register">
	<h3>Sign Up</h3>
	<p> Enter your personal details below: </p>
 {!! Form::open(array('url' => '/admin/register', 'class' => 'form-register')) !!}
		<div class="errorHandler alert alert-danger no-display">
			<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
		</div>
		<fieldset>
			<!-- <input type="text" class="form-control" name="name" placeholder="Name" id="name"> -->
			<div class="row">
				<div class="form-group col-md-6">
					{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
				</div>
				<!-- First Name Field -->
				<div class="form-group col-md-6">
					{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
				</div>
			</div>

			<div class="form-group">
				<span class="input-icon">
					<input type="email" class="form-control" name="email" placeholder="Email">
					<i class="fa fa-envelope"></i> </span>
				</div>
				<div class="form-group">
					<span class="input-icon">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						<i class="fa fa-lock"></i> </span>
					</div>
					<div class="form-group">
						<span class="input-icon">
							<input type="password" class="form-control" name="password_again" placeholder="Password Again">
							<i class="fa fa-lock"></i> </span>
						</div>
						<!-- <div class="form-group">
							<div>
								<label for="agree" class="checkbox-inline">
									<input type="checkbox" class="grey agree" id="agree" name="agree">
									I agree to the Terms of Service and Privacy Policy
								</label>
							</div>
						</div> -->


						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Back
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Submit <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				 {!! Form::close() !!}
			</div>
			<!-- end: REGISTER BOX -->
