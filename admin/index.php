<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
	header("location:../login.php?alert=belum_login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../asset/admin.css" rel="stylesheet">
  <title>Admin-page</title>
</head>

<body>

  <div class="container-fluid">
    <div class="container">
    <div class="row">
      <div class="col-12 py-2">
        <h4 class="text-center"> <?php echo "SELAMAT DATANG DI ADMINISTRATOR ". $_SESSION['nama']; ?></h4>
      </div>
    </div>
    </div>
  </div>

    <div class="d-flex" id="wrapper">
      <!-- Sidebar-->
      <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light"><?php echo $_SESSION['nama']; ?></div>
        <div class="list-group list-group-flush">
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./index.php">Dashboard</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="?mod=jadwalibadah">Jadwal
            Ibadah</a>
        </div>
        <div class="clear"></div>
        
      </div>
      

		 <div class="container-fluid">
       <div class="konten">

         <!-- Page content wrapper-->
         <div id="page-content-wrapper">
           <!-- Top navigation-->
           <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
             <div class="container-fluid">
               <!-- <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button> -->
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                   <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></a></li>
                   <li class="nav-item"><a class="nav-link" href="../logout.php">Keluar</a></li>
                 </ul>
               </div>
             </div>
           </nav>
           <!-- Page content-->
           <div class="row">
             <div class="col-12">        
           <?php 
       $mod = (isset($_GET['mod']) ? $_GET['mod'] : '');
   
       switch ($mod) {
         case 'jadwalibadah':
           include("jadwal.php");
           break;
   
         case 'editjadwal':
             include("edit-jadwal.php");
             break;
         case 'tambahjadwal':
               include("tambah-jadwal.php");
               break;
         case 'detailjadwal':
               include("detail-jadwal.php");
               break;
         case 'hapus':
             include("hapus.php");
             break;  
         default:
           echo "Selamat Datang";
           break;
       }?>
      
            
             
             <!-- <p>
               Make sure to keep all page content within the
               <code>#page-content-wrapper</code>
               . The top navbar is optional, and just for demonstration. Just create an element with the
               <code>#sidebarToggle</code>
               ID which will toggle the menu when clicked.
             </p> -->
             
             </div>
           </div>
         </div>
       </div>
      
       </div>
       
     </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="../js/bootstrap.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="../js/popper.min.js"></script>
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>