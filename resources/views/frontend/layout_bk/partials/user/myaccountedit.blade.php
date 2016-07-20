

<div id="panel_edit_account" class="tab-pane">
   {{--{!! Form::model($profile, ['method' => 'POST', 'action' => ['ProfilesController@update', $profile->id]]) !!}--}}
   {!! Form::open() !!}
    <div class="row">
        <div class="col-md-12">
            <h3>Account Info</h3>
            <hr>
        </div>
        
<div class="col-md-6">
	<div class="fileinput fileinput-new" data-provides="fileinput">
 
	            <div class="fileinput-new thumbnail" style="max-width: 300px; max-height: 300px;">
	                @if($user->pic)
	                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img" />
	                @else
	                    <img src="http://placehold.it/250x250" />
	                @endif
	            </div>
	       
	{{--             <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 300px;">
	            	<img src="http://lorempixel.com/600/600/people/Faker/?75581" />
	            </div> --}}
	            <div>
	                                <span class="btn btn-primary btn-file">
	                                    <span class="fileinput-new">Select image</span>
	                                    <span class="fileinput-exists">Change</span>
	                                    <input type="file" name="pic" id="pic" />
	                                </span>
	                <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
	            </div>
	</div>
	
	
<label class="control-label"> Gender <span class="symbol required"></span> </label> 
<div class="checkbox">
<label class="checkbox-inline"> <input type="checkbox" class="square-grey" value="" name="female">Female </label>
<label class="checkbox-inline"> <input type="checkbox" class="square-grey" value="" name="male">Male </label>
</div>
	
	
	
</div>
      
        
        <div class="col-md-6">
            <!-- Username Field -->
            <div class="form-group">
                {!! Form::label('username', 'User Name:') !!}
                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'User Name']) !!}
            </div>

            <!-- Display Name Field -->
            <div class="form-group">
                {!! Form::label('display_name', 'Display Name:') !!}
                {!! Form::text('display_name', null, ['class' => 'form-control', 'placeholder' => 'Display Name']) !!}
            </div>
            <div class="row">
                <div class="form-group col-sm-6 ">
                    {!! Form::label('first_name', 'First Name:', ['class'=>'control-label']) !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name']) !!}
                </div>
                <div class="form-group col-sm-6 ">
                    {!! Form::label('last_name', 'Last Name:', ['class'=>'control-label']) !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) !!}
                </div>
            </div>
            <div class="form-group connected-group">
                <label class="control-label">
                    Date of Birth
                </label>
                <div class="row">

                    <div class="col-md-6">

                        {!! Form::selectMonth('dob_month', null,['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::text('dob_day', null, ['class' => 'form-control', 'placeholder' => 'Day']) !!}
                        <select name="dd" id="dd" class="form-control" >
                            <option value="">DD</option>
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" placeholder="1982" id="yyyy" name="yyyy" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-control" title="Select Gender..." name="gender">
                        <option value="">Select</option>
                        <option value="male" @if($user->profile->gender === 'male') selected="selected" @endif >MALE</option>
                        <option value="female" @if($user->profile->gender === 'female') selected="selected" @endif >FEMALE</option>
                        {{--<option value="other" @if($user->gender === 'other') selected="selected" @endif >OTHER</option>--}}

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">
                    Gender
                </label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="grey" value="" name="gender" id="gender_female">
                        Female
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="grey" value="" name="gender"  id="gender_male" checked="checked">
                        Male
                    </label>
                </div>
            </div>


            {!! Form::input('date', 'dob', date('m-d-Y'), ['class' => 'form-control']) !!}

        </div>
<div class="col-md-6">
        
	<div class="form-group">
		<label>
			Image Upload
		</label>
		<div class="fileupload fileupload-new" data-provides="fileupload">
			<div class="fileupload-new thumbnail" style="width: 250px; height: 250px;"><img src="assets/images/avatar-1-xl.jpg" alt="">
			</div>
			<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
			<div class="user-edit-image-buttons">
				<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
					<input type="file">
				</span>
				<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
					<i class="fa fa-times"></i> Remove
				</a>
			</div>
		</div>
	</div>												
</div>
  <div class="col-md-6">
        	
        </div>
        

        <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('uuid', 'Uuid: ') !!}
                        {!! Form::text('uuid', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('username', 'Username: ') !!}
                        {!! Form::text('username', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('display_name', 'Display Name: ') !!}
                        {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('gender', 'Gender: ') !!}
                        {!! Form::text('gender', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob', 'Dob: ') !!}
                        {!! Form::text('dob', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob_month', 'Month: ') !!}
                        {!! Form::selectMonth('dob_month', null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob_day', 'Day: ') !!}
                        {!! Form::text('dob_day', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob_year', 'Year: ') !!}
                        {!! Form::text('dob_year', null, ['class' => 'form-control', 'placeholder' => '1976']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('bio', 'Bio: ') !!}
                        {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone_type', 'Phone Type: ') !!}
                        {!! Form::text('phone_type', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Phone: ') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('address_id', 'Address Id: ') !!}
                        {!! Form::text('address_id', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('user_api_key', 'User Api Key: ') !!}
                        {!! Form::text('user_api_key', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('user_api_secret', 'User Api Secret: ') !!}
                        {!! Form::text('user_api_secret', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('user_activation_key', 'User Activation Key: ') !!}
                        {!! Form::text('user_activation_key', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('slug', 'Slug: ') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('activation_code_id', 'Activation Code Id: ') !!}
                        {!! Form::text('activation_code_id', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('activation_code', 'Activation Code: ') !!}
                        {!! Form::text('activation_code', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('confirmation_code', 'Confirmation Code: ') !!}
                        {!! Form::text('confirmation_code', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('position', 'Position: ') !!}
                        {!! Form::text('position', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('company', 'Company: ') !!}
                        {!! Form::text('company', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('website', 'Website: ') !!}
                        {!! Form::text('website', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('skypeid', 'Skypeid: ') !!}
                        {!! Form::text('skypeid', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('supervisor', 'Supervisor: ') !!}
                        {!! Form::text('supervisor', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('employment_status', 'Employment Status: ') !!}
                        {!! Form::text('employment_status', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('employment_title', 'Employment Title: ') !!}
                        {!! Form::text('employment_title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('employment_role', 'Employment Role: ') !!}
                        {!! Form::text('employment_role', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('published', 'Published: ') !!}
                        {!! Form::text('published', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('activated', 'Activated: ') !!}
                        {!! Form::text('activated', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('remember', 'Remember: ') !!}
                        {!! Form::text('remember', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('confirmed', 'Confirmed: ') !!}
                        {!! Form::text('confirmed', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_employee', 'Is Employee: ') !!}
                        {!! Form::text('is_employee', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_fake', 'Is Fake: ') !!}
                        {!! Form::text('is_fake', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('published_on', 'Published On: ') !!}
                        {!! Form::text('published_on', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('activated_on', 'Activated On: ') !!}
                        {!! Form::text('activated_on', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('pic', 'Pic: ') !!}
                        {!! Form::text('pic', null, ['class' => 'form-control']) !!}
                    </div>




                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
        </div>

    </div>
</div>
<script>
    $(function () {
        $('input[name="display_name"]').attr('readonly', 'readonly');
        $('input[name="display_name"]').css('textTransform', 'capitalize');
        $('#display_name,#first_name,#last_name').blur(function () {
            $('input[name="display_name"]').val(
                    $('#first_name').val() + " " + $('#last_name').val());
        });
    });
</script>