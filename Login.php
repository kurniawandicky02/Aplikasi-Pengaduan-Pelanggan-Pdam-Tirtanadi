<?php
session_start();
$conn = mysqli_connect('localhost','root', '', 'db_keluhan');
?>
<! DOCTYPE html>
<html>
<head>
<meta charse="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>LOGIN</title>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
	<form action="" method="post">
<div class="login">
<div class="avatar">
<i class ="fa fa-user-circle" aria-hidden="true"></i>

<h5>LOGIN</h5>
<tr>
<div class="box-login">
<i class="fas fa-envelope" style ="transform: translate(-10%, -1%);"></i>
<input name="user" type="text" style ="font-size:15pt;">
</div> 
<br>
<div class="box-login">
<i class="fas fa-lock"style ="transform: translate(10%, -20%);"></i>
<i style ="transform: translate(2%, -20%);"/>

<input name="pass" type="password"style ="font-size:15pt;" >
</div>
<div class="box-daftar">
<i class="fas fa-user-plus"></i>
</div> 

<td colspan="1" align="center"><input id="submit-btn" type="submit" name="login" value="LOGIN" style="font-size:15pt; " />

</td>



<div id="contentRight">
	<div style ="color:#FF0000">
        <div style ="font-size:20pt;">
        <div style ="padding-left:35pt;">
        <div style ="transform: translate(10%, -140%);">
        	
        	
<a href="daftarlogin.php" style="color:red "> Daftar</a>
<?php
if (isset($_POST['login'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$data_user = mysqli_query($conn, "SELECT * FROM login WHERE username = '$user' AND password = '$pass'");
    $r = mysqli_fetch_array($data_user);

	$username = $r['username'];
	$password = $r['password'];
	$level = $r['level'];
	if($user == $username && $pass == $password){
		$_SESSION['level'] = $level;
		 $_SESSION['nama'] = $r['nama'];

    echo "

    <script>alert('Login Berhasil');
    window.location='menu.php'</script>";

	}else{
		Echo "<script language='javascript'>alert('login Gagal !');window.history.back();</script>";


}
}
?>
</body>
</html>
