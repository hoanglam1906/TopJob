	<html>
	<head>
		<meta charset="utf-8">
	    <meta author="Hoàng Tùng Lâm" content="Bài tập lớn">
	    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	    <!-- <meta http-equiv="refresh" content="3" > -->
	    <link rel="icon" href="Images/logo.png">
		<title>TopJob2 - Sign Up</title>
		<style >
			/**/
			body
			{
				margin: 0px 0px 0px 0px;
				background-color: white;
			}
			/**
			{
				box-sizing: border-box;
			}*/
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
			input[type=text], input[type=password] {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}

	/* Set a style for all buttons */
	button {
	    background-color: #ff751a;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
	    padding: 14px 20px;
	    background-color: #f44336;
	}

	/* Float cancel and signup buttons and add an equal width */
	.cancelbtn,.signupbtn {
	    float: left;
	    width: 50%;
	}

	/* Add padding to container elements */
	.container {
	    padding: 16px;
	    width: 800px;
	    margin-left: auto;
	    margin-right: auto;
	    margin-top: 0px;
	}
	.dropdown
	{
		width: 100%;
    	padding: 12px 20px;
    	margin: 8px 0;
    	display: inline-block;
    	border: 1px solid #ccc;
    	box-sizing: border-box;
	}

	/* Clear floats */
	.clearfix::after {
	    content: "";
	    clear: both;
	    display: table;
	}

	/* Change styles for cancel button and signup button on extra small screens */
	@media screen and (max-width: 300px) {
	    .cancelbtn, .signupbtn {
	       width: 100%;
	    }
	}
		</style>
	</head>
	<body>
                <?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$email = $_POST["email"];
                        $username = $_POST["username"];
  			$password = $_POST["pass"];
                        
 			
  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($email == "" || $username=="" || $password == "" ) {
				   echo "Please fill all the input fields!";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from user where email='$email'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Existing Account! Try another!";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO user(
	    					
                                                username,                                                
	    					password,
	    					email
						
	    					) VALUES (
	    					
                                                '$username',
	    					'$password',
						'$email'
	    					
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "Congratulations! You have successfully sign up! Please click at login.";
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
					<li class="nav__itembox"> <a class="nav__items" href="Login.php">Login</a> </li>
					<li class="nav__itembox"> <a class="nav__itemsred" href="Signup.php">Signup</a> </li>
				</nav>
			</div>
		</section>
		<div class="nav_replace">
					<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="index.html">Home</a> </li>
					<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="About.html">About Us</a> </li>
					<!-- <li class="nav__itemboxnew"> <a class="nav__itemsnew" href="Student.html">Student</a> </li>
					<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="Employer.html">Employer</a> </li> -->
					<li class="nav__itemboxnew"> <a class="nav__itemsnew" href="Login.php">Login</a> </li>
					<li class="nav__itemboxnew"> <a class="nav__itemsrednew" href="Signup.php">Signup</a> </li>
				</div>
	<form action="Signup.php" style="border-top:1px solid #ccc" method="post">
	  <div class="container">
	    <label><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" id="email" name="email" required>
            
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" id="username" name="username" required>
                
	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" id="pass" name="pass" required>

<!--	    <label><b>Repeat Password</b></label>
	    <input type="password" placeholder="Repeat Password" name="pass-repeat" required>-->
<!--	    <label> <b>You are a Student or an Employer?</b>
	    	<br>
	    	<select class="dropdown" name="person">
    			<option value="student">Student</option>
    			<option value="employer">Employer</option>   		
  			</select>
  		</label>-->
  		<br>
  		<br>
	    <input type="checkbox" > Remember me
	    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	    <p>Already a member? <a style="color: blue" href="Login.html">Login</a></p>
	    <div class="clearfix">
	      <button type="button" class="cancelbtn">Cancel</button>
	      <button type="submit" name="btn_submit" class="signupbtn">Sign Up</button>
	    </div>
	  </div>
	</form>
	</body>
	</html>