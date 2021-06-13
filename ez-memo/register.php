<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login EZ Memo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style media="screen">
  body {
    background-image: url(assets/background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  #backlogin {
    background: white;
    width: 300px;
    height: 490px;
    border: 1px solid #d2d2d2;
    border-radius: 5px;
    margin-top: 80px;
    margin-bottom: 80px;
  }

  @font-face {
    src: url('font/Product Sans Regular.ttf');
    font-family: Product Sans;
  }

  @font-face {
    src: url('font/OpenSans-Light.ttf');
    font-family: OpenSans-Light;
  }

  #backlogin form {
    margin-top: 10px;
    float: left;
    padding: 5px;
  }

  #backlogin .inputa {
    width: 90%;
    margin-top: 1px;
    height: 50px;
    border: 0px;
    border-bottom: 1px solid #6a82fb;
    font-size: 16px;
    font-family: OpenSans-Light;
    background: transparent;
  }

  #backlogin .wed {
    margin-top: 40px;
    width: 45%;
    height: 40px;
    background: #6a82fb;
    border: none;
    color: white;
    font-family: product sans;
    font-size: 20px;
    border-radius: 5px;
  }

  #backlogin h1 {
    text-align: center;
    padding: 5px;
    color: #6a82fb;
    font-family: Product Sans;
  }

  #backlogin hr {
    width: 50%;
    height: 4px;
    border: none;
    background: #6a82fb;
  }
</style>

<body>
  <center>
    <div id="backlogin">
      <h1><img src="assets/logo_final.png" width="250px" width="100px" alt=""></h1>
      <p style="color: red">
<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "tidakcocok"){
				echo "Konfirmasi Password Register tidak sama";
			}else if($_GET['pesan'] == "terdaftar"){
				echo "Maaf email yang anda masukkan telah terdaftar";
			}else if($_GET['pesan'] == "loginsalah"){
				echo "password atau email salah";
			}else if($_GET['pesan'] == "belumverif"){
				echo "maaf akun anda belum di verifikasi admin";
			}
		}
        
    ?>
</p>
      <form id="login" action="Controller/register-controller.php" method="post"> 
        <input type="text" class="inputa" name="email" value="" placeholder="Email">
        <input type="password" class="inputa" name="password" value="" placeholder="Password"> 
        <input type="password" class="inputa" name="konfirmasi_password" value="" placeholder="konfirmasi Password"> 

        <input type="submit" class="wed" name="" value="Register"> 
        <p>sudah punya akun?</p>
    <a href="index.php">Login</a>
        </form>
       
    </div>
   
  </center>
</body>

</html>