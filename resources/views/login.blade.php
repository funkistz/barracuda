<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'login')

@section('content')

<div class="wrapper">
    <div class="header header-filter" style="background-image: url({{ URL::to('/') }}/images/wave.jpg); height:100%; width:100%; background-size:cover; position:fixed; top:0;">
    </div>
    <div class="container container-fluid" style="margin-top:110px;">
        <div class="row">

            <div class="col-md-4 col-md-offset-8">
            	<div class="tab-content">
                	<div class="tab-pane active" id="student">

                        <div class="card shadow-z-3">

                          @if (count($errors) > 0)
                          <div id="signin-alert" class="alert alert-danger alert-stay" >
                                  <div class="container-fluid">
                                      <div class="alert-icon">
                                         <i class="material-icons">error_outline</i>
                                     </div>

                                         @foreach ($errors->all() as $error)
                                             {{ $error }}<br>
                                         @endforeach

                                 </div>
                           </div>
                           @endif

                          <div class="card-block">
                                <h4 class="text-center icon-large"><i class="material-icons">account_circle</i></h4>
                                <h4 class="card-subtitle text-muted text-center">Sign in</h4>
                          </div>
                          <hr>
                          <div class="card-block">

                              <form method="post" action="login/authenticate">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                    <div class="form-group label-floating ">
                                        <label class="control-label">username/email</label>
                                        <input type="text" class="form-control" name="id">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block btn-success">Sign in</button>
                                <a class="btn btn-block btn-simple" href="register">Don't have account yet? Register here.</a>

                                <div class="checkbox checkbox-sm pull-left">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes">
                                        Remember me
                                    </label>
                                </div>
                                <button type="button" class="btn btn-xs btn-default btn-simple pull-right">Forgot password?</button>
                              </form>

                          </div>

                        </div>

                	</div>
                    <div class="tab-pane" id="lecturer">

                    	<div class="card shadow-z-3">

                          <div id="signin-alert2" class="alert alert-danger alert-stay fade-off" >
                                 <div class="container-fluid">
                                     <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" onClick="alerthide('#signin-alert2');">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                     Sorry, but it's look like your userame or password is incorrect.
                                </div>
                          </div>
                          <div class="card-block">
                                <h4 class="text-center icon-large"><i class="material-icons">supervisor_account</i></h4>
                                <h4 class="card-subtitle text-muted text-center">Lecturer sign in</h4>
                          </div>
                          <hr>
                          <div class="card-block">

                              <form id="signin-form-lecturer" method="post" action="authenticate">

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Lecturer ID</label>
                                        <input type="text" class="form-control" name="lecturerid">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password_lec">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block btn-success">Sign in</button>
                                <a class="btn btn-block btn-simple" href="register">Don't have account yet? Register here.</a>

                                <div class="checkbox checkbox-sm pull-left">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes">
                                        Remember me
                                    </label>
                                </div>
                                <button type="button" class="btn btn-xs btn-default btn-simple pull-right">Forgot password?</button>
                              </form>

                          </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@endsection
