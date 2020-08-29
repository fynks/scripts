<?php session_start(); /* Starts the session */

	/* Check Login form submitted */
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('test' => 'test');

		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

		/* Check Username and Password existence in defined array */
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>None of Your Business</title>
<style>
.Input, input:focus {
        outline:none;
        border: none;
	font-family: "lucida grande";
	font-size: 14px;
	margin: 10px;
	padding: 14px;
	text-align: center;
}
.Table {
	font-family: "lucida grande";
	font-size: 14px;
	margin: 10px;
	padding: 14px;
	text-align: center;
	width:60%;
       margin-top:2em;
}
.Table td {
	background-color: #F8F8F8;}
html{background-color:#56baed}body{font-family:Poppins,sans-serif;height:100vh}h2{text-align:center;font-size:16px;font-weight:600;text-transform:uppercase;display:inline-block;margin:40px 8px 10px 8px;color:#ccc}.wrapper{display:flex;align-items:center;flex-direction:column;justify-content:center;width:100%;min-height:100%;padding:20px}#formContent{-webkit-border-radius:10px 10px 10px 10px;border-radius:10px 10px 10px 10px;background:#fff;padding:30px;width:90%;max-width:450px;position:relative;padding:0;-webkit-box-shadow:0 30px 60px 0 rgba(0,0,0,.3);box-shadow:0 30px 60px 0 rgba(0,0,0,.3);text-align:center}h2.active{color:#0d0d0d;border-bottom:2px solid #5fbae9}input[type=button],input[type=reset],input[type=submit]{background-color:#56baed;border:none;color:#fff;padding:15px 80px;text-align:center;text-decoration:none;display:inline-block;text-transform:uppercase;font-size:13px;-webkit-box-shadow:0 10px 30px 0 rgba(95,186,233,.4);box-shadow:0 10px 30px 0 rgba(95,186,233,.4);-webkit-border-radius:5px 5px 5px 5px;border-radius:5px 5px 5px 5px;margin:5px 20px 40px 20px;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;transition:all .3s ease-in-out}input[type=button]:hover,input[type=reset]:hover,input[type=submit]:hover{background-color:#39ace7}input[type=button]:active,input[type=reset]:active,input[type=submit]:active{-moz-transform:scale(.95);-webkit-transform:scale(.95);-o-transform:scale(.95);-ms-transform:scale(.95);transform:scale(.95)}input[type=text], input[type=Password]{background-color:#f6f6f6;border:none;color:#0d0d0d;padding:15px 32px;text-align:center;text-decoration:none;display:inline-block;font-size:16px;margin:5px;width:85%;border:2px solid #f6f6f6;-webkit-transition:all .5s ease-in-out;-moz-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;transition:all .5s ease-in-out;-webkit-border-radius:5px 5px 5px 5px;border-radius:5px 5px 5px 5px}input[type=text]:focus{background-color:#fff;border-bottom:2px solid #5fbae9}input[type=text]:placeholder{color:#ccc}.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}@-moz-keyframes fadeIn{from{opacity:0}to{opacity:1}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.fadeIn{opacity:0;-webkit-animation:fadeIn ease-in 1;-moz-animation:fadeIn ease-in 1;animation:fadeIn ease-in 1;-webkit-animation-fill-mode:forwards;-moz-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-duration:1s;-moz-animation-duration:1s;animation-duration:1s}.fadeIn.second{-webkit-animation-delay:.6s;-moz-animation-delay:.6s;animation-delay:.6s}.fadeIn.third{-webkit-animation-delay:.8s;-moz-animation-delay:.8s;animation-delay:.8s}.fadeIn.fourth{-webkit-animation-delay:1s;-moz-animation-delay:1s;animation-delay:1s}:focus{outline:0}*{box-sizing:border-box}
</style>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <?php if(isset($msg)){?>
      <tr>
        <td colspan="2" ><?php echo $msg;?></td>
      </tr>
      <?php } ?>
    <h2 class="active"> Sign In </h2>
  <form action="" method="post" name="Login_Form">
      <input  name="Username"  type="text" id="login" class="fadeIn second" placeholder="login">
      <input name="Password" type="password"  type="text" id="password" class="fadeIn third"  placeholder="password">
      <input name="Submit" type="submit" class="fadeIn fourth" value="Log In">
    </form>
  </div>
</div>
</section>
</body>
</html>
