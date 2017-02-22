<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="wrapper" style="margin-top:120px;">
<div class="header header-filter" style="background-image: url(images/wave.jpg); height:100%; width:100%; background-size:cover; position:fixed; top:0;">
</div>
		<div class="container container-fluid">
			<div class="row">

				<div class="col-md-4 col-md-offset-8">

                	<div class="card signin-card shadow-z-3">

                     @if (count($errors) > 0)
                     <div id="signin-alert" class="alert alert-danger alert-stay" >
                             <div class="container-fluid">
                                 <div class="alert-icon">
                                    <i class="material-icons">error_outline</i>
                                </div>

                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                      </div>
                      @endif

                      <div class="card-block">
                        <h2 class="card-title">Register</h2>
                        <h4 class="card-subtitle text-muted">for Student</h4>
                      </div>
                      <hr>
                      <div class="card-block">

                          <form id="register-form" method="post" action="register/insert">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                    <span class="material-icons form-control-feedback hide">clear</span>
                                    <span class="help-block">The email already exist!</span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                    <span class="material-icons form-control-feedback hide">clear</span>
                                    <span class="help-block">The email already exist!</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">vpn_key</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Student ID</label>
                                    <input type="text" class="form-control" name="id">
                                    <span class="material-icons form-control-feedback hide">clear</span>
                                    <span class="help-block">The student ID already exist!</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email">
                                    <span class="material-icons form-control-feedback">clear</span>
                                    <span class="help-block">Incorrect/Used email</span>
                                </div>
                            </div>

                          	<div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Gender</label>
                                    <select class="form-control" name="gender" name="gender">
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <span class="material-icons form-control-feedback hide">clear</span>
                                    <span class="help-block">Password not match!</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword">
                                    <span class="material-icons form-control-feedback hide">clear</span>
                                    <span class="help-block">Password not match!</span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Register</button>
                            <a class="btn btn-block btn-simple" href="login">Already register? Sign in here.</a>

                          </form>

                      </div>


                    </div>

                </div>
			</div>

	</div>

</div>

@endsection
