<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="asset/stylelogin.css" rel="stylesheet">
    <title>login-page</title>
  </head>
  <body>

  <?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<script>alert('Yah Salah Username sama PAssnya');</script>";
		}else if($_GET['alert']=="belum_login"){
			echo "<script>alert('Login Dulu Bos');</script>";
		}else if($_GET['alert']=="logout"){
			echo "<script>alert('Anda Telah Logout');</script>";
		}
	}
	?>
<div class="container">
        <div class="login-form">
            <div class="card bg-dark text-white p-5" style="border-radius: 1rem;">
            <div class="card-bodytext-center">
                <h2 class="text-center">L O G I N</h2>
                <p class="text-center">Masukkan username dan password</p>
                    <form class="mt-2" action="cek-login.php" method="post">
                        <div class="form-group py-2">
                             <label class="fw-bold" for="inputEmail">username*</label>
                            <input type="text" name="username" class="form-control" id="inputEmail" placeholder="username" required="required">
                        </div>
                        <div class="form-group py-2 mb-3">
                            <label class="fw-bold" for="inputPassword">Password*</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password" required="required">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
                    </form>
            </div>
            </div>
        </div>
 </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>