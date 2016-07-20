<div class="box-forgot">
	<h3>Forget Password?</h3>
	<p> Enter your e-mail address below to reset your password. </p>
	          {!! Form::open(array('class' => 'form-signup', 'id' => 'form-signin')) !!}

		<div class="errorHandler alert alert-danger no-display">
			<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
		</div>
		<fieldset>
			<div class="form-group">
				<span class="input-icon">
					<input type="email" class="form-control" name="email" placeholder="Email">
					<i class="fa fa-envelope"></i> </span>
			</div>
			<div class="form-actions">
				<a class="btn btn-light-grey go-back">
					<i class="fa fa-circle-arrow-left"></i> Back
				</a>
				<button type="submit" class="btn btn-bricky pull-right"> Submit <i class="fa fa-arrow-circle-right"></i>
				</button>
			</div>
		</fieldset>
	</form>
		{!! Form::close() !!}
</div>