<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ludiflex | Login</title>

</head>
<body>
   <div class="box">
    <div class="container">
        <form action="cek_login.php" method="post">

        <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>

        <div class="input-field">
            <input type="text" name="username" class="input" placeholder="Username" id="username">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" name="password" class="input" placeholder="Password" id="password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="LOGIN">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
        <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alerts'>User ID atau Password Salah!</div>";
		}
	}
	?>
    </form>
    </div>
</div>  
</body>
</html>