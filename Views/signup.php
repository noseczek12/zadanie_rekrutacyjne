<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Strona internetowa</title>
</head>

<body>

	<h3> Rejestracja użytkownika </h3>
	
	<form action="signup.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="password" /> <br />
        Imię: <br /> <input type="text" name="name" /> <br />
        Nazwisko: <br /> <input type="text" name="surname" /> <br />
        Płeć: (wpisz M lub K) <br /> <input type="text" name="sex" /> <br /><br/>
		<input type="submit" value="Zarejestruj się" />
	
	</form>

</body>
</html>