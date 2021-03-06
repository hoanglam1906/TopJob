<html>
<head>
	<meta charset="utf-8">
    <meta author="Hoàng Tùng Lâm" content="Bài tập lớn">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta http-equiv="refresh" content="3" > -->
    <link rel="icon" href="Images/logo.png">
	<title>TopJob2 - Login</title>
	<style >
		/**/
		input
		{

			user-select: text;
			background-color: white;
			cursor: auto;
		}
		body
		{
			margin: 0px 0px 0px 0px;
			background-color: white;
		}
		
		.header
		{
			/*position: fixed;*/
			width: 100%;
			height: 100px;
			/*background-color: lightgrey;*/
			/*position: fixed;*/
		}
		.header-contents
		{
			max-width: 100%;
			position: center;
			border: 1px solid black;
		}
		.logo
		{
			float: left;
			margin-top: 15px;
		}
		.nav
		{
			float: right;
			margin-right: 10px;
			margin-top: 39px;
			list-style: none;
			
		}
		
		.nav__items
		{

			cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
			text-decoration: none; /*tắt gạch chân của link text*/
			color: black;
			font-size: 25px;
			text-transform: uppercase;
		}
		.nav__itemsred
		{
			cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
			text-decoration: none; /*tắt gạch chân của link text*/
			color: #ff6600;
			font-size: 25px;
			text-transform: uppercase;
		}
		.nav__items:hover
		{
			color:#ff6600;
		}
		.nav__itembox:hover
		{
			transform: scale(1.2,1.2); 
		}
		.nav__itembox
		{
			display: inline-block;
			text-align: center;
			border: 1px solid black;
			padding-left: 10px;
			padding-right: 10px;

		}
		@media only screen and (min-width: 970px)
				{
					.nav_replace
					{
						display: none;
					}
				}
				@media only screen and (max-width: 969px)
				{
					.nav
					{
						display: none;
					}
					.nav_replace
					{
						list-style: none;
					}
					.nav__itemboxnew:hover
					{
						transform: scale(1.2,1.2); 
					}

					.nav__itemboxnew
					{
						width: 60%;
						text-align: center;
						border: 1px solid black;
						padding-left: 10px;
						padding-right: 10px;
						margin-left: auto;
		    			margin-right: auto;
					}
					.nav__itemsnew
					{
						cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
						text-decoration: none; /*tắt gạch chân của link text*/
						color: black;
						font-size: 30px;
						text-transform: uppercase;
					}

					.nav__itemsrednew
					{
						cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
						text-decoration: none; /*tắt gạch chân của link text*/
						color: #ff6600;
						font-size: 35px;
						text-transform: uppercase;
					}
				}
				form 
				{
    				border-top:1px solid #ccc;
				}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #ff6600;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}


