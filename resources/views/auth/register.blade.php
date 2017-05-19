@extends('layouts.app')

@section('content')
<div class="main-content">

						<!-- BEGIN .left-content -->
						<div class="left-content">
							<!-- <div class="main-title">
								<h2>Login</h2>
								<span>Come and visit us</span>
							</div>-->
							<div class="align">
							

<div id="wrapper">
	<div class="join">Join Today</div>
    	<div class="lock"></div>
	        <div class="clr"></div>
    	    	<div class="login-options">Choose on of the following sign up methods.</div>
                	<a class="twitter" href="{{ url('/auth/twitter') }}">Twitter</a>
                    <a class="facebook" href="{{ url('/auth/facebook') }}">Facebook</a>
                    <a class="google" href="{{ url('/auth/google') }}">Google+</a>
                    <div class="clr"><hr /></div>
                    		<div class="mail-text">Or sign up using your email address.</div>
                            		<div class="forms">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
									{{ csrf_field() }}
                                    <!-- <input name="fullname" type="text" placeholder="Enter your full name..." /> -->
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus size="70" onClick="border: 1px solid #30a8da;" placeholder="Enter your full name..." >

									@if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
                                    <!-- <input name="email" type="text"  id="mail"/> -->
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter your email address..." size="70" onClick="border: 1px solid #30a8da;">

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
                                    <!-- <input name="password" type="password"  id="password"/>-->
									<input id="password" type="password" class="form-control" name="password" required placeholder="Enter a password..." size="70" onClick="border: 1px solid #30a8da;">

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
									<!-- <input name="password" type="password"  id="password"/> -->
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password..." size="70" onClick="border: 1px solid #30a8da;">
									<button type="submit" class="create-acc">Create My Account</button>
                                    </form>
                                    </div>
									
</div>
</div>






						<!-- END .left-content -->
						</div>

					</div>
@endsection
