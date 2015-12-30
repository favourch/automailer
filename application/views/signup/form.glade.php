@include('signup/header')

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Application Registration Form</strong></h1>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-6 phone">
                    		<img src="assets/img/iphone.png" alt="">
                    	</div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Fill in the form below to Register to our App</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="{{Url::base('signup')}}" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First Name</label>
			                        	<input type="text" name="first_name" placeholder="First Name" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last Name</label>
			                        	<input type="text" name="last_name" placeholder="Last Name" class="form-last-name form-control" id="form-last-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="email" placeholder="Email Address" class="form-email form-control" id="form-email">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Password</label>
			                        	<input type="password" name="password" placeholder="Your Password" class="form-email form-control" id="form-email">
			                        </div>
			                        <button type="submit" class="btn">Sign me up!</button> or Have an account? <a href="{{Url::link('login')}}"> Login Here!</a>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


@include('signup/footer')