.container {
    padding: 16px;
    width: 800px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
}
.container-2 {
    padding: 16px;
    width: 800px;
    margin-left: auto;
    margin-right: auto;
    
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
	</style>
</head>
<body>
    
    <?php
    require_once("lib/connection.php");
    if (isset($_POST["btn_submit"])) {
	// lấy thông tin người dùng
	$email = $_POST["email"];
	$password = $_POST["pass"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$email = strip_tags($email);
	$email = addslashes($email);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($email == "" || $password =="") {
		echo "You must fill in both Email and Password!";
	}else{
		$sql = "select * from user where email = '$email' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "Wrong email or password!";
		}
                else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				
			if($data["position"]=='')
                        {
                            header('Location: user.html?'.$data['position']);
                        }                
                        else if ($data["position"]=='student')
                        {
                            header('Location: student.html');
                        }
                        else 
                        {
                            header('Location: employer.html');
                        }	
	    	}
			
		}
	}
}
       ?>
	<section class="header">
		<div class header-contents>
			<a class="logo" href="index.html">
				<img src="Images/logo_small.png">
			</a>
		
			<nav class="nav">
				<li class="nav__itembox"> <a class="nav__items" href="index.html">Home</a> </li>
				<li class="nav__itembox"> <a class="nav__items" href="About.html">About Us</a> </li>
				<!-- <li class="nav__itembox"> <a class="nav__items" href="Student.html">Student</a> </li>
				<li class="nav__itembox"> <a class="nav__items" href="Employer.html">Employer</a> </li> -->
				<li class="nav__itembox"> <a class="nav__itemsred" href="Login.php">Login</a> </li>
				<li class="nav__itembox"> <a class="nav__items" href="Signup.php">Signup</a> </li>
			</nav>
		</div>
	</section>
	<div class="nav_replace">
				<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="index.html">Home</a> </li>
				<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="About.html">About Us</a> </li>
				<!-- <li class="nav__itemboxnew"> <a class="nav__itemsnew" href="Student.html">Student</a> </li>
				<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="Employer.html">Employer</a> </li> -->
				<li class="nav__itemboxnew"> <a class="nav__itemsrednew" href="Login.php">Login</a> </li>
				<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="Signup.php">Signup</a> </li>
			</div>
		<form class="login-form" action="Login.php" method="post">
			<div class="container">
				<label>
					<b>Email</b>
				</label>
				<input type="text" placeholder="Enter your Email here" name="email" id="email" required="">
				<label> 
					<b>Password</b>
				</label>
				<input type="password" placeholder="Enter your password here" name="pass" id="password" required="">
				<button type="submit" value="Login" name="btn_submit" id="submitbtn" >Login</button>
				<input type="checkbox" > Remember me
			</div>
			<div class="container-2" style="background-color:#f1f1f1">
    			<button type="button" class="cancelbtn" onclick="header("Login.php")">Cancel</button>
    			<span class="psw">Forgot <a href="#">password?</a></span>
  			</div>

  			<!-- <script type="text/javascript">
  				function validate() {
  					var username = document.getElementById("username").value;
  					var password = document.getElementById("password").value;
  					if (username=="hoanglam1906" && password=="123456") {
  						alert("Login successfully");
  						 window.open("Student_profile.html");
  						 // window.location.assign("Student_profile.html");

  					}
  					else if (username=="employer" && password=="123456") {
  						alert("Login successfully");
  						window.open("Employer_profile.html");
  						
  					}

  					else{
  						alert("Wrong username or password, try again!");

  					}
  				}
  			</script> -->
                    <script>
                // This is called with the results from from FB.getLoginStatus().
                function statusChangeCallback(response) {
                    console.log('statusChangeCallback');
                    console.log(response);
                    // The response object is returned with a status field that lets the
                    // app know the current login status of the person.
                    // Full docs on the response object can be found in the documentation
                    // for FB.getLoginStatus().
                    if (response.status === 'connected') {
                        // Logged into your app and Facebook.
                        testAPI();
                    } else {
                        // The person is not logged into your app or we are unable to tell.
                        document.getElementById('status').innerHTML = 'Please log ' +
                                'into this app.';
                    }
                }

                // This function is called when someone finishes with the Login
                // Button.  See the onlogin handler attached to it in the sample
                // code below.
                function checkLoginState() {
                    FB.getLoginStatus(function (response) {
                        statusChangeCallback(response);
                    });
                }

                window.fbAsyncInit = function () {
                    FB.init({
                        appId: '109853733067908',
                        cookie: true, // enable cookies to allow the server to access 
                        // the session
                        xfbml: true, // parse social plugins on this page
                        version: 'v2.8' // use graph api version 2.8
                    });

                    // Now that we've initialized the JavaScript SDK, we call 
                    // FB.getLoginStatus().  This function gets the state of the
                    // person visiting this page and can return one of three states to
                    // the callback you provide.  They can be:
                    //
                    // 1. Logged into your app ('connected')
                    // 2. Logged into Facebook, but not your app ('not_authorized')
                    // 3. Not logged into Facebook and can't tell if they are logged into
                    //    your app or not.
                    //
                    // These three cases are handled in the callback function.

                    FB.getLoginStatus(function (response) {
                        statusChangeCallback(response);
                    });

                };

                // Load the SDK asynchronously
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));

                // Here we run a very simple test of the Graph API after login is
                // successful.  See statusChangeCallback() for when this call is made.
                function testAPI() {
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function (response) {
                        console.log('Successful login for: ' + response.name);
                        document.getElementById('status').innerHTML =
                                'Thanks for logging in, ' + response.name + '!';
                    });
                }
            </script>

            <!--
              Below we include the Login Button social plugin. This button uses
              the JavaScript SDK to present a graphical Login button that triggers
              the FB.login() function when clicked.
            -->

            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
            </fb:login-button>

            <div id="status">
            </div>
		</form>
	
</body>
</html>