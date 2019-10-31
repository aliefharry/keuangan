<!DOCTYPE html>
<html>
<head>
	<title>Sistem Keuangan Mandiri</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body{
	font-family: sans-serif;
	background: #d5f0f3;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
    
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>
</head>
<body>

	<h1>Sistem Keuangan Mandiri</h1>

	<div class="kotak_login">
		<p class="tulisan_login"><strong>LOGIN</strong></p>

		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Masukkan Password">

			<!-- <input type="submit" class="tombol_login" value="LOGIN"> -->
			<a href="{{URL::to('/home')}}" class="tombol_login">LOGIN</a>


			<br/>
		</form>
		
	</div>


</body>
</html>