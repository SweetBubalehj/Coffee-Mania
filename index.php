<?php
	require 'config.php';
	require_once 'connection.php';

	function curat($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}
	
	$login = $parola = "";
	$login_err = $parola_err = 0;
	if (isset($_POST['ok'])) {
		$login = $_POST["login"];
		$parola = $_POST['password'];
		if (empty($login)) {
			$login_err++;
		} else {
			$login = curat($login);
			if (!preg_match("/^[A-z0-9]{4,20}$/",$login)) {
				$login_err++;
			}
		}
		if (empty($parola)) {
			$parola_err++;
		} else {
			$parola = curat($parola);
			if (!preg_match("/^[A-z0-9]{6,15}$/",$parola)) {
				$parola_err++; 
			}
		}
		if (($login_err + $parola_err) == 0) {
		$query = "SELECT * FROM users WHERE login='$login' AND password='$parola'";
		$res = mysqli_query($conn, $query); 
		if($row=mysqli_fetch_array($res)) {
			header('Location: first.php');
		} else {
			header('Location: http://'.'localhost:80'.$cale);
	}
	}
	}
	$login = $parola = "";
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Eu" />
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
<div class="auth">
	<header class="header">
		<h1 >Аутентифицируйтесь для входа!</h1>
	</header>

	<div>
		<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
		<label>Login&nbsp;<input type="text"
	style="background-color:#ffffe6;
	border: 1px solid #696969;
    width: 208px;
	box-shadow: 2px 3px 5px light-gray;" name="login" id="log" title="Введите минимум 4 и максимум 20 букв или цыфр!" maxlength="20"><span class="err">*</span>  </label><br />
	<label>Password&nbsp;<input type="password" class="linie" name="password" id="pass" title="Введите минимум 6 и максимум 15 букв или цыфр!" maxlength="15"/><span class="err">*</span> </label><br />
	<input type="submit" name='ok' class="w3-container w3-border w3-round-xlarge w3-card-16 w3-black w3-padding-16 w3-hover-border-black" value="Войти" />
		</form>
	</div>

	
</div>

</body>

</html>