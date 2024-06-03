<?php
  include 'koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'transaksi.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_transaksi WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="assets/icon.png" />
   <link rel="stylesheet" href="admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>FShop Admin | transaksi Entry</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">FShop</span>
	</div>
	<ul class="nav-links">
	   <li>
		<a href="admin.php">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="jenis.php" class="active">
		   <i class="bx bx-box"></i>
		   <span class="links_name">jenis buah</span>
		</a>
	   </li>
	   <li>
		<a href="transaksi.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Transaction</span>
		</a>
	   </li>
	   <li>
		<a href="logout.php">
		   <i class="bx bx-log-out"></i>
		   <span class="links_name">Log out</span>
		</a>
	   </li>
	</ul>
   </div>
   <section class="home-section">
	<nav>
	   <div class="sidebar-button">
		<i class="bx bx-menu sidebarBtn"></i>
	   </div>
	   <div class="profile-details">
		<span class="admin_name">FShop Admin</span>
	   </div>
	</nav>
	<div class="home-content">
	   <h3>Input transaksi buah</h3>
	   <div class="form-login">
		<form
              action="transaksi-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
               <input type="hidden" name="id" value="<?= $data['id'] ?>">
               <label for="transaksi">nama</label>
               <input
                 class="input"
                 type="text"
                 name="nama"
                 id="nama"
                 placeholder="nama"
                 value="<?= $data['nama'] ?>"
               />
               <label for="transaksi">jenisbuah</label>
               <input
                 class="input"
                 type="text"
                 name="jenisbuah"
                 id="jenisbuah"
                 placeholder="jenisbuah"
                 value="<?= $data['jenisbuah']?>"
               />
               <label for="transaksi">harga</label>
               <input
                 class="input"
                 type="text"
                 name="harga"
                 id="harga"
                 placeholder="harga"
                 value="<?= $data['harga']?>"
               />
               <label for="transaksi">tanggal</label>
               <input
                 class="input"
                 type="text"
                 name="tanggal"
                 id="tanggal"
                 placeholder="tanggal"
                 value="<?= $data['tanggal']?>"
               />
               <button type="submit" class="btn btn-simpan" name="edit">
                 Edit
               </button>
          </form>
	   </div>
    </div>
  </section>
  <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
	   sidebar.classList.toggle("active");
	   if (sidebar.classList.contains("active")) {
		sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
	   } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	   };
   </script>
</body>
</html>
