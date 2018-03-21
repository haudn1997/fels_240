<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{trans('message.login')}}</title>
    {{ Html::script(mix('js/myjs.js')) }}
    <!-- <link rel="stylesheet" href="{{mix('js/myjs.js')}}">
    <link rel="stylesheet" href="{{mix('css/mycss.css')}}"> -->
    {{ Html::style(mix('css/mycss.css')) }}
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png"> 
</head>
<body>
    <div class="top-content">        	
        <div class="inner-bg">
            <div class="container">                    
                <div class="row">
                    <div class="col-sm-5">                      	
                        <div class="form-box">
	                        <div class="form-top">
	                            <div class="form-top-left">
	                        	    <h3>Login to our site</h3>
	                            	<p>Enter username and password to log on:</p>
	                        	</div>
	                        	<div class="form-top-right">
	                        		<i class="fa fa-lock"></i>
	                        	</div>
	                        </div>
	                        <div class="form-bottom">
	                            @if (count($errors))
	                            	<div class="alert alert-danger">
	                            	    @foreach($errors->all() as $err)
	                            		    {{ $err }} <br>
	                            	    @endforeach
	                                </div>
	                            @endif
	                            @if (session('announce'))
	                                {{session('announce')}}
	                            @endif
	                            {{ Form::open(['routes' => 'login', 'method' => 'post']) }}
	                            {{ Form::token() }}
				                <div class="form-group">
				                    {{ Form::label('form-username', 'Username', ['class' => 'sr-only']) }}
				                    {{ Form::text('email', null, ['class' => 'form-username form-control', 'placeholder' => 'Email...', 'id' => 'form-username']) }}
				                </div>
				                <div class="form-group">
				                    {{ Form::label('form-password', 'Password', ['class' => 'sr-only']) }}
				                    {{ Form::password('password', ['class' => 'form-password form-control', 'placeholder' => 'Password...', 'id' => 'form-password']) }}
				                </div>
				                {{ Form::submit('Sign in!', ['class' => 'btn']) }}
				                {{ Form::close() }}
			                </div>
		                </div>		                
		                <div class="social-login">
	                        <h3>...or login with:</h3>
	                        <div class="social-login-buttons">
		                        <a class="btn btn-link-2" href="#">
		                            <i class="fa fa-facebook"></i> Facebook
		                        </a>
		                        <a class="btn btn-link-2" href="#">
		                            <i class="fa fa-twitter"></i> Twitter
		                        </a>
		                        <a class="btn btn-link-2" href="#">
		                            <i class="fa fa-google-plus"></i> Google
		                        </a>
	                        </div>
	                    </div>	                        
                    </div>                      
                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>                       	
                    <div class="col-sm-5">                    	
                        <div class="form-box">
                            <div class="form-top">
	                            <div class="form-top-left">
	                        		<h3>Sign up now</h3>
	                            	<p>Fill in the form below to get instant access:</p>
	                        	</div>
	                        	<div class="form-top-right">
	                        		<i class="fa fa-pencil"></i>
	                        	</div>
	                        </div>
	                        <div class="form-bottom">
	                            @if (count($errors))
	                            	<div class="alert alert-danger">
	                            	    @foreach($errors->all() as $err)
	                            	        {{ $err }} <br>
	                            	    @endforeach
	                                </div>
	                            @endif
	                            @if (session('announce_register'))
	                                {{ session('announce_register') }}
	                            @endif
				                {{ Form::open(['routes' => 'register', 'method' => 'post']) }}
				                {{ Form::token() }}
				                <div class="form-group">
				                    {{ Form::label('form-last-name', 'Last name', ['class' => 'sr-only']) }}
				                    {{ Form::text('username', null, ['class' => 'form-last-name form-control', 'placeholder' => 'Username', 'id' => 'form-last-name']) }}
				                </div>
				                <div class="form-group">
				                    {{ Form::label('form-email', 'Email', ['class' => 'sr-only']) }}
				                    {{ Form::text('email_register', null, ['class' => 'form-email form-control', 'placeholder' => 'Email...', 'id' => 'form-email']) }}
				                </div>
                                <div class="form-group">
                                    {{ Form::label('form-password', 'Password', ['class' => 'sr-only']) }}
                                    {{ Form::password('password_register', ['class' => 'form-password form-control', 'placeholder' => 'Password...', 'id' => 'form-password']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('form-password', 'Repeat Password', ['class' => 'sr-only']) }}
                                    {{ Form::password('passwordAgain', ['class' => 'form-password form-control', 'placeholder' => 'Repeat Password...', 'id' => 'form-password']) }}
                                </div>
				                {{ Form::submit('Sign me up!', ['class' => 'btn']) }}
				                {{ Form::close() }}
			                </div>
                        </div>                      	
                    </div>
                </div>                   
            </div>
        </div>           
    </div>
</body>
</html>