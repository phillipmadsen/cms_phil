
<h3>Sign in to your account</h3>
<p>
    Please enter your name and password to log in.
</p>
<form class="form-login" action="index.html">
    <div class="errorHandler alert alert-danger no-display">
        <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
    </div>
    <fieldset>
        <div class="form-group">
            <span class="input-icon">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <i class="fa fa-user"></i> </span>
        </div>
        <div class="form-group form-actions">
            <span class="input-icon">
                <input type="password" class="form-control password" name="password" placeholder="Password">
                <i class="fa fa-lock"></i>
                <a class="forgot" href="#">
                    I forgot my password
                </a> </span>
        </div>
        <div class="form-actions">
            <label for="remember" class="checkbox-inline">
                <input type="checkbox" class="grey remember" id="remember" name="remember">
                Keep me signed in
            </label>
            <button type="submit" class="btn btn-bricky pull-right">
                Login <i class="fa fa-arrow-circle-right"></i>
            </button>
        </div>
        <div class="new-account">
            Don't have an account yet?
            <a href="#" class="register">
                Create an account
            </a>
        </div>
    </fieldset>
</form>