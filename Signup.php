
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

    <!-- Bootstrap -->
   <link href="Signup.css" rel="stylesheet"> 
      <link rel="stylesheet" type="text/css" href="Signup1.css">
      <link rel="stylesheet" type="text/css" href="../Assignment1/Home/src/css/Signup1.css">

    
  </head>



<body>
    
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $confirmErr = $passwordErr = "";
$name = $email = $confirmPassword = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /* if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  } */
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }    
    
  /* if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  } */
    
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }    
    
  if (empty($_POST["confirmPassword"])) {
    $confirmErr = "Confirm Password is required";
  } else if($password!=$confirmPassword){
      
      $confirmErr= "Password doesn't match";
      
  }
    
    else {
    $confirmPassword = test_input($_POST["password"]);
  }    
    
  /*if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  } */
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    

        

    
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="../Assignment1/Home/src/index.html">LIVRE</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="../Assignment1/Home/src/index.html">Home</a>
						</li>
						<li>
							<a href="#">Top Charts</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Fiction</a>
								</li>
								<li>
									<a href="#">Non Fiction</a>
								</li>
								<li>
									<a href="#">Biography</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Award Winners</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">View All</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Search
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="#">Sign up</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="../Assignment1/Login.html">Login</a>
								</li>
								<li>
									<a href="#">Wish list</a>
								</li>
								<li>
									<a href="#">Your Orders</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Sign out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
            </div>
        </div>
    
    
    
    
    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <div class="container">
				<div>
                    
                    <div class="row">
                        
                        
                        
                        <div class="col-md-12">
                            <h2 style="color:#000; font-family:monospace; font-size:4em; " class="mod" >LIVRE</h2>
                        
                        <h3 style="color:#f2f2f2; font-weight: 300;">You're almost there! Create an account</h3>
                        
                        </div>
                    
                    </div>
                    
                    <div class="row">
                        
                     <div class="col-md-4">
                    
                    
                    </div>
                    
                    <div class="col-md-4">
                    
                    <p style="text-align:left;"><span class="error">* required field.</span></p>
                    </div>
                        </div>
                        
                    <div class="row">
                        
                        <div class="col-md-4">
                        </div>
                        
                        <div class="col-md-4">
					   <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Name"/>
                           
                        </div>
                        
                        <div class="col-md-4 left">
                             <span class="error">* <?php echo $nameErr;?></span>
                        </div>
                        
                    </div>
                    
                    
                <div class="row">
                    
                    <div class="col-md-4">
                        </div>
                    
                    <div class="col-md-4">
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email Address"/>
                    </div>
                    
                    <div class="col-md-4 left">
                             <span class="error">* <?php echo $emailErr;?></span>
                        </div>
                    
				</div>
                    
                   <div class="row">
                       
                       <div class="col-md-4">
                        </div>
                       
                       <div class="col-md-4">
					<input type="password" class="form-control" id="exampleInputpassword" placeholder="Password" name="password"/>
                           </div>
                       
                       <div class="col-md-4 left">
                             <span class="error">* <?php echo $passwordErr;?></span>
                           
                            
                        </div>
				</div> 
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                        </div>
                        
                        <div class="col-md-4">
					<input type="password" class="form-control" name="confirmPassword" id="exampleInputpassword" placeholder="Confirm Password" />
				</div> 
                        
                         <div class="col-md-4 left">
                             <span class="error">* <?php echo $confirmErr;?></span>
                                 
                        </div>
    
                    </div>
                    
                
                    <div class="row">
                        
                        <div class="col-md-4">
                        </div>
                        
                        <div class="col-md-4">
					<input type="text" class="form-control" id="exampleInputState" placeholder="City"/>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                        </div>
                        
                        <div class="col-md-4">
					<input type="text" class="form-control" id="exampleInputCity" placeholder="State"/>
                                </div>
                    </div>
                  
                    <div class="row">
                        
                        <div class="col-md-4">
                        </div>
                    
                    <div class="col-md-4 mod1">
                        
                        <label id="mod1">
                        Newsletter <br>
                        </label>
                        <input type="radio" value="Yes" name="User">&nbsp;&nbsp;Yes 
                        &nbsp;
                        <input type="radio" value="No" name="User">&nbsp;&nbsp;No 
                        
                        </div>
                    </div>
                    
                    <div class="row row2">
                        
                        <div class="col-md-4">
                        </div>
                        
                        <div class="col-md-4">
                    
                        <button class="btn-default btn row1"><h6>&nbsp;&nbsp;SUBMIT&nbsp;&nbsp;</h6></button>
                        <button class="btn-default btn row1"><h6>&nbsp;&nbsp;RESET&nbsp;&nbsp;</h6></button>
                        
                        </div>
                        
                        
                        </div>
                    
                    </div>
                   
				</div>	 
					
				
			</form>
    
    
    
    
    
     <script src="../Assignment1/Home/src/js/jquery.min.js"></script>
    <script src="../Assignment1/Home/src/js/bootstrap.min.js"></script>
    <script src="../Assignment1/Home/src/js/scripts.js"></script>
    
    
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> 
    
    <script>
        
        
                     
             $('#ajax').on('click',function()
                    {
            $.ajax({
                
                url:"http://localhost/Assignment1/Signup.php"
            }).done(function(response){
            console.log(response);
            $('div#output').php(response);
        });
        });
        
        
        </script>  --> 
    
    
    <style>
    
        h3{
            font-size: 22px;
            
        }
        
        .mod1{
            
            color:#000;
            font-weight: 300;
        }
        
        .row1{
            margin-right:1em;
        }
        
        body{
            
            background-color: black;
            background-image: url("background-1217081_1920.jpg");
            background-size: 1500px 1000px;
            
        }
        
        .mod{
            
            padding-top: .7em;
        }
        
        .form-control{
            
            background-color: black;
            
            border-color: #3e3e3e;
            
    
        }
        
        .row2{
            
            text-align: center;
           font-family: sans-serif;
            font-weight: 100;
        }
        
        .btn-default{
                    
                    padding-right: 25px;
                    padding-left: 25px;
    
                }
    
       
        .container{
            
            text-align: center;
        }
        
        .error{
            
            color:darkred;
        }
        
        .left{
            
            text-align: left;
        }
        
    </style>
    
</body>  
    
</html>